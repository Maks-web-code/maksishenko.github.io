						<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
						  <div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingOne">
							  <h4 class="panel-title panelH4">
								<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
								  Онлайн калькулятор.
								</a>
							  </h4>
							</div>
							<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
							  <div class="panel-body">
								
								  <h3>ЗАДАНИЕ</h3><hr>
								  <p><i>Создать онлайн калькулятор поддерживающий четыре действия + - * /</i></p>
								  <img src="../image/hend_calc.jpg" title="«Сортировка обменами»" class="img-thumbnail" style="align:center">
								  <br>
								  <hr>
									<form method="POST" action="<?=$_SERVER['REQUEST_URI']?>" class="form-search"> 
									<input name="num1" type="numbers" placeholder="Введите первое число" class="input-medium"><br>
									<b> выбирите действие</b><br>
									<input type="radio" class="submit" name="calc" value="+" id="AsideBAR">+ 
									<input type="radio" class="submit" name="calc" value="-" id="AsideBAR">- 
									<input type="radio" class="submit" name="calc" value="*" id="AsideBAR">* 
									<input type="radio" class="submit" name="calc" value="/" id="AsideBAR">/ <br>
									<input name="num2" type="numbers" placeholder="Введите второе число" class="input-medium"><br>
									<input type="submit" class="submit-calc" name="Enter" value="Вычислить"><br>
									<input type="submit" class="submit-calc" name='ochistit' value='Очистить'>
									</form>
									
									<?php 
									
									if ($_SERVER['REQUEST_METHOD']=='POST'){
										//if (isset ($_POST['ochistit'])) {unset($result);unset($num1);unset($num2);}
										$num1 = strip_tags(trim($_POST['num1']));
										$num2 = strip_tags(trim($_POST['num2']));
										if ((int)$num1 == FALSE or (int)$num2 == FALSE) {echo '<b style="color:red">Калькулятор работает только с целыми числами!!!</b><br>'; 
										$num1 = (int)$num1;
										$num2 = (int)$num2;
										}
										$method = $_POST['calc'];
												
										switch ($method) {
												case '+':
													$result = $num1 + $num2;
													echo 'Результат вычисления '.$num1.' '.$method.' '.$num2.' = '.$result;
													break;
												case '-':
													$result = $num1 - $num2;
													echo 'Результат вычисления '.$num1.' '.$method.' '.$num2.' = '.$result;
													break;
												case '*':
													if ($num1 <= 0 or $num2 <= 0) {echo '<b style="color:red">Умножать на 0 или отрецательное число нельзя!!!</b>';break;}
													$result = $num1 * $num2;
													echo 'Результат вычисления '.$num1.' '.$method.' '.$num2.' = '.$result;
													break;
												case '/':
													if ($num1 <= 0 or $num2 <= 0) {echo '<b style="color:red">Делить на 0 или отрецательное число нельзя!!!</b>';break;}
													$result = $num1 / $num2;
													echo 'Результат вычисления '.$num1.' '.$method.' '.$num2.' = '.$result;
													break;
												default:
													return 'Операция не поддерживается';
											}
									}
									?>
								</div>
							</div>
						  </div>
						  <div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingTwo">
							  <h4 class="panel-title panelH4">
								<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
								  Написать функцию сортировки массива «Сортировка вставками».
								</a>
							  </h4>
							</div>
							<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
							  <div class="panel-body">
								  <h3>ЗАДАНИЕ</h3><hr>
								  <p><i>Написать функцию сортировки массива, используя алгоритм «Сортировка вставками».</i></p><hr>
								  <img src="../image/sortArray02.gif" title="«Сортировка вставками»" class="img-thumbnail"> <br>
								  <?php 
									$b = rand(1,20);
									$array2 = array();
																		
									for ($i=0;$i<=$b;$i++){
										$a = rand(51,500);
											if ($i<=$b){
											$array2[$i]=$a;	
											}
												else {
													break;
													}
									}
									echo "<pre> <br> Рандомно созданный массив <br>";
									print_r ($array2);
									echo '<hr>';
									
									function InSortArray ($arr2,$b){
										
									for($i = 1; $i < $b; $i++){
										$x = $arr2[$i];
										$y = $i - 1;
											while($y >= 0 and $arr2[$y] > $x){
												$arr2[$y+1] = $arr2[$y];
												$y--;
											}
										$arr2[++$y] = $x;
									}
									echo 'Массив отсортирован при помощи фнкции InSortArray <br>';
									print_r ($arr2);
									}
									InSortArray ($array2,$b);
									//echo '<pre>'.print_r ($arr2);
								?>
							  </div>
							</div>
						   </div>
						  <div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingThree">
							  <h4 class="panel-title panelH4">
								<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
								  Пересчитываем скорость из км/ч на скорость в м/c
								</a>
							  </h4>
							</div>
							<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
							  <div class="panel-body">
								<h3>ЗАДАНИЕ</h3><hr>
								  <p><i>Напишите скрипт который пересчитывает скорость из км/ч на скорость в м/c</i></p>
								  <img src="../image/km_h-m_s.png" title="Пересчет скорости из КМ\Ч в М\С происходит по формуле Скорость М\С = (Скорость КМ\Ч*1000)/3600с" class="img-thumbnail">
								  	Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. 
								  В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно
								  пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами
								  Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.
									Почему он используется?
									Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее 
									стандартное заполнение шаблона, а также реальное распределение букв и пробелов в абзацах, которое не получается при простой дубликации "Здесь ваш текст..
									Здесь ваш текст.. Здесь ваш текст.." Многие программы электронной вёрстки и редакторы HTML используют Lorem Ipsum в качестве текста по умолчанию, так что 
									поиск по ключевым словам "lorem ipsum" сразу показывает, как много веб-страниц всё ещё дожидаются своего настоящего рождения. За прошедшие годы текст Lorem 
									Ipsum получил много версий. Некоторые версии появились по ошибке, некоторые - намеренно (например, юмористические варианты).							 
							  </div>
							</div>
						  </div>
					</div>	