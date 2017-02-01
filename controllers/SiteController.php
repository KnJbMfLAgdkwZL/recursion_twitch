<?php

class SiteController extends Controller
{
    public $allowed = ['index', 'checkstream', 'addstream', 'getstreams'];

    public function index()
    {
        $chanels = new Chanels();
        $data = $chanels->selectAll();
        $this->render('index', ['data' => $data]);
    }

    public function getstreams()
    {
        header('Content-Type: application/json');
        $chanels = new Chanels();
        $data = $chanels->selectAll();
        $str = json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
        echo $str;
    }

    public function addstream()
    {
        if (isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {
            $g_recaptcha = $_POST['g-recaptcha-response'];

            $url = 'https://www.google.com/recaptcha/api/siteverify';
            $data = [];
            $data['secret'] = '6LdFtAwTAAAAAP26NmaqWTKeH4sMRI608dvVB5sb';
            $data['response'] = $g_recaptcha;
            $data['remoteip'] = $_SERVER['REMOTE_ADDR'];

            $request = $url .
                '?secret=' . $data['secret'] .
                '&response=' . $g_recaptcha .
                '&remoteip=' . $_SERVER['REMOTE_ADDR'];

            $json = file_get_contents($request);
            $json_array = json_decode($json, true);

            if (isset($json_array['success']) && !empty($json_array['success'])) {
                if (isset($_POST['streamname']) && !empty($_POST['streamname'])) {
                    $check = new Check();
                    $streamname = $check->SecureVar($_POST['streamname']);

                    $chanels = new Chanels();
                    $chanels->insert($streamname);

                    $v = $this->get_api($streamname);
                    if ($v['status'] == 'Offline') {
                        $chanels->updateStatus($v['name'], $v['status']);
                    } else if ($v['status'] == 'Live') {
                        $chanels->update($v['name'], $v['currentGame'], $v['logo'], $v['streamTitle'], $v['status']);
                    }
                }
            }
        }
    }

    public function checkstream()
    {
        if ($_GET['key'] == 'gNPXJQoouNn7RPEnutyoi64y0066JbrYCXcH1e3kGzKRX7muokIuGgBRORPJ') {
            $chanels = new Chanels();
            $data = $chanels->selectAll();

            $api_data = [];
            foreach ($data as $v) {
                $api_data[] = $this->get_api($v['name']);
            }

            foreach ($api_data as $v) {
                if ($v['status'] == 'Offline') {
                    $chanels->updateStatus($v['name'], $v['status']);
                } else if ($v['status'] == 'Live') {
                    $chanels->update($v['name'], $v['currentGame'], $v['logo'], $v['streamTitle'], $v['status']);
                }
            }
        }
    }

    private function get_api($name)
    {
        $data = [];
        $data['status'] = 'Offline';
        $data['name'] = $name;

        $clientId = '60usmd9l4ab08csqex1z666tdhuwbo';
        $api_url = 'https://api.twitch.tv/kraken/streams/';
        $request = $api_url . strtolower($name) . '?client_id=' . $clientId;
        $json = file_get_contents($request);
        $json_array = json_decode($json, true);

        if ($json_array['stream'] != NULL) {
            $data['status'] = 'Live';
            $data['currentGame'] = $json_array['stream']['channel']['game'];
            $data['logo'] = $json_array['stream']['channel']['logo'];
            $data['streamTitle'] = $json_array['stream']['channel']['status'];
        }

        return $data;
    }
}