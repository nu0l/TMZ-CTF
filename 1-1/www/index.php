<html>
<head>
    <title>苏安杯WEB1</title>
</head>
<body>

<h1>WEB1-Ping测试</h1>

<form action="#" method="GET">
    <label for="ip">IP : </label><br>
    <input type="text" id="ip" name="ip">
    <input type="submit" value="Ping">
</form>

</body>
</html>
<?php
show_source(__FILE__);
if (isset($_GET['ip'])){
    $ping = "ping -c 3 {$_GET['ip']}";
    exec($ping,$output);
    var_dump($output);
}
?>