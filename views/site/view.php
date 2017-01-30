<script>
    function SendData(url) {
        sender = GetXmlHttpRequest();
        sender.onreadystatechange = GetRequest;
        sender.open("GET", url);
        sender.send(null);
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
    function GetRequest() {
        if (sender.readyState == 4) {
            if (sender.status == 200) {
            }
        }
    }
    function url(cur) {
        var url = '?r=site/download&url=' + cur.href;
        SendData(url);
        return false;
    }
</script>