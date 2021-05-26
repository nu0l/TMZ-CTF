<!DOCTYPE html>
<html>

<style>
                .slickButton3 {
                        margin-right:20px;
                        margin-left:20px;
                        margin-top:20px;
                        margin-bottom:20px;
                color: white;
                font-weight: bold;
                padding: 10px;
                border: solid 1px black;
                background: #111111;
                cursor: pointer;
                transition: box-shadow 0.5s;
                -webkit-transition: box-shadow 0.5s;
                }

                .slickButton3:hover {
                box-shadow:4px 4px 8px #00FFFF;
                }
                img {
                        position:absolute;
                        left:20px;
                        top:0px;
                }
                p,h1 {
                        cursor: default;
                }
                .input{
                        border: 1px solid #ccc;
                        padding: 7px 0px;
                        border-radius: 3px;
                        padding-left:5px;
                        -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
                        box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
                        -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
                        -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
                        transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s
                }
                .input:hover{
                        border-color: #808000;
                        box-shadow: 0px 0px 8px #7CFC00;
                }  
        </style>

<head>
        <meta charset="UTF-8">
        <title>苏安杯WEB2</title>
</head>
<body background="./image/background.jpg" style="background-repeat:no-repeat ;background-size:100% 100%; background-attachment: fixed;" >
        
        
        <form action="check.php" method="GET">
                <div>
                        </br></br></br>
                        <p style="font-family:arial;color:white;font-size:20px;text-align:center;font-family:KaiTi;">login</p>
                        </br></br></br></br></br></br></br>        
                        <p style="font-family:arial;color:white;font-size:20px;text-align:center;">用户名：</p>
                        <div align="center"><input type="text" name="username" style="text-align:center;" class="input" /></div>

                        <p style="font-family:arial;color:white;font-size:20px;text-align:center;">密  码：</p>
                        <div align="center"><input type="text" name="password" style="text-align:center;" class="input" /></div>

                        <div align="center">
                                <input type="submit" value="登录" class="slickButton3">
                        </div>
                </div>
        </form>
        <div style="position: absolute;bottom: 0;width: 99%;"><p align="center" style="font:italic 15px Georgia,serif;color:white;"> nu0l</p></div>
</body>
</html>



