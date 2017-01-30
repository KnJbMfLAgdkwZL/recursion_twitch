<table style='width:100%' border='1' id='stream-twitch-container'>
    <tr id='add_stream-tr' style='display: none;'>
        <td colspan='3' id='add_stream-td'>
            <input type='text' name='streamname' id='stream-name' required/>
            <div class='btn btn-color-blue' id='btn-ok'>Ok</div>
            <div class='btn btn-color-red' id='btn-cansel'>Cansel</div>
            <div id='goole-captcha-div'>Гугл капча</div>
        </td>
    </tr>
    <tr>
        <td>
            <h2 id='stream-title'>
                РАНКЕД.
            </h2>
            <h3 id='stream-h3'>
                <strong id='stream-author'>LeaveNeed</strong>
                стримит
                <strong id='stream-game'>Gwent: The Witcher Card Game</strong>
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
                src='https://player.twitch.tv/?channel=dxdydzdt'
                frameborder='0'
                allowfullscreen='true'
                scrolling='no'
                height='100%'
                width='100%'>
            </iframe>
        </td>
        <td colspan='2' id='td-stream-list'>

            <h3 id='td-stream-list-title'>Текушие</h3>

            <ul id='td-stream-list-ul'>
                <?php
                foreach ($data as $v) {
                    echo "<li id='td-stream-list-li'>", $v['name'], "</li>";
                }
                ?>
            </ul>
        </td>
        <td colspan='2' style='display: none' id='td-stream-chat'>
            <iframe
                id='stream-main-td-iframe-chat'
                src='https://www.twitch.tv/dxdydzdt/chat?popout='
                frameborder='0'
                scrolling='no'
                height='100%'
                width='100%'
            ></iframe>
        </td>
    </tr>
