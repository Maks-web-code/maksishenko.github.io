
						<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
						  <div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingOne">
							  <h4 class="panel-title panelH4">
								<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
								  КУКИ-ПИЧЕНЬКИ
								</a>
							  </h4>
							</div>
							<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
							  <div class="panel-body">
								
								  <h3>ЗАДАНИЕ</h3><hr>
								  <p><i>Создание и чтение КУКИ</i></p>
										<?php 
										if (isset($userName)) {echo 'Мы рады познакомиться с Вами <b>'.$userSname.' '.$userName.' '.$userOname.'.</b> - Теперь мы вас запомним на долго ))))';}
											else {echo "Здраствуйте давайте познакомимся";}
										?>
										<br>
								  <img src="../image/cookies.jpg" title="«КУКИ-ПИЧЕНЬКИ»" class="img-thumbnail" style="align:center">
								  <br>
								  <hr>
									<form method="POST" action="<?=$_SERVER['REUEST_URI']?>" class="form-search"> 
									<b> Введите своё имя </b><br>
									<input name="name" type="text" placeholder="Имя" class="input-medium"><br>
									<b> Введите свою фамилия</b><br>
									<input name="sname" type="text" placeholder="Фамилия" class="input-medium"><br>
									<b> Введите своё отчиство</b><br>
									<input name="oname" type="text" placeholder="Отчиство" class="input-medium"><br>
									<input type="submit" class="submit-calc" name="Enter" value="Авторизоваться"><br>
									<input type="submit" class="submit-calc" name="Delete"  value="Стать инкогнито">
									</form>
									
									
								</div>
							</div>
						  </div>
						  <div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingTwo">
							  <h4 class="panel-title panelH4">
								<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
								  СЕССИИ.
								</a>
							  </h4>
							</div>
							<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
							  <div class="panel-body">
								  <h3>ЗАДАНИЕ</h3><hr>
								  <p><i>Создаем тест и записываем результаты в сессию.</i></p><hr>
										<?php 
										if (isset($userName)) {echo 'Мы рады вас видеть <b>'.$userName.' '.$userOname.'.</b>';}
											else {echo "Давайте познакомимся";}
										?> <br>
								  <img src="../image/php_session.png" title="«Сортировка вставками»" class="img-thumbnail"> <br><br>
								  
								  	<a href="test/test.php" class="btn btn-primary btn-lg active btn-block" role="button" id="AsideBAR">Начать тест</a> <hr>							  
									<p>Сессии являются простым способом хранения информации для отдельных пользователей с уникальным идентификатором сессии. Это может использоваться 
									для сохранения состояния между запросами страниц. Идентификаторы сессий обычно отправляются браузеру через сессионный cookie и используются для 
									получения имеющихся данных сессии. Отсутствие идентификатора сессии или сессионного cookie сообщает PHP о том, что необходимо создать новую сессию 
									и сгенерировать новый идентификатор сессии.</p>

									<p>Сессии используют простую технологию. Когда сессия создана, PHP будет либо получать существующую сессию, используя переданный идентификатор 
									(обычно из сессионного cookie) или, если ничего не передавалось, будет создана новая сессия. PHP заполнит суперглобальную переменную $_SESSION 
									сессионной информацией после того, как будет запущена сессия. Когда PHP завершает работу, он автоматически сериализует содержимое суперглобальной 
									переменной $_SESSION и отправит для сохранения, используя сессионный обработчик для записи сессии.</p>

									<p>По умолчанию PHP использует внутренний обработчик files для сохранения сессий, который установлен в INI-переменной session.save_handler. Этот обработчик 
									сохраняет данные на сервере в директории, указанной в конфигурационной директиве session.save_path.</p>

									<p>Сессии могут запускаться вручную с помощью функции session_start(). Если директива session.auto_start установлена в 1, сессия автоматически запустится,
									в начале запроса.</p>

									<p>Сессия обычно завершает свою работу, когда PHP заканчивает исполнять скрипт, но может быть завершена и вручную с помощью функции session_write_close(). </p>
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
