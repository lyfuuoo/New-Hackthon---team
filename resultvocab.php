
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>01 Studio</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css" />
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />
    <link href="css/loading.css" rel="stylesheet" type="text/css" />
    <script src="../jquery.min.js"></script>

<?php   
ini_set("user_agent","Mozilla/4.0 (compatible; MSIE 5.00; Windows 98)");
header("Content-type:text/html;charset=utf-8");
error_reporting(0);
mysql_query('SET NAMES UTF8');
 session_start();  
$wordname=$_SESSION["wordname"];
$haha=$_SESSION["haha"];
	 if (!isset ( $_COOKIE ["username"] )) {//判断code存不存在，如果不存在，说明异常登录
	 
	?>
	<script>
	 window.location.href="index.php";  
	</script>
	<?php
	}
	?>
	<html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
 <div class="container" style="text-align:center;">
        <div class="col-md-12">
            <h1 class="margin-bottom-15">上次结果</h1>
	<p>你输入的单词：
	<?php
	
	print($wordname);
	?>
	</p>
	<br>
	<p>它的中文意思是：
	<?php
	print($haha);
	
	
	?>
	<br><br>
	<p>感谢有道词典提供词库支持</p>
	</div>
	</div>
	

	

		<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>01 Studio</title>

    <style>



        #mask {
            position: absolute;
            top: 0px;
            filter: alpha(opacity=60);
            background-color: #777;
            z-index: 0;
            left: 0px;
            opacity: 0.2;
        }

        #loading {
            background-color: rgba(255,255,255,1);
            height: 100%;
            width: 100%;
            position: fixed;
            z-index: 1;
            margin-top: 0px;
            top: 0px;
        }

        #loading-center {
            width: 100%;
            height: 100%;
            position: relative;
        }

        #loading-center-absolute {
            position: absolute;
            left: 50%;
            top: 50%;
            height: 100px;
            width: 100px;
            margin-top: -50px;
            margin-left: -50px;
        }

        .object {
            width: 25px;
            height: 25px;
            background-color: rgba(255,255,255,0);
            margin-right: auto;
            margin-left: auto;
            border: 4px solid rgba(239,74,74,1);
            left: 37px;
            top: 37px;
            position: absolute;
        }

        #first_object {
            -webkit-animation: first_object 1s infinite;
            animation: first_object 1s infinite;
            -webkit-animation-delay: 0.5s;
            animation-delay: 0.5s;
        }

        #second_object {
            -webkit-animation: second_object 1s infinite;
            animation: second_object 1s infinite;
        }

        #third_object {
            -webkit-animation: third_object 1s infinite;
            animation: third_object 1s infinite;
            -webkit-animation-delay: 0.5s;
            animation-delay: 0.5s;
        }

        #forth_object {
            -webkit-animation: forth_object 1s infinite;
            animation: forth_object 1s infinite;
        }

        @-webkit-keyframes first_object {
            0% {
                -ms-transform: translate(1,1) scale(1,1);
                -webkit-transform: translate(1,1) scale(1,1);
                transform: translate(1,1) scale(1,1);
            }

            50% {
                -ms-transform: translate(150%,150%) scale(2,2);
                -webkit-transform: translate(150%,150%) scale(2,2);
                transform: translate(150%,150%) scale(2,2);
            }

            100% {
                -ms-transform: translate(1,1) scale(1,1);
                -webkit-transform: translate(1,1) scale(1,1);
                transform: translate(1,1) scale(1,1);
            }
        }

        @keyframes first_object {
            0% {
                -ms-transform: translate(1,1) scale(1,1);
                -webkit-transform: translate(1,1) scale(1,1);
                transform: translate(1,1) scale(1,1);
            }

            50% {
                -ms-transform: translate(150%,150%) scale(2,2);
                -webkit-transform: translate(150%,150%) scale(2,2);
                transform: translate(150%,150%) scale(2,2);
            }

            100% {
                -ms-transform: translate(1,1) scale(1,1);
                -webkit-transform: translate(1,1) scale(1,1);
                transform: translate(1,1) scale(1,1);
            }
        }

        @-webkit-keyframes second_object {
            0% {
                -ms-transform: translate(1,1) scale(1,1);
                -webkit-transform: translate(1,1) scale(1,1);
                transform: translate(1,1) scale(1,1);
            }

            50% {
                -ms-transform: translate(-150%,150%) scale(2,2);
                -webkit-transform: translate(-150%,150%) scale(2,2);
                transform: translate(-150%,150%) scale(2,2);
            }

            100% {
                -ms-transform: translate(1,1) scale(1,1);
                -webkit-transform: translate(1,1) scale(1,1);
                transform: translate(1,1) scale(1,1);
            }
        }

        @keyframes second_object {
            0% {
                -ms-transform: translate(1,1) scale(1,1);
                -webkit-transform: translate(1,1) scale(1,1);
                transform: translate(1,1) scale(1,1);
            }

            50% {
                -ms-transform: translate(-150%,150%) scale(2,2);
                -webkit-transform: translate(-150%,150%) scale(2,2);
                transform: translate(-150%,150%) scale(2,2);
            }

            100% {
                -ms-transform: translate(1,1) scale(1,1);
                -webkit-transform: translate(1,1) scale(1,1);
                transform: translate(1,1) scale(1,1);
            }
        }

        @-webkit-keyframes third_object {
            0% {
                -ms-transform: translate(1,1) scale(1,1);
                -webkit-transform: translate(1,1) scale(1,1);
                transform: translate(1,1) scale(1,1);
            }

            50% {
                -ms-transform: translate(-150%,-150%) scale(2,2);
                -webkit-transform: translate(-150%,-150%) scale(2,2);
                transform: translate(-150%,-150%) scale(2,2);
            }

            100% {
                -ms-transform: translate(1,1) scale(1,1);
                -webkit-transform: translate(1,1) scale(1,1);
                transform: translate(1,1) scale(1,1);
            }
        }

        @keyframes third_object {
            0% {
                -ms-transform: translate(1,1) scale(1,1);
                -webkit-transform: translate(1,1) scale(1,1);
                transform: translate(1,1) scale(1,1);
            }

            50% {
                -ms-transform: translate(-150%,-150%) scale(2,2);
                -webkit-transform: translate(-150%,-150%) scale(2,2);
                transform: translate(-150%,-150%) scale(2,2);
            }

            100% {
                -ms-transform: translate(1,1) scale(1,1);
                -webkit-transform: translate(1,1) scale(1,1);
                transform: translate(1,1) scale(1,1);
            }
        }

        @-webkit-keyframes forth_object {
            0% {
                -ms-transform: translate(1,1) scale(1,1);
                -webkit-transform: translate(1,1) scale(1,1);
                transform: translate(1,1) scale(1,1);
            }

            50% {
                -ms-transform: translate(150%,-150%) scale(2,2);
                -webkit-transform: translate(150%,-150%) scale(2,2);
                transform: translate(150%,-150%) scale(2,2);
            }

            100% {
                -ms-transform: translate(1,1) scale(1,1);
                -webkit-transform: translate(1,1) scale(1,1);
                transform: translate(1,1) scale(1,1);
            }
        }

        @keyframes forth_object {
            0% {
                -ms-transform: translate(1,1) scale(1,1);
                -webkit-transform: translate(1,1) scale(1,1);
                transform: translate(1,1) scale(1,1);
            }

            50% {
                -ms-transform: translate(150%,-150%) scale(2,2);
                -webkit-transform: translate(150%,-150%) scale(2,2);
                transform: translate(150%,-150%) scale(2,2);
            }

            100% {
                -ms-transform: translate(1,1) scale(1,1);
                -webkit-transform: translate(1,1) scale(1,1);
                transform: translate(1,1) scale(1,1);
            }
        }
    </style>