</table>
<style>
    /* cyrillic-ext */
    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 100;
        src: local('Roboto Thin'), local('Roboto-Thin'), url(http://fonts.gstatic.com/s/roboto/v15/ty9dfvLAziwdqQ2dHoyjphTbgVql8nDJpwnrE27mub0.woff2) format('woff2');
        unicode-range: U+0460-052F, U+20B4, U+2DE0-2DFF, U+A640-A69F;
    }

    /* cyrillic */
    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 100;
        src: local('Roboto Thin'), local('Roboto-Thin'), url(http://fonts.gstatic.com/s/roboto/v15/frNV30OaYdlFRtH2VnZZdhTbgVql8nDJpwnrE27mub0.woff2) format('woff2');
        unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

    /* cyrillic-ext */
    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 300;
        src: local('Roboto Light'), local('Roboto-Light'), url(http://fonts.gstatic.com/s/roboto/v15/0eC6fl06luXEYWpBSJvXCBJtnKITppOI_IvcXXDNrsc.woff2) format('woff2');
        unicode-range: U+0460-052F, U+20B4, U+2DE0-2DFF, U+A640-A69F;
    }

    /* cyrillic */
    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 300;
        src: local('Roboto Light'), local('Roboto-Light'), url(http://fonts.gstatic.com/s/roboto/v15/Fl4y0QdOxyyTHEGMXX8kcRJtnKITppOI_IvcXXDNrsc.woff2) format('woff2');
        unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

    /* cyrillic-ext */
    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 400;
        src: local('Roboto'), local('Roboto-Regular'), url(http://fonts.gstatic.com/s/roboto/v15/ek4gzZ-GeXAPcSbHtCeQI_esZW2xOQ-xsNqO47m55DA.woff2) format('woff2');
        unicode-range: U+0460-052F, U+20B4, U+2DE0-2DFF, U+A640-A69F;
    }

    /* cyrillic */
    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 400;
        src: local('Roboto'), local('Roboto-Regular'), url(http://fonts.gstatic.com/s/roboto/v15/mErvLBYg_cXG3rLvUsKT_fesZW2xOQ-xsNqO47m55DA.woff2) format('woff2');
        unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

    /* cyrillic-ext */
    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 500;
        src: local('Roboto Medium'), local('Roboto-Medium'), url(http://fonts.gstatic.com/s/roboto/v15/ZLqKeelYbATG60EpZBSDyxJtnKITppOI_IvcXXDNrsc.woff2) format('woff2');
        unicode-range: U+0460-052F, U+20B4, U+2DE0-2DFF, U+A640-A69F;
    }

    /* cyrillic */
    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 500;
        src: local('Roboto Medium'), local('Roboto-Medium'), url(http://fonts.gstatic.com/s/roboto/v15/oHi30kwQWvpCWqAhzHcCSBJtnKITppOI_IvcXXDNrsc.woff2) format('woff2');
        unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

    /* cyrillic-ext */
    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 700;
        src: local('Roboto Bold'), local('Roboto-Bold'), url(http://fonts.gstatic.com/s/roboto/v15/77FXFjRbGzN4aCrSFhlh3hJtnKITppOI_IvcXXDNrsc.woff2) format('woff2');
        unicode-range: U+0460-052F, U+20B4, U+2DE0-2DFF, U+A640-A69F;
    }

    /* cyrillic */
    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 700;
        src: local('Roboto Bold'), local('Roboto-Bold'), url(http://fonts.gstatic.com/s/roboto/v15/isZ-wbCXNKAbnjo6_TwHThJtnKITppOI_IvcXXDNrsc.woff2) format('woff2');
        unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

    /* cyrillic-ext */
    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 900;
        src: local('Roboto Black'), local('Roboto-Black'), url(http://fonts.gstatic.com/s/roboto/v15/s7gftie1JANC-QmDJvMWZhJtnKITppOI_IvcXXDNrsc.woff2) format('woff2');
        unicode-range: U+0460-052F, U+20B4, U+2DE0-2DFF, U+A640-A69F;
    }

    /* cyrillic */
    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 900;
        src: local('Roboto Black'), local('Roboto-Black'), url(http://fonts.gstatic.com/s/roboto/v15/3Y_xCyt7TNunMGg0Et2pnhJtnKITppOI_IvcXXDNrsc.woff2) format('woff2');
        unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

    /* latin-ext */
    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 100;
        src: local('Roboto Thin'), local('Roboto-Thin'), url(http://fonts.gstatic.com/s/roboto/v15/e7MeVAyvogMqFwwl61PKhBTbgVql8nDJpwnrE27mub0.woff2) format('woff2');
        unicode-range: U+0100-024F, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 100;
        src: local('Roboto Thin'), local('Roboto-Thin'), url(http://fonts.gstatic.com/s/roboto/v15/2tsd397wLxj96qwHyNIkxPesZW2xOQ-xsNqO47m55DA.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215;
    }

    /* latin-ext */
    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 300;
        src: local('Roboto Light'), local('Roboto-Light'), url(http://fonts.gstatic.com/s/roboto/v15/Pru33qjShpZSmG3z6VYwnRJtnKITppOI_IvcXXDNrsc.woff2) format('woff2');
        unicode-range: U+0100-024F, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 300;
        src: local('Roboto Light'), local('Roboto-Light'), url(http://fonts.gstatic.com/s/roboto/v15/Hgo13k-tfSpn0qi1SFdUfVtXRa8TVwTICgirnJhmVJw.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215;
    }

    /* latin-ext */
    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 400;
        src: local('Roboto'), local('Roboto-Regular'), url(http://fonts.gstatic.com/s/roboto/v15/Fcx7Wwv8OzT71A3E1XOAjvesZW2xOQ-xsNqO47m55DA.woff2) format('woff2');
        unicode-range: U+0100-024F, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 400;
        src: local('Roboto'), local('Roboto-Regular'), url(http://fonts.gstatic.com/s/roboto/v15/CWB0XYA8bzo0kSThX0UTuA.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215;
    }

    /* latin-ext */
    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 500;
        src: local('Roboto Medium'), local('Roboto-Medium'), url(http://fonts.gstatic.com/s/roboto/v15/oOeFwZNlrTefzLYmlVV1UBJtnKITppOI_IvcXXDNrsc.woff2) format('woff2');
        unicode-range: U+0100-024F, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 500;
        src: local('Roboto Medium'), local('Roboto-Medium'), url(http://fonts.gstatic.com/s/roboto/v15/RxZJdnzeo3R5zSexge8UUVtXRa8TVwTICgirnJhmVJw.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215;
    }

    /* latin-ext */
    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 700;
        src: local('Roboto Bold'), local('Roboto-Bold'), url(http://fonts.gstatic.com/s/roboto/v15/97uahxiqZRoncBaCEI3aWxJtnKITppOI_IvcXXDNrsc.woff2) format('woff2');
        unicode-range: U+0100-024F, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 700;
        src: local('Roboto Bold'), local('Roboto-Bold'), url(http://fonts.gstatic.com/s/roboto/v15/d-6IYplOFocCacKzxwXSOFtXRa8TVwTICgirnJhmVJw.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215;
    }

    /* latin-ext */
    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 900;
        src: local('Roboto Black'), local('Roboto-Black'), url(http://fonts.gstatic.com/s/roboto/v15/9_7S_tWeGDh5Pq3u05RVkhJtnKITppOI_IvcXXDNrsc.woff2) format('woff2');
        unicode-range: U+0100-024F, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 900;
        src: local('Roboto Black'), local('Roboto-Black'), url(http://fonts.gstatic.com/s/roboto/v15/mnpfi9pxYH-Go5UiibESIltXRa8TVwTICgirnJhmVJw.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215;
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
    #td-stream-list-ul
    {
        list-style-type: none;
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
        font-weight: 300;
        line-height: 1;
        text-transform: uppercase;
        color: #767676;
    }

    #stream-h3 > strong {
        font-weight: 300;
        color: #fff;
    }

    #stream-main-td {
        height: 600px;
        width: 66.123456%;
    }

    .btn {
        display: inline-block;
        cursor: pointer;
        padding: 10px 15px;
        flex: 0 0 auto;
        padding: 10px 20px;
        font-size: 14px;
    }

    .btn:hover {
        opacity: .9;
    }

    .btn-color-blue {
        color: #F1FAFB;
        background-color: #00a4d1;
    }

    .btn-color-gray {
        color: #F1FAFB;
        background-color: #323232;
    }

    .btn-color-red {
        color: #F1FAFB;
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
            }
            else {
                add_stream_tr.style.display = 'none';
            }
        }
        document.getElementById('btn-cansel').onclick = function () {
            var add_stream_tr = document.getElementById('add_stream-tr');
            add_stream_tr.style.display = 'none';
        }
        document.getElementById('btn-ok').onclick = function () {
            var stream_name = document.getElementById('stream-name');
            var str = stream_name.value;
            if (str != '') {
                var add_stream_tr = document.getElementById('add_stream-tr');
                add_stream_tr.style.display = 'none';
                stream_name.value = '';
                alert(str);
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
</script>