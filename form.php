	  <!DOCTYPE html>
<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1">﻿
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title> audrey hepburn</title>
   <link rel="stylesheet" href="Stele.css" type="text/css" />
    <link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="main_page.css" type="text/css" />
   
	<meta charset="utf-8" />
    <meta name="description" content="Информационно развлекательнеый портал" />
    <meta name="keywords"  content="It prooger" />
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
</head>
<body>
    <div id="wrapper">
        <div id="content">
                        <header>
                            <div id="logo">
                                <a href="http://sfk.pavlovsk-net.org/cs.html" title="На главную">
                                  <img src="img/Oudry.jpg" title="it progger" alt="it ppaf" />
                                    <span>  Audrey Hepburn </span>
                                </a>
                            </div>
                            <div id="about">
                                <a href="addd.html" title="Узнать об рекламе">Реклама</a>
                                <a href="" title="Узнать об рекламе">Узнать о нас</a>
                            </div>
                            <div id="reg_auth">
                                <a href=""   title="Войти в кабинет пользователя">
                                 <div id="btn">
                                     Войти 
                                 </div>
                                </a>
                                <a href=""  title="Зарегистритроваться на сайте">
                                    <div id="btn">
                                     Зарегистрироваться

                                    </div>

                                </a>
                            </div>

                        </header>
            <nav>
                <div id="menuShow"><i class="fa fa-bars" aria-hidden="true"></i></div>
               <div id="hideMenu">
                 <a href="" title="">Биография</a>
                <a href="" title="">Фильмография</a>
                <a href="" title="">Обои</a>
                <a href="" title="">Фото</a>
                <a href="" title="">Коменнатии</a> 
                </div>
            <div id="search">
                <span>Поиск</span>
                <i class="fa fa-search" aria-hidden="true"></i>

            </div> 
                <div id="mobileMenu">
                    <a href="" title="">Биография</a> <br/>
                    <a href="" title="">Фильмография</a><br />
                    <a href="" title="">Обои</a> <br />
                    <a href="" title="">Фото</a> <br />
                    <a href="" title="">Коменнатии</a>
                    <hr />
                    <a href="" title="">Регистрация</a>
                    <a href="" title="">Войти</a>
                </div>              
            </nav>
				<div id="main">
				  <div id="news">
					<h2 class="heading"> Биография Audrey </h2>
					   <div style="clear: both"><br> </div>
					    
						
						<?php
						
						for ($i=0; $i<6; $i++)
							echo '<div class="artical">
							<img src="img/Oudry2.jpg" alt="test" title="test">
							<span id="text">Британская актриса, фотомодель и гуманитарный деятель.
							                Получила «Оскар» в 1954 году за лучшую женскую роль в фильме
											«Римские каникулы» 1953.
											</span> 
						</div>
						
						';
						
						
						
						
						?>
						<div id="reg_auth">
						<a href=""  title="Посмотреть больше стаей"> </a>
                                    <div class="btn">
                                     Посмотреть больше 

                                    </div>
						
						</div>
						
				  </div>
				</div>
				<aside>
					<div id="courses">
					   <h2> Видео с Oudry </h2>
					       <div style="clear: both"><br> </div>
				</div>
				</aside>
				
            </div>
            
            <?php
	      $connection = mysql_connect("localhost", "root", "1234");
	      $db = mysql_select_db("internetbank");
	        mysql_set_charset("utf8");
	        if (!$connection || !$db){
			mysql_error();
			
		}
	   
	   
		      
            ?>
            
		       <form method="post" action="form.php">
			<div class="form-group">
				 <p>User</p>
				<input type="text" name="title"><br><br>
			
					<textarea cols="40" rows="10"></textarea><br>
				<input type="text" name="Autor"><br>
				
				<input type="submit" name="add" value="Ad3d">
			</div>

		       </form>
		       <?php 
	    If(isset($_POST['add']))
	    {
	    	$title = strip_tags(trim($_POST['title']));
	     mysql_query(" INSERT INTO User(first_name) VALUES ('$title')");
	    mysql_close();
	     echo "Пользователь добавлен";
		    
	    }
	     
	    		?>
         <footer>
             <p> Изменение для гида</p>
             фываыва
             <p>Еще одно изменение для гида</p>
             <div id="site_name">
                 <span> Audri</span>  
                 <div id="clear"> </div>
                 <div id="footer_menu">
                     <a href="" title="Узнать детальнее про рекламу">Реклама</a>
                     <a href="" title="Поддержать проект">Поддержать проект</a>
                     <a href="" title="Написать письмо">Обратная связь</a> 
                 </div>
                 <div id="right">
                     <a href="">Все права защищены &copy; <?=date ('Y')?></a> 
                 </div>
                 <div id="social">
                     <a href="" title="Вконтакте"><i class="fa fa-vk" aria-hidden="true"></i></a>
                     <a href="" title="Facebook"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
                     <a href="" title="Youtube"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                     <a href="" title="Instag"><i class="fa fa-instagram" aria-hidden="true"></i></a>                   
                 </div>

             </div>
  
        </footer>
        </div>
<script src ="//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> 
    <script>
        $('#menuShow'). click(function () {
            if ($('#mobileMenu').is(':visible'))
                $('#mobileMenu').hide();
            else
                $('#mobileMenu').show();
        });
        window.onresize = function (event) {
            $('#mobileMenu').hide();
        };

    </script>
</body>
</html>
