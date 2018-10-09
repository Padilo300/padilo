<?php 
  function sanitize_output($buffer) {

      $search = array(
          '/\>[^\S ]+/s',     // strip whitespaces after tags, except space
          '/[^\S ]+\</s',     // strip whitespaces before tags, except space
          '/(\s)+/s',         // shorten multiple whitespace sequences
          '/<!--(.|\s)*?-->/' // Remove HTML comments
      );

      $replace = array(
          '>',
          '<',
          '\\1',
          ''
      );

      $buffer = preg_replace($search, $replace, $buffer);

      return $buffer;
  }
  //ob_start("sanitize_output");
 ?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Падило Константин</title>
    <meta name="description"  content="Портфолио full stack developer Падило Констанин, портфолио программиста, Падило работы, заказать у фрилансера" />
    <meta name="keywords" itemprop="keywords" content="Падило,Падило Констанин,Падило Констанин Русланович,Падило программист,Падило фрилансер" />
    <meta name="document-state" content="static" />
    <meta name="revisit" content="31" />
    <meta name="author" lang="ru" content="Падило Констанин Русланович" />
    <!-- <meta http-equiv="Cache-Control" content="public, max-age=864000, must-revalidate, 
max-age=864000, proxy-revalidate "> -->


		<link rel="shortcut icon" href="img/triangle.png" type="image/x-icon">
		<link rel="stylesheet" href="/css/bootstrap.css">
		<link rel="stylesheet" href="/css/all.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  	<div class="wrap-main container-fluid">
  		<div class="row">
  			<div class="col-lg-10 col-md-10 col-lg-offset-1 col-md-offset-1 shadow-conteiner">
				<nav class="navbar navbar-default" role="navigation">
				  <div class="container-fluid">
				    <!-- Brand and toggle get grouped for better mobile display -->
				    <div class="navbar-header">
				      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				            <span class="sr-only">Toggle navigation</span>
				            <span class="icon-bar"></span>
				            <span class="icon-bar"></span>
				            <span class="icon-bar"></span>
				          </button>
				      <a class="navbar-brand text-shadow-blue" href="index.php" id="brend">
				      	Padilo K<i class="fa fa-circle-o-notch fa-spin" aria-hidden="true"></i>nstantin
				      </a>
				    </div>

				    <!-- Collect the nav links, forms, and other content for toggling -->
				    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				      <ul class="nav navbar-nav">
				        <li class="active">
				        	<a href="index.php"><i class="fa fa-user-circle" aria-hidden="true"></i> Резюме</a>
				        </li>
				        <li>
				        	<a href="summary.php" >
							<i class="fa fa-server" aria-hidden="true"></i>
				        	Портфолио
				        	</a>
				        </li>
				       <!--  <li class="dropdown">
				          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
				          <ul class="dropdown-menu">
				            <li><a href="#">Действие</a></li>
				            <li><a href="#">Другое действие</a></li>
				            <li><a href="#">Что-то еще</a></li>
				            <li class="divider"></li>
				            <li><a href="#">Отдельная ссылка</a></li>
				            <li class="divider"></li>
				            <li><a href="#">Еще одна отдельная ссылка</a></li>
				          </ul>
				        </li> -->
				      </ul>
				     <!--  <form class="navbar-form navbar-left" role="search">
				        <div class="form-group">
				          <input type="text" class="form-control" placeholder="Search">
				        </div>
				        <button type="submit" class="btn btn-default">Отправить</button>
				      </form> -->
				      <ul class="nav navbar-nav navbar-right">
				        <!-- <li><a href="#">Ссылка</a></li> -->
						<li class="dropdown">
				          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
				          	Контакты <b class="caret"></b></a>
				          <ul class="dropdown-menu">
				            <li>
				            	<a href="https://github.com/Padilo300" target="_blank">
				            		<i class="fa fa-github" aria-hidden="true"></i> GitHab
				            	</a>
				            </li>
				            <li>
				            	<a href="https://www.facebook.com/profile.php?id=100005729088750" target="_blank">
				            		<i class="fa fa-facebook-official" aria-hidden="true"></i>	Facebook
				            	</a>
				            </li>
				            <li>
				            	<a href="https://plus.google.com/u/0/+%D0%9A%D0%BE%D1%81%D1%82%D1%8F%D0%9F%D0%B0%D0%B4%D0%B8%D0%BB%D0%BE" target="_blank">
				            		<i class="fa fa-google-plus-official" aria-hidden="true"></i> Gmail
				            	</a>
				            </li>
				            <li>
				            	<a href="https://www.instagram.com/konstantin_padilo/?hl=ru" target="_blank">
				            		<i class="fa fa-instagram" aria-hidden="true"></i> Instagram
				            	</a>
				            </li>
				            <li class="divider"></li>
				            <li>
				            	<a href=":tel">
				            		<i class="fa fa-phone" aria-hidden="true"></i> 80966979966
				            	</a>
				            </li>
				          </ul>
				        </li>
				      </ul>
				    </div><!-- /.navbar-collapse -->
				  </div><!-- /.container-fluid -->
				</nav>
			<div id="wrap-conteiner">
				<div id="conteiner-ajax" data-class="summary" class="row">
						<div class="col-lg-6">
							<div class="xoverlay x-zoom-inout">
								<h3 class="text-center">
									Система втоматизации расчета рабочих смен, начисления заработной платы, и база сотрудников.
								</h3>
								<img class="x-img-main" src="img/reporter.png" />
								<div class="xoverlay-box">
									<div class="xoverlay-data">	
										<br>
										<p class=" text-left">
											root:~# У приложения самописная админ-панель.
											<br>
											root:~# Серверная часть написана в стиле "ООП".
											<br>
											root:~# JS скрипты в функциональном стиле.
											<br>
											root:~# Языки и инструменты для реализации проекта<b>:</b>
											<br>
											> PHP
											<br>
											> SQL
											<br>
											> JS
											<br>
											> JSON
											<br>
											> AJAX
											<br>
											> GZIP
											<br>
											root:~# Скорость загрузки<b>:</b>
											<br>
											Google_PageSpeed:~$ для мобильных: <b>81/100</b>
											<br>
											Google_PageSpeed:~$ для PC: <b>92/100</b>
											<br>
										</p>
										<div class="clearfix"></div>
										<div class="xoverlay__skils">
										</div>
									</div>
								</div>
							</div>
							<p class="text-center">
								<a target="_blank" class="text-center" href="http://reporter-bar.zzz.com.ua/">reporter-bar.zzz.com.ua</a>
							</p>
						</div>
						<div class="col-lg-6">
							<div class="xoverlay x-zoom-inout">
								<h3 class="text-center">
									Система втоматизации расчета рабочих смен, начисления заработной платы, и база сотрудников.
								</h3>
								<img class="x-img-main" src="img/reporter.png" />
								<div class="xoverlay-box">
									<div class="xoverlay-data">	
										<br>
										<p class=" text-left">
											root:~# У приложения самописная админ-панель.
											<br>
											root:~# Серверная часть написана в стиле "ООП".
											<br>
											root:~# JS скрипты в функциональном стиле.
											<br>
											root:~# Языки и инструменты для реализации проекта<b>:</b>
											<br>
											> PHP
											<br>
											> SQL
											<br>
											> JS
											<br>
											> JSON
											<br>
											> AJAX
											<br>
											> GZIP
											<br>
											root:~# Скорость загрузки<b>:</b>
											<br>
											Google_PageSpeed:~$ для мобильных: <b>81/100</b>
											<br>
											Google_PageSpeed:~$ для PC: <b>92/100</b>
											<br>
										</p>
										<div class="clearfix"></div>
										<div class="xoverlay__skils">
										</div>
									</div>
								</div>
							</div>
							<p class="text-center">
								<a target="_blank" class="text-center" href="http://reporter-bar.zzz.com.ua/">reporter-bar.zzz.com.ua</a>
							</p>
						</div>
				</div>
			</div>
				<br>
	  			<br>
	  			<br>
	  		<footer id="footer">
			    <p class="text-center">
			      <a  target="_blank" href="#" class="text-center" title="Дизайн и программирование - Падило Константин.">Padilo
				     <img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeD0iMHB4IiB5PSIwcHgiIHZpZXdCb3g9IjAgMCA1MTIgNTEyIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA1MTIgNTEyOyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgd2lkdGg9IjE2cHgiIGhlaWdodD0iMTZweCI+CjxnPgoJPGc+CgkJPHBhdGggZD0iTTI1NiwzNC4yOTdMMCw0NzcuNzAzaDUxMkwyNTYsMzQuMjk3eiBNMjU2LDc2Ljk2OWwyMTkuMDQ3LDM3OS40MDZIMzYuOTUzTDI1Niw3Ni45Njl6IiBmaWxsPSIjRkZGRkZGIi8+Cgk8L2c+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg==" />
			      </a>
			    </p>
	  		</footer>
  			</div><!-- end  shadow-conteiner -->
  		</div>
  	</div>
		<script>
  	     $(document).ready(function() {
          $("head").append("<link href='https://fonts.googleapis.com/css?family=Jura' rel='stylesheet'>");

          $('#summary').click(function () {
            $('#wrap-conteiner').load('summary.php #conteiner-ajax');
            return false;
          });

          $('#brend').click(function () {
            $('#wrap-conteiner').load('index.php #conteiner-ajax');
            return false;
          });
          
          $('#index').click(function () {
            $('#wrap-conteiner').load('index.php #conteiner-ajax');
            return false;
          });
        });
  	</script>
  </body>
</html>