</head>
<body onload="load()" class="templatemo-bg-gray">
    <div id="loading">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div class="object" id="first_object"></div>
                <div class="object" id="second_object"></div>
                <div class="object" id="third_object"></div>
                <div class="object" id="forth_object"></div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        function load() {
            var loading = document.getElementById('loading');
            //设置透明度改变的过渡时间为0.3秒
            var a = setTimeout("loading.style.transition='opacity 0.3s'", 0)
            //0.5秒后加载动画开始变为透明
            var b = setTimeout("loading.style.opacity=0", 500)
            //当透明度为0的时候，隐藏掉它
            var c = setTimeout("loading.style.display='none'", 800)
        }


        function showMask() {
            $("#mask").css({ "height": "100%", "width": "100%" });
            $("#mask").show();
            $("#alert").show();

        }

        function hideMask() {
            $("#mask").hide();
            $("#alert").hide();
        }

    </script>




    <div class="container">
        <div class="col-md-12">
            <h1 class="margin-bottom-15">请查词</h1>
            <form class="form-horizontal templatemo-forgot-password-form templatemo-container" role="form" action="word.php" method="post">
                <div class="form-group">
                    <div class="col-md-12">
                        请输入英文单词
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <input type="text" class="form-control" id="wordname" name="wordname" placeholder="暂时只支持英文" />
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <label>公告:还在内测阶段，可能出现BUG！在国外使用会有1-2秒的查询延迟 </label>

                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <input type="submit" onclick="showMask();" value="提交" class="btn btn-danger" />
                        <br /><br />
                
						√已登录<br><a href="exit.php" onclick="showMask();">退出登录</a><br /><br />
                        <a href="list" onclick="showMask();">获取我的词表</a>
                        <div id="alert" style="display:none; text-align:center; "><span class="ld ld-ring ld-spin" style="font-size:300%;"></span></div>
                    </div>
                </div>


            </form>

        </div>

    </div>
    <div id="mask"></div>
</body>
</html>
	</html>

