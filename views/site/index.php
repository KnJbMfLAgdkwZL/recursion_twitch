<table style='width:100%' border='0' id='stream-twitch-container'>
    <tr id='add_stream-tr' style='display: none;'>
        <td colspan='3' id='add_stream-td'>

            <form method="post" action="/index.php?r=site/addstream" id="add_stream-td_form">
                <input type="hidden" name="r" id='r' value="/index.php?r=site/addstream"/>

                <input type='text' name='streamname' id='stream-name' required/>

                <div class='btn btn-color-blue' id='btn-ok'>Ok</div>
                <div class='btn btn-color-red' id='btn-cansel'>Cansel</div>

                <script src='https://www.google.com/recaptcha/api.js'></script>
                <div class="captcha-wraper">
                    <div class="g-recaptcha" data-sitekey="6LdFtAwTAAAAAJZrogwhu0OCKMobv18hwzbnYsPc"></div>
                </div>
            </form>

        </td>
    </tr>
    <tr>
        <td>
            <h2 id='stream-title'>
                <?= $data[0]['streamTitle'] ?>
            </h2>
            <h3 id='stream-h3'>
                <strong id='stream-author'><?= $data[0]['name'] ?></strong>
                стримит
                <strong id='stream-game'><?= $data[0]['currentGame'] ?></strong>
            </h3>
        </td>
        <td>
            <div class='btn btn-color-blue' id='btn-add_stream'>Добавить стрим</div>
        </td>
        <td>
            <div class='btn btn-color-blue' id='btn-list'>
                <i class='s-icon icon-list'></i>
                Список
            </div>
            <div class='btn btn-color-gray' id='btn-chat'>
                <i class='s-icon icon-chat'></i>
                Чат
            </div>
        </td>
    </tr>
    <tr>
        <td id='stream-main-td'>
            <iframe
                id='stream-main-td-iframe-video'
                src='https://player.twitch.tv/?channel=<?= $data[0]['name'] ?>&autoplay=1'
                frameborder='0'
                allowfullscreen='true'
                scrolling='no'
                height='100%'
                width='100%'
                autoplay='1'
            >
            </iframe>
        </td>
        <td colspan='2' id='td-stream-list'>

            <div class="user_list_wraper">
                <h3 id='td-stream-list-title'>Текушие</h3>
                <ul class='td-stream-list-ul'>
                    <?php
                    foreach ($data as $k => $v) {
                        $logo = $v['logo'];
                        if (empty($logo))
                            $logo = 'https://static-cdn.jtvnw.net/jtv_user_pictures/xarth/404_user_70x70.png';

                        $title = $v['streamTitle'];
                        if (empty($title))
                            $title = $v['name'];

                        $currentGame = $v['currentGame'];

                        $status_class = '';
                        $status = $v['status'];
                        if ($status == 'Offline')
                            $status_class = ' li-status-ofline';

                        $list_class = '';
                        if ($k == 0)
                            $list_class = ' td-stream-list-li-current';

                        $name = $v['name'];

                        echo "
                        <li class='td-stream-list-li{$list_class}' onclick='list_click(\"{$name}\", this)'>
                            <span class='td-stream-list-li-avatar'>
                                <img class='td-stream-list-li-avatar-img' src='{$logo}'/>
                            </span>
                            <span class='td-stream-list-li-title'>
                                {$title}
                            </span>
                            <span class='td-stream-list-li-game'>
                                {$currentGame}
                            </span>
                            <span class='td-stream-list-li-status{$status_class}'>{$status}</span>
                        </li>";
                    }
                    ?>
                </ul>
            </div>

        </td>
        <td colspan='2' style='display: none' id='td-stream-chat'>

            <iframe
                id='stream-main-td-iframe-chat'
                src='https://www.twitch.tv/<?= $data[0]['name'] ?>/chat?popout='
                frameborder='0'
                scrolling='no'
                height='100%'
                width='100%'
            ></iframe>

        </td>

    </tr>
