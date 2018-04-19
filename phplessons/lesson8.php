					<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
						  <div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingOne">
							  <h4 class="panel-title panelH4">
								<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
								  ЗАГРУЗКА ФАЙЛОВ НА САЙТ
								</a>
							  </h4>
							</div>
							<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
							  <div class="panel-body">
										<form action='<?=$_SERVER['REUEST_URI']?>' method='POST' enctype='multipart/form-data'>
										<p class="help-block">Данная форма позволяет загружать по одному файлу</p>
										<input name='file' type='file' multiple='true' />
										<input name='EnterUp' type='submit' value='Загрузить' />
									</form>
								<?php
								if (($_SERVER['REQUEST_METHOD']=='POST') and isset($_POST['EnterUp'])){
									$updir = './upload_files/';
									  $upfile = $updir.basename($_FILES['file']['name']);
									   $tmpfile = $_FILES['file']['tmp_name'];
										if(move_uploaded_file($tmpfile,$upfile)) 
										{echo "Фаил успешно загружен ".$_FILES['file']['name']."<br>";}
											else {echo "Произошол сбой при загрузке фаила ". $_FILES['file']['name']; break;}
								}
								$dir = opendir('./upload_files/');
								while ($entrdir = readdir($dir)){
									if (strlen($entrdir)>4){
									  echo "В данной папке находится файлы $entrdir <br>";
									}
								}
								closedir($dir);
								?>
								</div>
							</div>
						  </div>
						  <div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingTwo">
							  <h4 class="panel-title panelH4">
								<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
								  ИЩИМ СЛОВО В ФАЙЛЕ
								</a>
							  </h4>
							</div>
							<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
							  <div class="panel-body">
								    <form action="<?=$_SERVER['REUEST_URI']?>" method="POST">
									<p class="help-block">Введите текст для добавления в файл</p>
									<input type="text" name="inputtxt" placeholder="Текст"><br>
									<p class="help-block">Введите слово для поиска в тексте</p>
									<input type="text" name="inputworld" placeholder="Слово">
									<input type="submit" name="input" value="Input">
									</form>
									<?php 
									if (($_SERVER['REQUEST_METHOD']=='POST') and isset($_POST['input']) and isset($_POST['inputtxt'])){
										$text = trim(strip_tags($_POST['inputtxt']));
										 $fileO = fopen("files/file01.txt",'a+');
											fwrite($fileO,$text);
											 fclose($fileO);
									}
									
									  $fileO = file_get_contents("files/file01.txt");
										echo $fileO.'<br>';
										  $razdelit = explode(" ",$fileO);
									
									if (($_SERVER['REQUEST_METHOD']=='POST') and isset($_POST['input']) and isset($_POST['inputworld'])){
										$world = trim(strip_tags($_POST['inputworld']));
										 $fileO = file_get_contents("files/file01.txt");
										  $razdelit = explode(" ",$fileO);
											$i=count($razdelit);
											$foundWorld = 0;
												for ($a=0;$a<=$i;$a++){
													if ($razdelit[$a] == $world){
														$foundWorld++;
													}
												}
												echo '<hr> Данное слово <b>'.$world.'</b> было найденно <b>'.$foundWorld.'</b> раз, размер данного слова составляет =  '
												 .strlen($world).' байт <br>';
									}
									?>									
							  </div>
							</div>
						   </div>
						  <div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingThree">
							  <h4 class="panel-title panelH4">
								<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
								  Ищим слово во всех файлах и выводим их список если данное слово присутствует
								</a>
							  </h4>
							</div>
							<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
							  <div class="panel-body">
									 <form action='<?=$_SERVER['REUEST_URI']?>' method='POST'>
										<p class="help-block">Введите слово для поиска, например: Lorem</p>
										<input name='txt' type='text' />
										<input name='EnterSearch' type='submit' value='Найти' />
									</form>
								<?php
								if (($_SERVER['REQUEST_METHOD']=='POST') and isset($_POST['EnterSearch'])){
									$Word = strip_tags(trim($_POST['txt']));
									  
										if ($handle = opendir('./upload_files/')) {
											while (false !== ($file = readdir($handle))) { 
												if ($file != "." and $file != "..") { 
													//echo "$file\n"; 
																										
													$fileI = file_get_contents('./upload_files/'.$file);
													$razdelit = explode(" ",$fileI);
													$i=count($razdelit);
													$foundWord=0;
													for ($a=0;$a<=$i;$a++){
														if ($razdelit[$a] == $Word){
															$foundWord++;
														}
													}
													if ($foundWord>0){
													echo '<hr> Данное слово <b>'.$Word.'</b> было найденно <b>'.$foundWord.'</b> раз, в файле '.$file.', размер данного слова составляет = 
													'.strlen($Word).' байт <br>';}
													else {echo '<hr> Данное слово <b>'.$Word.'</b> НЕ НАЙДЕННО, в файле '.$file.', <br>';}
												} 
											}
											closedir($handle); 
										}
								}
								?>
							  </div>
							</div>
						  </div>
					</div>	

			