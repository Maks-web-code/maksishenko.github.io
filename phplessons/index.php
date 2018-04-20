<?php
include 'inc/cookies.inc.php';

?>

<html>
	<head>
	
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
		
			
	<meta charset="utf-8">
	<title>Уроки РНР</title>
	</head>

	
	<body>
		
<div class="col-xs-12" style="padding: 0px">
	<div class="row col-xs-12" id="head">
			<div class="container">
													
					<h1> -= ИЗУЧАЕМ РНР =-</h1>
					
						
			</div>
	</div>
			<div class="row">
				
					<!-- САЙД БАР НАЧАЛО-->
					<div class="col-xs-3" id="sidebar"> 
						<div class="row" id="User">
					<h4><?php 
					echo $_COOKIE['cuption'];
					if (isset($_COOKIE['name'])) {echo 'Мы рады познакомиться с Вами <br><b>'.$userSname.' '.$userName.' '.$userOname.'.</b> <br><br> Теперь мы вас запомним на долго ))))';}
											else {echo 'Здраствуйте давайте познакомимся, <br> перейдите на вкладку "Кукки и Сессии" <br>для Авторизации';}?>
					</h4>
					</div>
					<div class="row">
						<a href="http://php.net/manual/ru/intro-whatis.php" class="btn btn-primary btn-lg active btn-block" role="button" id="AsideBAR">"СПРАВОЧНИК РНР"</a> <br>
						<a href="http://css3generator.com/" class="btn btn-primary btn-lg active btn-block" role="button" id="AsideBAR">"CSS ГЕНЕРАТОР"</a> <br>
						<a href="https://getbootstrap.com" class="btn btn-primary btn-lg active btn-block" role="button" id="AsideBAR">"BOOTSTRAP"</a> 
						<hr><hr>
						
						<?php
						include 'inc/menu.inc.php';
						  foreach ($SideBarMenu as $menu)
							echo '<a href="'.$menu['href'].'" class="btn btn-primary btn-lg active btn-block" role="button" id="AsideBAR">'.$menu['title'].'</a> <br>';
						?>
						
					</div>
					</div>
					<!-- САЙД БАР КОНЕЦ-->
				
				<!-- КОНТЕНТ НАЧАЛО-->
								
				<div class="col-xs-9" id="content"> 
					<div id=center>
					<?php
					$alias = trim(strip_tags($_GET['alias']));
						switch($alias){
						
								case 'lesson2.php':
									include 'lesson2.php';
									break;
								case 'lesson3.php':
									include 'lesson3.php';
									break;
								case 'lesson5.php':
									include 'lesson5.php';
									break;
								case 'lesson6.php':
									include 'lesson6.php';
									break;
								case 'lesson7.php':
									include 'lesson7.php';
									break;
								case 'lesson8.php':
									include 'lesson8.php';
									break;
								default:
									include 'about.php';
									break;
						}
					?>	
					</div>	
				</div>
				<!-- КОНТЕНТ КОНЕЦ-->
			</div>
	
	</div>

	</body>
</html>