</table>
<style>
    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 100;
        src: local('Roboto Thin'), local('Roboto-Thin'), url(http://fonts.gstatic.com/s/roboto/v15/frNV30OaYdlFRtH2VnZZdhTbgVql8nDJpwnrE27mub0.woff2) format('woff2');
        unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

    .captcha-wraper {
        text-align: center;
        padding-top: 10px;
    }

    .g-recaptcha {
        display: inline-block;
    }

    #stream-main-td {
        height: 600px;
        width: 64.123456%;
    }

    .user_list_wraper {
        overflow: auto;
        height: 600px;
    }

    #td-stream-list {
        width: 35.21234%;
        vertical-align: top;
    }

    #td-stream-chat {
        width: 35.21234%;
    }

    .td-stream-list-ul {
        list-style-type: none;
        display: initial;
        text-align: left;

        border: 0;
        outline: 0;
        vertical-align: baseline;
        background: transparent;
        font-size: 100%;
        quotes: none;
    }

    .td-stream-list-li:hover {
        background-color: #191919;
    }

    .td-stream-list-li {
        text-align: left;
        cursor: pointer;
        height: 40px;
        margin: 2px 0;
        min-width: 0;
        display: flex;
        box-align: center;
        align-items: center;
        box-pack: justify;
        justify-content: space-between;
        flex: 1;
        padding-left: 5px;
        background-color: #000;
        color: #a6a6a6;
    }

    .td-stream-list-li-avatar {
        display: inline-block;
        width: 25px;
        height: 25px;
        vertical-align: middle;
        border-radius: 50%;
        margin-right: 10px;
    }

    .td-stream-list-li-avatar-img {
        display: inline-block;
        width: 25px;
        height: 25px;
        vertical-align: middle;
        border-radius: 50%;
        margin-right: 10px;
    }

    .td-stream-list-li-title {
        color: #a6a6a6;
        font: 14px 'Roboto', arial, sans-serif;
        font-weight: bold;
        display: inline-block;
        width: 100%;
        /*white-space: nowrap;*/
        overflow: hidden;
        max-width: 100%;
        text-overflow: ellipsis;
        margin-right: -5px;
    }

    .td-stream-list-li-game {
        display: inline-block;
        width: 100%;
        padding: 0 10px;
        max-width: 100px;
        font-size: 12px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        color: rgba(255, 255, 255, 0.4);
    }

    .td-stream-list-li-status {
        background-color: #3cb878;
        display: flex;
        align-items: center;
        width: 80px;
        padding: 0 7px;
        font-size: 13px;
        font-weight: 300;
        line-height: 1.1;
        color: #fff;
        height: 40px;
    }

    .li-status-ofline {
        background-color: #333;
    }

    .td-stream-list-li-status::before {
        /*background-position: -34px 4px;
        content: '';
        display: inline-block;
        width: 32px;
        height: 40px;
        background-repeat: no-repeat;
        background-image: url('/www/img/playstop.png')*/
    }

    .td-stream-list-li-current:hover {
        background-color: #FFFFFF;
        color: #000000;
    }

    .td-stream-list-li-current {
        background-color: #FFFFFF;
        color: #000000;
    }

    .td-stream-list-li-current > .td-stream-list-li-title,
    .td-stream-list-li-current > .td-stream-list-li-game {
        background-color: #FFFFFF;
        color: #000000;
    }

    table, tr, th, td,
    {
        margin: 0px;
        padding: 0px;
    }

    table, th, td {
        border-collapse: collapse;
        font: 14px 'Roboto', arial, sans-serif;
        background: #222222;
        color: #fff;
    }

    th, td {
        text-align: center;
    }

    #stream-title {
        margin: 0px;
        padding: 0px;
        font-size: 26px;
        line-height: 32px;
        font-weight: 100;
        color: #fff;
        box-sizing: border-box;
        text-align: left;
    }

    #stream-h3 {
        text-align: left;
        margin: 0px;
        padding: 0px;
        color: #aaa;
        font-weight: 300;
        font-size: 14px;
    }

    #td-stream-list-title {
        text-align: left;
        font-size: 12px;
        line-height: 1;
        text-transform: uppercase;
        color: #767676;
        margin: 0px;
        padding: 0px;
        margin-top: 10px;
        margin-bottom: -10px;
    }

    }

    #stream-h3 > strong {
        font-weight: 300;
        color: #FFFFFF;
    }

    .btn {
        display: inline-block;
        cursor: pointer;
        padding: 10px 15px;
        flex: 0 0 auto;
        padding: 10px 20px;
        font-size: 14px;
        font-weight: bold;
    }

    .btn:hover {
        opacity: .9;
    }

    .btn-color-blue {
        color: #FFFFFF;
        background-color: #00a4d1;
    }

    .btn-color-gray {
        color: #FFFFFF;
        background-color: #323232;
    }

    .btn-color-red {
        color: #FFFFFF;
        background-color: #BB4848;
    }

    #btn-chat {
        margin-left: -3px;
    }

    .s-icon {
        content: '';
        display: inline-block;
        width: 23px;
        height: 18px;
        vertical-align: -0.23em;
        background-repeat: no-repeat;
        background-position: 0 0;
        background-image: url('/www/img/index.png');
    }

    .icon-chat {
        background-position: -23px 0;
    }
