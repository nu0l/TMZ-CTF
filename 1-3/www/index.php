<?php
header("Content-type: text/html;charset=utf-8");
error_reporting(0);
//设置上传目录
define("UPLOAD_PATH", dirname(__FILE__) . "/upload/");
define("UPLOAD_URL_PATH", str_replace($_SERVER['DOCUMENT_ROOT'], "", UPLOAD_PATH));
if (!file_exists(UPLOAD_PATH)) {
    mkdir(UPLOAD_PATH, 0755);
}
if (!empty($_POST['submit'])) {
    if (!$_FILES['file']['size']) {
        echo "<script>alert('请添加上传文件')</script>";
    } else {
        $name = basename($_FILES['file']['name']);
        if (move_uploaded_file($_FILES['file']['tmp_name'], UPLOAD_PATH . $name)) {
            echo "<script>alert('上传成功')</script>";
            echo "上传文件相对路径<br>" . UPLOAD_URL_PATH . $name;
        } else {
            echo "<script>alert('上传失败')</script>";
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>苏安杯WEB3</title>
</head>
<body>
    <h1>Web3-文件上传</h1>
    <form action="" method="post" enctype="multipart/form-data" onsubmit="return checkfilesuffix()">
        <label for="file">Filename:</label>
        <input type="file" name="file" id="file" />
        <br />
        <input type="submit" name="submit" value="Submit" />
    </form>
<script>
function checkfilesuffix()
{
    var file=document.getElementsByName('file')[0]['value'];
    if(file==""||file==null)
    {
        alert("请添加上传文件");
        return false;
    }
    else
    {
        var whitelist=new Array(".jpg",".png",".gif");
        var file_suffix=file.substring(file.lastIndexOf("."));
        if(whitelist.indexOf(file_suffix) == -1)
        {
            alert("该文件不允许上传");
            return false;
        }
    }
}
</script>
</body>
</html>
