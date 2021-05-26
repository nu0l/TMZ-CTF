<html>
<head>
    <title>苏安杯WEB5</title>
</head>
<body>

<h1>WEB-Ping测试2</h1>

<form action="#" method="GET">
    <label for="ip">IP : </label><br>
    <input type="text" id="ip" name="ip">
    <input type="submit" value="Ping">
</form>
</body>
</html>
<?php
show_source(__FILE__);
$res = FALSE;

if (isset($_GET['ip']) && $_GET['ip']) {
    $ip = $_GET['ip'];
    $m = [];
    if (!preg_match_all("/(\||&|;| |cat|more|less|tail|bash)/", $ip, $m)) {
        $cmd = "ping -c 4 {$ip}";
        exec($cmd, $res);
        print_r($res);
    } else {
        $res = $m;
        die('WAF');
    }
}
?>