</style>
<script>
    document.addEventListener('DOMContentLoaded', function ready() {
        document.getElementById('btn-add_stream').onclick = function () {
            var add_stream_tr = document.getElementById('add_stream-tr');
            var display = add_stream_tr.style.display;
            if (display == 'none') {
                add_stream_tr.style.display = 'table-row';
                grecaptcha.reset();
            }
            else {
                add_stream_tr.style.display = 'none';
                grecaptcha.reset();
            }
        }
        document.getElementById('btn-cansel').onclick = function () {
            var add_stream_tr = document.getElementById('add_stream-tr');
            add_stream_tr.style.display = 'none';
            grecaptcha.reset();
        }
        document.getElementById('btn-ok').onclick = function () {
            var stream_name = document.getElementById('stream-name');
            var stream_name_val = stream_name.value;
            if (stream_name_val != '') {
                var add_stream_tr = document.getElementById('add_stream-tr');
                add_stream_tr.style.display = 'none';

                var r = document.getElementsByName("r")[0].value;
                var recaptcha = document.getElementsByName("g-recaptcha-response")[0].value;

                //alert(r + '\r\n' + recaptcha)


                var add_stream_td_form = document.getElementById('add_stream-td_form');
                //add_stream_td_form.submit();

                var param = 'r=site/addstream' + '&streamname=' + stream_name_val + '&g-recaptcha-response=' + recaptcha;
                SendData(param, '/index.php?r=site/addstream');

                stream_name.value = '';
                grecaptcha.reset();
            }
        }
        document.getElementById('btn-list').onclick = function () {
            var btn_list = document.getElementById('btn-list');
            var btn_chat = document.getElementById('btn-chat');
            if (btn_list.className == 'btn btn-color-gray') {
                var tmp = btn_list.className;
                btn_list.className = btn_chat.className;
                btn_chat.className = tmp;
                var td_stream_chat = document.getElementById('td-stream-chat')
                td_stream_chat.style.display = 'none';
                var td_stream_list = document.getElementById('td-stream-list')
                td_stream_list.style.display = 'table-cell';
            }
        }
        document.getElementById('btn-chat').onclick = function () {
            var btn_list = document.getElementById('btn-list');
            var btn_chat = document.getElementById('btn-chat');
            if (btn_chat.className == 'btn btn-color-gray') {
                var tmp = btn_list.className;
                btn_list.className = btn_chat.className;
                btn_chat.className = tmp;
                var td_stream_chat = document.getElementById('td-stream-chat')
                td_stream_chat.style.display = 'table-cell';
                var td_stream_list = document.getElementById('td-stream-list')
                td_stream_list.style.display = 'none';
            }
        }
    });
    function list_click(str, elem) {
        var stream_video = document.getElementById('stream-main-td-iframe-video');
        var stream_chat = document.getElementById('stream-main-td-iframe-chat');

        stream_video.src = 'https://player.twitch.tv/?channel=' + str + '&autoplay = 1';
        stream_chat.src = 'https://www.twitch.tv/' + str + '/chat?popout=';

        var all_li = document.getElementsByClassName('td-stream-list-li');
        for (var k in all_li) {
            all_li[k].className = 'td-stream-list-li';
        }
        elem.className = 'td-stream-list-li td-stream-list-li-current';

        document.getElementById('stream-title').innerHTML = elem.getElementsByClassName('td-stream-list-li-title')[0].innerHTML;
        document.getElementById('stream-author').innerHTML = str;
        document.getElementById('stream-game').innerHTML = elem.getElementsByClassName('td-stream-list-li-game')[0].innerHTML;
    }

    function SendData(data, url) {
        sender = GetXmlHttpRequest();
        sender.onreadystatechange = GetRequest;
        sender.open("POST", url);
        sender.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        sender.send(data);
    }
    function GetRequest() {
        if (sender.readyState == 4) {
            if (sender.status == 200) {
                str = sender.responseText;
                if (str.length > 0) {
                    //Обрабатываем ответ
                    //alert(str);
                }
            }
        }
    }
    function GetXmlHttpRequest() {
        var XMLHttp;
        try {
            XMLHttp = new XMLHttpRequest();
        }
        catch (e) {
            try {
                XMLHttp = new ActiveXObject("Msxml2.XMLHTTP");
            }
            catch (e) {
                try {
                    XMLHttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                catch (e) {
                    return false;
                }
            }
        }
        return XMLHttp;
    }

    function GetData(url) {
        sender = GetXmlHttpRequest();
        sender.onreadystatechange = GetStreamList;
        sender.open("GET", url);
        sender.send(null);
    }
    function GetStreamList() {
        if (sender.readyState == 4) {
            if (sender.status == 200) {
                var str = sender.responseText;
                var data = JSON.parse(str);

                var current = document.getElementById('stream-author').innerHTML;
                var str = '';
                for (var i = 0; i < data.length; i++) {
                    var v = data[i]
                    var logo = v['logo'];
                    if (logo.length <= 0)
                        logo = 'https://static-cdn.jtvnw.net/jtv_user_pictures/xarth/404_user_70x70.png';

                    var title = v['streamTitle'];
                    if (title.length <= 0)
                        title = v['name'];

                    var currentGame = v['currentGame'];

                    var status_class = '';
                    var status = v['status'];
                    if (status == 'Offline')
                        status_class = ' li-status-ofline';

                    var name = v['name'];
                    var list_class = '';
                    if (current == name)
                        list_class = ' td-stream-list-li-current';

                    str += "<li class='td-stream-list-li" + list_class + "' onclick='list_click(\"" + name + "\", this)'>";
                    str += "<span class='td-stream-list-li-avatar'>";
                    str += "<img class='td-stream-list-li-avatar-img' src='" + logo + "'/>";
                    str += "</span>";
                    str += "<span class='td-stream-list-li-title'>";
                    str += title;
                    str += "</span>";
                    str += "<span class='td-stream-list-li-game'>";
                    str += currentGame;
                    str += "</span>";
                    str += "<span class='td-stream-list-li-status" + status_class + "'>" + status + "</span>";
                    str += "</li>";
                }
                document.getElementsByClassName('td-stream-list-ul')[0].innerHTML = str;
            }
        }
    }
    function StreamTimerRefresher() {
        GetData('/index.php?r=site/getstreams');
    }
    
    setInterval(StreamTimerRefresher, 60000);

</script>