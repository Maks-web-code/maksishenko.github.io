				<!-- КОНТЕНТ НАЧАЛО-->
				
						<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
						  <div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingOne">
							  <h4 class="panel-title panelH4">
								<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
								  Вычисление объема куба 
								</a>
							  </h4>
							</div>
							<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
							  <div class="panel-body">
								
								  <h3>ЗАДАНИЕ</h3><hr>
								  <p><i>Написать php-скрипт вычисление объема куба, все параметры произвольные.</i></p>
								  <img src="../image/coub_img.png" title="Объем куба вычисляется по формуле V=а*a*a или V=a^3" class="img-thumbnail">
								  <?php 
								  $a=7;
								  $v=pow($a,3);
								  ?>
								  <br>
							  	  <?php echo "Длина а=7см. <b>Объем v=$v см3</b>"?>
								  
								  <pre>
PHP-скрипт
								  
$a=7;
$v=pow($a,3);
								  
echo "Длина а=7см. Объем v=$v см3" 
								  </pre>
							  
								</div>
							</div>
						  </div>
						  <div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingTwo">
							  <h4 class="panel-title panelH4">
								<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
								  Вычисляем длину вектора по 3-м координатам
								</a>
							  </h4>
							</div>
							<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
							  <div class="panel-body">
								  <h3>ЗАДАНИЕ</h3><hr>
								  <p><i>Даны три координаты вектора x,y,z с основанием у начала координат. Вычислите длину этого вектора и выведите результат на экран.</i></p><hr>
								  <img src="../image/Coord_planes.png" title="Длина вектора вычисляется по формуле D=корень кв.(X^2+Y^2+Z^2)" class="img-thumbnail">
								  
								  <?php 
								  $x=7;
								  $y=4;
								  $z=9;
								  $D=sqrt(pow($x,2)+pow($y,2)+pow($z,2));
								  $d=number_format($D, 2, '.', '');
								  ?>
								  <br>
							  	  <?php echo "Длина x=7см., y=4см., z=9см. <br>
								  <b>Точная длина вектора D=$D см <br>Округленное значение длины вектора $d см</b>"?>
								  
								  <pre>
PHP-скрипт
								  
$x=7;
$y=4;
$z=9;
$D=sqrt(pow($x,2)+pow($y,2)+pow($z,2));
$d=number_format($D, 2, '.', '');
								  
"Длина x=7см., y=4см., z=9см.
<b>Точная длина вектора D=$D см 
Округленное значение длины вектора $d см"</b> 
								</pre>  
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
								  
								  <?php 
								  $Sh=110;//скорость км-ч
								  $tS=3600;//3600с в 1-м часе
								  $Ms=(($Sh*1000)/$tS);
								  echo "<br>Скорость КМ\Ч = 110 км\ч <br>
								  <b>Скорость М\С =$Ms м\с <br>"?>
								  
								  <pre>
PHP-скрипт
								  
$Sh=110;//скорость км-ч
$tS=3600;//3600с в 1-м часе
$Ms=(($Sh*1000)/$tS);
								  
echo "Скорость КМ\Ч = 110 км\ч 
<b>Скорость М\С =$Ms м\с </b>" 
								</pre>
							  </div>
							</div>
						  </div>
						
						 <div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingFour">
							  <h4 class="panel-title panelH4">
								<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
								  Возвести число "а" в 4-ю степень не используя функции
								</a>
							  </h4>
							</div>
							<div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
							  <div class="panel-body">
								 
								  <h3>ЗАДАНИЕ</h3><hr>
								  <p><i>Дано число "a" не используя никаких функций получить число a^4 за две операции</i></p>
								  								  
								  <?php 
								  $b=8*8;
								  $c=$b*$b;
								  echo "<br>Число \"а\" возведенная в 4-ю степень без использования функции <br>
								  <b>Результат вычисления за 2-е операции = $c <br>"?>
								  
								  <pre>
PHP-скрипт
								  
Число a=8
$b=8*8;
$c=$b*$b;
								  						  
echo "Число \"а\" возведенная в 4-ю степень без использования функции 
<b>Результат вычисления за 2-е операции = $c </b>"
								  
								</pre>  
							  </div>
							</div>
						  </div>	
					
					
					</div>	
				
				<!-- КОНТЕНТ КОНЕЦ-->