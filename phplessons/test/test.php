<?php 
  session_start();
 	
	header('Cotnent-type: text/html; charset=utf=8');
		if (!isset($_SESSION['text']) and !$_POST['q']){
		$q=0;
		$title='Пройдите тест';
		}
		else {
			if ($_POST['q'] != 1)
			  $_SESSION['test'][] = $_POST['answer'];
			}
			$q = $_POST['q'] ? $_POST['q'] : count($_SESSION['test']);
			$title=$_POST['title'];
			
								  
?>

<!DOCTYPE HTML>
<html>
	<head>
	
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/style.css">
	
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
		
			
	<meta charset="utf-8">
	<title>ТЕСТ</title>
	</head>

	
	<body>
		
<div class="col-xs-12" style="padding: 0px">
	<div class="row col-xs-12" id="head" style="height: 160px;">
			<div class="container">
													
					<h1> -= ТЕСТ =-</h1>
											
			</div>
	</div>
			<div class="row">
				
					<!-- САЙД БАР НАЧАЛО-->
					<div class="col-xs-4" id="sidebar"> 
						<a href="../index.php" class="btn btn-primary btn-lg active btn-block" role="button" id="AsideBAR">ПРЕРВАТЬ ЗАДАНИЕ И ВЕРНУТЬСЯ <br> НА ГЛАВНУЮ СТРАНИЦУ</a> <hr>
					</div>
					<!-- САЙД БАР КОНЕЦ-->
					
					<div class="col-xs-8" id="sidebar">
					<div class="jumbotron">
					
					<p>  
				<?php
				switch($q){
				case 0:
					include 'start.php';
					break;
				case 1:
					include 'q1.php';
					break;
				case 2:
					include 'q2.php';
					break;
				case 3:
					include 'q3.php';
					break;
				default:
					include 'result.php';
					break;
				}
				?>
					</p>
					
					</div>
					</div>
			</div>
					
	</body>
					
					
					
</html>