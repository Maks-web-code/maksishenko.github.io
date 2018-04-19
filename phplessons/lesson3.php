						<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
						  <div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingOne">
							  <h4 class="panel-title panelH4">
								<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
								  Вычисление количество бактерий 
								</a>
							  </h4>
							</div>
							<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
							  <div class="panel-body">
								
								  <h3>ЗАДАНИЕ</h3><hr>
								  <p><i>Каждая бактерия делится на две в течение одной минуты. Начальное значение бактерий X. Сколько их станет через Y минут. 
								  Начальные значение сгенерировать с помощью функции rand(1,50).</i></p>
								  <img src="../image/bacterium.png" title="Количество бактерий вычисляется вычислятеся при помощи цыкла while" class="img-thumbnail"><br>
							  	  <?php
								  $t=rand(1,20);//минут
									$bact=rand(1,50);//кол-во бактерий
									  echo "<b>Рандомное начальное количество бактерий = $bact шт. <br>Рандомное общее время = $t мин.</b> <hr>";
										$x=1;
											while($x<=$t){
												$bact=$bact*2;
												if ($x==$t){
												echo "<b>Количество бактерий на $x-й минуте = $bact шт.; <br></b>";}
												$x++;
										    }
								  ?>
								  
							  </div>
							</div>
						  </div>
						  <div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingTwo">
							  <h4 class="panel-title panelH4">
								<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
								  Стоимость доставки самолетом 1 кг. груза
								</a>
							  </h4>
							</div>
							<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
							  <div class="panel-body">
								  
								  <h3>ЗАДАНИЕ</h3><hr>
								  <p><i>Стоимость доставки самолетом 1 кг. груза составляет 30 USD. Для каждого из N пассажиров введите вес багажа, который он перевозит, подсчитайте, сколько каждый пассажир должен заплатить за перевозку своего багажа. Вычислите также общий вес груза, перевозимого пассажирами.</i></p>
								  <img src="../image/baggage.jpg" title="я тут что то позже напишу" class="img-thumbnail"><hr>
								  								  
								  	<?php
								  $bagg=array("1st" => array("id"  		=> 1,
									  						 "name"  	=> "Моника",
												    		 "sname" 	=> "Беллуччи",
															 "baggage" 	=> $kg=rand(1,70)
								  							),
											  
											  "2st" => array("id"  		=> 2,
												  			 "name"  	=> "Скарлетт",
												    		 "sname" 	=> "Йоханссон",
															 "baggage" 	=> $kg=rand(1,70)
											  				),
											  
											  "3st" => array("id"  		=> 3,
												  			 "name"  	=> "Дженнифер",
												    		 "sname" 	=> "Энистон",
															 "baggage" 	=> $kg=rand(1,70)
											  				),
											  
											  "4st" => array("id"  		=> 4,
												  			 "name"  	=> "Дженнифер",
												    		 "sname" 	=> "Лоуренс",
															 "baggage" 	=> $kg=rand(1,70)
											  				)
									);
								  
								  $price = 30;
								  echo '<table class="table table-hover">';
									echo  '<th>№</th><th>Фамилия</th><th>Имя</th><th>Вес багажа</th><th>Стоимость $USA</th>';
										foreach ($bagg as $baggage){
									  
											echo '<tr> <th>'.$baggage["id"].'</th><td>'.$baggage["sname"].'</td><td>'.$baggage["name"].'</td><td>'.$baggage["baggage"].'
												   </td><td>'.$baggage["baggage"]*$price.' '.'$</td></tr>';
										  }
											echo '</table>';
											$weig = $bagg["1st"]["baggage"]+$bagg["2st"]["baggage"]+$bagg["3st"]["baggage"]+$bagg["4st"]["baggage"];
											$summ = ($bagg["1st"]["baggage"]+$bagg["2st"]["baggage"]+$bagg["3st"]["baggage"]+$bagg["4st"]["baggage"])*$price;
									
										echo '<p><b>Общий вес багажа составляет: '.$weig.' кг<br> Общая стоимость перевозки составляет: '.$summ.' $</b></p>';
									?>
							  </div>
							</div>
						  </div>
						  <div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingThree">
							  <h4 class="panel-title panelH4">
								<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
								  Найти наибольшее и наименьшее значение функции y=3x^2+x-4
								</a>
							  </h4>
							</div>
							<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
							  <div class="panel-body">
								<h3>ЗАДАНИЕ</h3><hr>
								  <p><i>Найти наибольшее и наименьшее значение функции y=3x^2+x-4, если на заданном интервале [a,b] Х изменяется с шагом 0,5.</i></p>
								  <img src="../image/function.png" title="я тут что-то позже напишу" class="img-thumbnail"><hr>
							        	<?php 
										$a = rand(1,50);
										$b = rand(50,100);
										echo "<b>Интервал вычисления функции составляет от = $a до = $b с шагом 0,5</b><br>";
										
										
										for ($x=$a;$x<=$b;$x += 0.5) {
											echo "Х = $x <br>";
											$y=3*pow($x,2)+x-4;
											echo "результат вычисления = $y <br>";
											if ($x==$b){
											echo "<b>ДОСТИГНУТ ПРЕДЕЛ - ВЫЧИСЛЕНИЕ ЗАКОНЧЕННО !!!</b>";
											}
										}
										?>
							  </div>
							</div>
						  </div>
						
						 <div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingFour">
							  <h4 class="panel-title panelH4">
								<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
								  Кролики Фобоначчи
								</a>
							  </h4>
							</div>
							<div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
							  <div class="panel-body">
								 		<h3>ЗАДАНИЕ</h3><hr>
								  <p><i>В 1202г. Итальянский математик Леонард Пизанский (Фибоначчи) предложил такую задачу: пара кроликов каждый месяц дает приплод – двух кроликов (самца и самку), 
									от которых через два месяца уже получается новый приплод, Сколько кроликов будет через год, если в начале года имелась одна пара? Согласно условию задачи числа, 
									соответствующие количеству кроликов, которые появляются через каждый месяц, составляют последовательность 1, 1, 2, 3, 5, 8, 13, 21, 37, … Составьте программу, 
									позволяющую найти все числа Фибоначчи, меньшие заданного числа N.</i></p>
								  <img src="../image/fibonacci.png" title="я тут что-то позже напишу" class="img-thumbnail"><hr>					  
									<?php
									
									$rub = array();
									$id = 0;
										for ($id=0;$id<=12;$id++){
											if ($id==0 or $id==1){
												$rub[$id]=$id;
											}
											else{
												$rub[$id] =$rub[$id-1]+$rub[$id-2];
												}
											if ($id==0){
													echo '<b>Расчет количества кроликов за 12 месяцев</b>';
												}
												else {
													echo '<br>Число кроликов в месяц №'.$id.' = <b>'.$rub [$id].'</b>';
												}
										}
									echo '<hr>';
									print_r ($rub);
									?>
							  </div>
							</div>
						  </div>	
							
							<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingFive">
							  <h4 class="panel-title panelH4">
								<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
								  Найти наибольшее и наименьшее значение функции y=3x^2+x-4 в виде массива
								</a>
							  </h4>
							</div>
							<div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
							  <div class="panel-body">
								 		<h3>ЗАДАНИЕ</h3><hr>
								  <p><i>Найти наибольшее и наименьшее значение функции y=3x^2+x-4, на заданном интервале(в виде массива) который необходимо сгенерировать случайным образом</i></p>
								  <img src="../image/function.png" title="я тут что-то позже напишу" class="img-thumbnail"><hr>					  
									
									<?php 
										$a = rand(1,20);
										$b = rand(20,70);
										echo "<b>Интервал вычисления функции составляет от = $a до = $b с шагом 1</b><br>";
											
											$id=1;
											$idLost=$b-Sa;
											$FunctionResult = array();									
										
										for ($x=$a;$x<=$b;$x++) {
											echo "Х = $x <br>";
											$y=3*pow($x,2)+x-4;
											echo "результат вычисления = $y <br>";
											
											if ($id<=$idLost){
												$FunctionResult[$id] = $y;
												$id++;
											
											}
										}
										echo "<b>ДОСТИГНУТ ПРЕДЕЛ - ВЫЧИСЛЕНИЕ ЗАКОНЧЕННО !!!</b> <br>";
										echo '<pre>'; print_r ($FunctionResult);
										?>
									
							  </div>
							</div>
						  </div>	
					
					</div>	


