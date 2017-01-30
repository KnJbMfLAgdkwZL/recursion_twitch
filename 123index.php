<?php


$name = 'LeaveNeed';
$clientId = '60usmd9l4ab08csqex1z666tdhuwbo';
$channelName = htmlspecialchars($name, ENT_QUOTES);
$api_url = 'https://api.twitch.tv/kraken/streams/';
$request = $api_url . strtolower($channelName) . '?client_id=' . $clientId;
$json = file_get_contents($request);
$json_array = json_decode($json, true);

echo '<pre>';
print_r($json_array);
echo '</pre>';

if ($json_array['stream'] != NULL) {
    $channelTitle = $json_array['stream']['channel']['display_name'];
    $streamTitle = $json_array['stream']['channel']['status'];
    $currentGame = $json_array['stream']['channel']['game'];
    $delay = $json_array['stream']['channel']['delay'];
    $logo = $json_array['stream']['channel']['logo'];
    $status = $json_array['stream']['channel']['status'];

    echo "
        Пользователь: $channelTitle <br>
        Статус: Online <br>
        Сейчас в игре: $currentGame <br>
        Задержка: $delay <br>
        Логотип: $logo <br>
        Заголовок: $streamTitle
        ";
} else {
    echo "$channelName в данный момент Offline />";
}