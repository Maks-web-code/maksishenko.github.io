
						<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
						  <div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingOne">
							  <h4 class="panel-title panelH4">
								<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
								  Написать функцию сортировки массива «Сортировка обменами».
								</a>
							  </h4>
							</div>
							<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
							  <div class="panel-body">
								
								  <h3>ЗАДАНИЕ</h3><hr>
								  <p><i>Написать функцию сортировка массива, используя алгоритм «Сортировка обменами».</i></p>
								  <img src="../image/sortArray01.gif" title="«Сортировка обменами»" class="img-thumbnail">
								  <br>
									<?php 
									
									$b = rand(1,20);
									$array1 = array();
																		
									for ($i=0;$i<=$b;$i++){
										$a = rand(51,500);
											if ($i<=$b){
											$array1[$i]=$a;	
											}
												else {
													break;
													}
									}
									echo "<pre> <br> Рандомно созданный массив <br>";
									print_r ($array1);
									echo "<hr>";
									function SortArray ($arr){
										$b = count ($arr); 
									for ($s=0;$s<=$b*$b;$s++){
									
										for ($i=0;$i<=$b-2;$i++){
											
											if ($arr[$i]>$arr[$i+1]){
												$sor=$arr[$i];
												$arr[$i]=$arr[$i+1];
												$arr[$i+1]=$sor;
											}
										}
									}
									print_r ($arr);
									}
									echo 'Отсортированный массив при помощи собственной функции SortArray <br>';
									SortArray ($array1);
																			
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
				