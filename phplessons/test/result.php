<?php
$resultAnsvers = 0;
$answers = parse_ini_file("answers.ini");
	if (isset($_SESSION['test'])){
		foreach ($_SESSION['test'] as $result){
			if (array_key_exists($result,$answers)){
				$resultAnsvers += $answers[$result];
				echo '<style> .not {color:red;} .yas {color:green;}</style>';
				switch ($result){
					case 'a1':  echo '<b class="not">ответ на первый вопрос не верный</b><br>';
							break;
					case 'a2':  echo '<b class="yas">ответ на первый вопрос верный</b><br>';
							break;
					case 'a3':  echo '<b class="not">ответ на первый вопрос не верный</b><br>';
							break;
					case 'b1':  echo '<b class="not">ответ на второй вопрос не верный</b><br>';
							break;
					case 'b2':  echo '<b class="not">ответ на второй вопрос не верный</b><br>';
							break;
					case 'b3':  echo '<b class="yas">ответ на второй вопрос верный</b><br>';
							break;
					case 'c1':  echo '<b class="yas">ответ на третий вопрос верный</b><br>';
							break;
					case 'c2':  echo '<b class="not">ответ на третий вопрос не верный</b><br>';
							break;
					case 'c3':  echo '<b class="not">ответ на третий вопрос не верный</b><br>';
							break;
							default: echo 'что то пошло не так';
							break;
				}
			}
		}
	}
session_destroy();
	
echo 'Ваш результат '.$resultAnsvers.' из 30 <br>';

?>