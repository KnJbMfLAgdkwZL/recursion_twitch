<?php

class Check
{
    public function Exists(&$var)
    {
        if (isset($var)) {
            if (!empty($var)) {
                return true;
            }
        }
        return false;
    }

    public function SecureVar($var)
    {
        if (is_array($var)) {
            foreach ($var as $k => &$v) {
                $v = strip_tags($v);
                $v = htmlspecialchars($v, ENT_QUOTES);
                $v = stripslashes($v);
                $v = trim($v);
            }
        } else {
            $v = &$var;
            $v = strip_tags($v);
            $v = htmlspecialchars($v, ENT_QUOTES);
            $v = stripslashes($v);
            $v = trim($v);
        }
        return $var;
    }
}

class ActiveRecord
{
    protected $host = 'localhost';
    protected $db_name = '_mymaintest';
    protected $username = 'root';
    protected $password = '';
    protected static $DBH;

    function Connect()
    {
        $check = new Check();
        if (!$check->Exists(self::$DBH)) {
            $connection = 'mysql:host=' . $this->host . ';dbname=' . $this->db_name . ';charset=utf8';
            self::$DBH = new PDO($connection, $this->username, $this->password);
        }
    }

    static function Disconnect()
    {
        $check = new Check();
        if ($check->Exists(self::$DBH)) {
            self::$DBH = null;
        }
    }

    function Execute($sql, $params = null)
    {
        $this->Connect();
        $stm = self::$DBH->prepare($sql);
        $stm->execute($params);
        $result = $stm->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}

class chanels extends ActiveRecord
{
    function selectAll()
    {
        $sql = 'SELECT * FROM `chanels`';
        $result = $this->Execute($sql);
        return $result;
    }
}

$channel = 'dxdydzdt';
$channelName = htmlspecialchars($channel, ENT_QUOTES);
$clientId = '60usmd9l4ab08csqex1z666tdhuwbo';
//подставляем значение в переменную online
$online = 'Online';
//подставляем значение в переменную offline
$offline = 'Offline';

$json_array = json_decode(file_get_contents('https://api.twitch.tv/kraken/streams/' . strtolower($channelName) . '?client_id=' . $clientId), true);

echo '<pre>';
print_r($json_array);
echo '</pre>';
echo '<hr/>';

if ($json_array['stream'] != NULL) {
    $channelTitle = $json_array['stream']['channel']['display_name'];
    $streamTitle = $json_array['stream']['channel']['status'];
    $currentGame = $json_array['stream']['channel']['game'];
    $delay = $json_array['stream']['channel']['delay'];
    $logo = $json_array['stream']['channel']['logo'];

    echo "Пользователь: $channelTitle <br> Статус: $online <br> Сейчас в игре: $currentGame <br> Задержка: $delay <br> Логотип: $logo";
} else {
    echo "$channelName в данный момент $offline />";
}
?>

<iframe src="https://player.twitch.tv/?channel=dxdydzdt"
        frameborder="0"
        allowfullscreen="true"
        scrolling="no"
        height="378"
        width="620"></iframe>

<iframe src="https://www.twitch.tv/dxdydzdt/chat?popout=" frameborder="0" scrolling="no" height="500" width="350"></iframe>