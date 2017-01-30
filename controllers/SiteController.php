<?php

class SiteController extends Controller
{
    public $allowed = ['index', 'checkstream'];

    public function index()
    {
        $chanels = new Chanels();
        $data = $chanels->selectAll();
        $this->render('index', ['data' => $data]);
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

            echo '<pre>';
            print_r($api_data);

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