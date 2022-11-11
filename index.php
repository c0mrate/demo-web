<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
    <title>Firesaiyagin</title>
    <link rel="stylesheet" href="style.css">

    <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-32573884-1']);
        _gaq.push(['_gat._forceSSL']);
        _gaq.push(['_setSiteSpeedSampleRate', 100]);
        _gaq.push(['_trackPageview']);
        (function () {
            var ga = document.createElement('script');
            ga.type = 'text/javascript';
            ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ga, s);
        })();
    </script>
    <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js'></script>
    <script type="text/javascript">
        if (document.location.protocol == 'http:') {
            var Tynt = Tynt || []; Tynt.push('cIw852sN4r44npacwqm_6r');
            (function () { var s = document.createElement('script'); s.async = "async"; s.type = "text/javascript"; s.src = 'http://tcr.tynt.com/ti.js'; var h = document.getElementsByTagName('script')[0]; h.parentNode.insertBefore(s, h); })();
        }
    </script>
        <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-5BDV4G" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || []; w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            }); var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
                    '//www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5BDV4G');</script>
    
        <?php
        function get_client_ip_env() {
            $ipaddress = '';
            if (getenv('HTTP_CLIENT_IP'))
                $ipaddress = getenv('HTTP_CLIENT_IP');
            else if(getenv('HTTP_X_FORWARDED_FOR'))
                $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
            else if(getenv('HTTP_X_FORWARDED'))
                $ipaddress = getenv('HTTP_X_FORWARDED');
            else if(getenv('HTTP_FORWARDED_FOR'))
                $ipaddress = getenv('HTTP_FORWARDED_FOR');
            else if(getenv('HTTP_FORWARDED'))
                $ipaddress = getenv('HTTP_FORWARDED');
            else if(getenv('REMOTE_ADDR'))
                $ipaddress = getenv('REMOTE_ADDR');
            else
                $ipaddress = 'UNKNOWN';
            return $ipaddress;
        }
        function get_client_ip_server() {
	        $result = null;
            $ipSourceList = array(
                'HTTP_CLIENT_IP','HTTP_X_FORWARDED_FOR',
                'HTTP_X_FORWARDED', 'HTTP_FORWARDED_FOR',
                'HTTP_FORWARDED', 'REMOTE_ADDR'
            );
                foreach($ipSourceList as $ipSource){
                if ( isset($_SERVER[$ipSource]) ){
                $result = $_SERVER[$ipSource];
                break;
                }
                }
                return $result;
                }
            $ipaddress = $_SERVER['REMOTE_ADDR'];

            // echo 'Your IP address is ' . $ipaddress . '<br />';
            // echo 'Your IP address (using get_client_ip_env function) is ' . get_client_ip_env() . '<br />';
            // echo 'Your IP address (using get_client_ip_server function) is ' . get_client_ip_server() . '<br />';
        ?>
</head>

<body>
    <form id="my_form">
        <label>
            <i data-feather="hash"></i>
            <input name="contents" id="contents" autocomplete="off" type="text" placeholder="type here & enter/send"
                spellcheck="false">

        </label>
        <center>
			<p><?php echo 'Your IP address is ' . $ipaddress . '<br />'; ?></a></p>
            <p>Only the website owner can</p>
            <p>read your massage.</p>
            <p>l</p>
            <p>v</p>
            <button id="post_Button" type="submit" onclick="sendMessage();">Send</button>
			
            
        </center>
    </form>
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="main.js"></script>
</body>

</html>