<html>
 <head>
		<title>BlueBeak.std</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/x-icon" href="images/fave-icon.png" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		</script>
   		<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="css/simptip-mini.css" media="screen,projection" />
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	</head>
 <body>
		<!---start-wrap----->
			<!---start-header----->
			<div class="header" id="home">
				<div class="wrap">
				    <div class="logo">
						 <a href="index.html">&nbsp;</a>
					</div>
<?php 
// ----------------------------конфигурация-------------------------- // 
 
$adminemail="levbut@gmail.com";  // e-mail админа 
$date=date("d.m.y"); // число.месяц.год 
$time=date("H:i"); // часы:минуты:секунды 
$backurl="http://bluebeakstd.com/index.html";  // На какую страничку переходит после отправки письма 
 
//---------------------------------------------------------------------- // 

// Принимаем данные с формы 
$name=$_POST['name']; 
$email=$_POST['email']; 
$msg=$_POST['message'];
$varGender = $_POST['Choose'];
if(isset($_POST['formSubmit']) )
{
  $varMovie = $_POST['formMovie'];
  $varName = $_POST['formName'];
  $varGender = $_POST['formChoose'];
  $errorMessage = "";
  // - - - и т.д. - - -
}
 
// Проверяем валидность e-mail 
 
if (!preg_match("|^([a-z0-9_\.\-]{1,20})@([a-z0-9\.\-]{1,20})\.([a-z]{2,4})|is", 
strtolower($email))) 
 { 
  echo
"<center class='logo' style = 'font-size:30px'; font-family: 'trump_town_proregular';'><a 
href='javascript:history.back(1)'>Go <B>back</B></a>
<center class='logo' style = 'font-size:30px'; font-family: 'trump_town_proregular';'><a 
href='javascript:history.back(1)'>you have errors in the form</a>"; 
  } 
 else 
 { 
$msg="Имя: $name E-mail: $email
Сообщение: $msg, $_POST, $varMovie, $varName, $varGender"; 
 
 // Отправляем письмо админу  
mail("$adminemail", "$date $time Message from the site bluebeakstd.com
from $name", "$msg"); 
 
// Выводим сообщение пользователю 
print "<script language='Javascript'><!-- 
function reload() {location = \"$backurl\"}; setTimeout('reload()', 2000); 
//--></script> 
$msg 
<center class='logo' style = 'font-size:30px'; font-family: 'trump_town_proregular';'><a 
href='javascript:history.back(1)'>Message sent, now you will be redirected to the main page</a>";  
exit; 
 
 } 
     ?>
			<!---End-header----->
			</div>
		</div>
		<!---End-header----->
		<!----start-footer---->
		<div class="footer">
			<div class="wrap">
				<div class="footer-grids">
					<div class="footer-left">
						<ul>
							<li><a class="ftwiter" href="#"> </a></li>
							<li><a class="fface" href="#"> </a></li>
							<li><a class="fhtml" href="#"> </a></li>
							<li><a class="fflick" href="#"> </a></li>
							<div class="clear"> </div>
						</ul>
					</div>
					<div class="footer-right">
						<p>Designed by <a href="http://w3layouts.com/">W3layouts</a></p>
									<script type="text/javascript">
						$(document).ready(function() {
							$().UItoTop({ easingType: 'easeOutQuart' });
						});
					</script>
					<!----move-top-path---->
					<script type="text/javascript" src="js/move-top.js"></script>
					<script type="text/javascript" src="js/easing.js"></script>
					<script type="text/javascript">
						jQuery(document).ready(function($) {
							$(".scroll").click(function(event){		
								event.preventDefault();
								$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
							});
						});
					</script>
					<!----move-top-path---->
			    <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>

					</div>
					<div class="clear"> </div>
				</div>
			</div>
		</div>
		<!----//End-footer---->
		<!---End-wrap----->
</body>
 