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
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-124585095-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-124585095-1');
	</script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="theme-color" content="#000">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Падило Константин</title>
    <meta name="description"  content="Резюме full stack developer Падило Констанин, разработка сайтов, веб приложений, landing page, посадка сайтов на wordpress." />
    <meta name="keywords" itemprop="keywords" content="Падило,Падило Констанин,Падило Констанин Русланович,Падило программист,Падило фрилансер" />
    <meta name="document-state" content="static" />
    <meta name="revisit" content="31" />
		<meta name="author" lang="ru" content="Падило Констанин Русланович" />
		
		<link rel="apple-touch-icon" sizes="180x180" href="/img/ico/apple-touch-icon.png?v=E6558lKWMW">
		<link rel="icon" type="image/png" sizes="32x32" href="/img/ico/favicon-32x32.png?v=E6558lKWMW">
		<link rel="icon" type="image/png" sizes="16x16" href="/img/ico/favicon-16x16.png?v=E6558lKWMW">
		<link rel="manifest" href="/img/ico/site.webmanifest?v=E6558lKWMW">
		<link rel="mask-icon" href="/img/ico/safari-pinned-tab.svg?v=E6558lKWMW" color="#5bbad5">
		<link rel="shortcut icon" href="/img/ico/favicon.ico?v=E6558lKWMW">
		<meta name="apple-mobile-web-app-title" content="PADILO">
		<meta name="application-name" content="PADILO">
		<meta name="msapplication-TileColor" content="#2d89ef">
		<meta name="msapplication-config" content="/img/ico/browserconfig.xml?v=E6558lKWMW">
		<meta name="theme-color" content="#ffffff">

		<link rel="manifest" href="/manifest.json">

		<meta name="mobile-web-app-able" content="yes">	
		<meta name="apple-mobile-web-app-able" content="yes">	
		<meta name="application-name" content="padilo">	
		<meta name="apple-mobile-web-app-title" content="padilo">	
		<meta name="theme-color" content="#000">	
		<meta name="msapplication-navbutton-color" content="#000">	
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">	
		<meta name="msapplication-starturl" content="/">	
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">	
    <meta http-equiv="Cache-Control" content="public, max-age=864000, must-revalidate, 
max-age=864000, proxy-revalidate ">




	<link rel="shortcut icon" href="img/triangle.png" type="image/x-icon">
	<link rel="stylesheet" href="/css/all.css">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body itemtype="http://schema.org/Person">
  	<div class="wrap-main container">
  		<div class="row">
  			<div class="col-lg-10 col-md-10 col-lg-offset-1 col-md-offset-1 shadow-conteiner gradient-demo">
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
				      <a class="navbar-brand text-shadow-blue" rel="noopener" href="index.html" id="brend">
				      	Padilo K<i class="fa fa-circle-o-notch fa-spin" aria-hidden="true"></i>nstantin
				      </a>
				    </div>

				    <!-- Collect the nav links, forms, and other content for toggling -->
				    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				      <ul class="nav navbar-nav">
				        <li class="active">
				        	<a href="/index.html" id="index"><i class="fa fa-user-circle" aria-hidden="true"></i> Резюме</a>
								</li>
								<li>
									<button id="pwaAdd" class="btnAdd">
										add
 									</button>
								</li>
				       <!--  <li>
				        	<a href="summary.html" id="summary">
							<i class="fa fa-server" aria-hidden="true"></i>
				        	Портфолио
				        	</a>
				        </li> -->
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
				            	<a href="https://github.com/Padilo300" rel="noopener" target="_blank">
				            		<i class="fa fa-github" aria-hidden="true"></i> GitHab
				            	</a>
				            </li>
				            <li>
				            	<a href="https://www.facebook.com/profile.php?id=100005729088750" rel="noopener" target="_blank">
				            		<i class="fa fa-facebook-official" aria-hidden="true"></i>	Facebook
				            	</a>
				            </li>
				            <li>
				            	<a href="https://plus.google.com/u/0/+%D0%9A%D0%BE%D1%81%D1%82%D1%8F%D0%9F%D0%B0%D0%B4%D0%B8%D0%BB%D0%BE" rel="noopener" target="_blank">
				            		<i class="fa fa-google-plus-official" aria-hidden="true"></i> Gmail
				            	</a>
				            </li>
				            <li>
				            	<a href="https://www.instagram.com/konstantin_padilo/?hl=ru" rel="noopener" target="_blank">
				            		<i class="fa fa-instagram" aria-hidden="true"></i> Instagram
				            	</a>
				            </li>
				            <li class="divider"></li>
				            <li>
				            	<a href=":tel" rel="noopener">
				            		<i class="fa fa-phone" aria-hidden="true"></i> +380966979966
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
		  				<div class="col-lg-12">
		  					<div class="row">
		  						<div class="col-lg-4">
		  							<div class="my-foto">
		  								<div class="glitch glitch--style-6">
											<div class="glitch__img"></div>
											<div class="glitch__img"></div>
											<div class="glitch__img"></div>
											<div class="glitch__img"></div>
											<div class="glitch__img"></div>
										</div>
		  							</div>
		  						</div>
		  						<div class="col-lg-7 aboute-me">
		  							<article>
			  							<h1 class="text-center" iteamprop="givenName">Падило Константин Русланович</h1>
			  							<h2 class="text-center" iteamprop="jobTitle" iteamprop="knows" >Full Stack Developer</h2>
			  							<ul>
			  								<li itemprop="birthDate">Дата рождения: 06.11.1994 (23 года)</li>
			  								<li itemprop="birthPlace">Регион: Украина г.Днепр</li>
											<li>Телефон: <a href="tel:0677969966" iteamprop="telephone" >+380677969966</a></li>
											<li>
												Эл.почта: 
												<a href="mailto:padilo300@gmail.com" rel="noopener" iteamprop="email">
													padilo300@gmail.com
												</a>
											</li>
			  							</ul>
			  							<p class="text-justyfy">
			  								<h4 class="text-center">
                          <i>
                            Моя цель - стать лучшим в своем деле. 
                          </i>
                        </h4>
			  							</p>
                      <p class="text-justify">
                        Администрирую <a target="_blank"  rel="noopener" href="https://ru.wikipedia.org/wiki/Linux">Linux</a>, имею опыт сборки системы с "нуля", разграничения прав пользователей, и групп.
                        Также имею опыт создания сервера в связке (<a href="https://ru.wikipedia.org/wiki/LAMP"  rel="noopener" target="_blank">LAMP</a>) и организации доступа к серверу по SSH, и SFTP.
                        Владею bash, пишу скрипты для решения простых задач.
                        В качестве домашней ОС использую дистрибутив Debian9 (окружение LXDE).
                        <br>
                        <br>
                        Обладаю опытом решения задач программирования, и эффективного конструирования базы данных, 
                        для динамических web-сайтов, и web-приложений. 
                        <br>
                        <br>
                        В качестве серверного языка использую PHP, придерживаюсь ООП, соблюдаю чистоту кода, и оставляю максимально комментариев.
                        <br>
                        <br>
                        Клиентскую часть собираю в GULP, хорошо владею SASS синтаксисом,  большое количество заготовок протестированного кода, для типовых задач. 
                        Особое внимание уделяю показателю google pagespeed, мои проекты не получают оценку ниже 80/100.
                        <br>
                        Опыт web разработки более двух лет.
                      </p>
		  							</article>
		  					</div><!--col-lg-7-->
		  					<div class="col-lg-12">
		  						<h2 class="text-center">Мой стэк</h2>
		  						<p class="text-center">Навыки и инструменты которыми, Я владею и использую на практике:</p>
		  						<ul class="skils" id="skils">
		  							<li>
		  								<div class="progress-skils bg_aqva triangle-bottomleft-c_aqva" data-lavel="90" data-bg_color="#00f" >
		  									HTML5, CSS3
		  								</div>
		  							</li>
		  							<li>
		  								<div class="progress-skils bg_yellow triangle-bottomleft" data-lavel="70" data-bg_color="#00f" >
		  									JavaScript
		  								</div>
		  							</li>
		  							<li>
		  								<div class="progress-skils bg_ligth-blue triangle-bottomleft" data-lavel="80" data-bg_color="#00f" >
		  									jQuery
		  								</div>
		  							</li>
		  							<li>
		  								<div class="progress-skils bg_ligth-blue triangle-bottomleft" data-lavel="90" data-bg_color="#00f" >
		  									JSON
		  								</div>
		  							</li>
		  							<li>
		  								<div class="progress-skils bg_ligth-red triangle-bottomleft" data-lavel="90" data-bg_color="#00f" >
		  									GULP
		  								</div>
		  							</li>
		  							<li>
		  								<div class="progress-skils bg_pink triangle-bottomleft" data-lavel="70" data-bg_color="#00f" >
		  									SASS
		  								</div>
		  							</li>
		  							<li>
		  								<div class="progress-skils bg_strong-blue triangle-bottomleft" data-lavel="60" data-bg_color="#00f" >
		  									PHP-5/7
		  								</div>
		  							</li>
		  							<li>
		  								<div class="progress-skils bg_silver triangle-bottomleft" data-lavel="75" data-bg_color="#00f" >
		  									SQL
		  								</div>
		  							</li>
		  							<li>
		  								<div class="progress-skils bg_krem-blue triangle-bottomleft" data-lavel="85" data-bg_color="#00f" >
		  									Bootstrap 3
		  								</div>
		  							</li>
		  							<li>
		  								<div class="progress-skils bg_ligth-blue triangle-bottomleft" data-lavel="90" data-bg_color="#00f" >
		  									PSD
		  								</div>
		  							</li>
		  							<li>
		  								<div class="progress-skils bg_strong-blue triangle-bottomleft" data-lavel="65" data-bg_color="#00f" >
		  									WordPress
		  								</div>
		  							</li>
		  							<li>
		  								<div class="progress-skils bg_aqva triangle-bottomleft-c_aqva" data-lavel="65" data-bg_color="#00f" >
		  									Opencart
		  								</div>
		  							</li>
		  							<li>
		  								<div class="progress-skils bg_green triangle-bottomleft" data-lavel="50" data-bg_color="#00f" >
		  									Linux
		  								</div>
		  							</li>
		  							<li>
		  								<div class="progress-skils  bg_ligth-red triangle-bottomleft" data-lavel="60" data-bg_color="#00f">
		  									Git
		  								</div>
		  							</li>
		  						</ul>
		  					</div>
		  				</div>
		  			</div>
	  			</div><!--end #conteiner-ajax-->
  			</div><!--end #wrap-conteiner-->
  			<br>
  			<br>
  			<br>
  		<footer id="footer">
		    <p class="text-center">
		      <a  target="_blank" rel="noopener" href="#" class="text-center" title="Дизайн и программирование - Падило Константин.">Padilo
			     <img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeD0iMHB4IiB5PSIwcHgiIHZpZXdCb3g9IjAgMCA1MTIgNTEyIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA1MTIgNTEyOyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgd2lkdGg9IjE2cHgiIGhlaWdodD0iMTZweCI+CjxnPgoJPGc+CgkJPHBhdGggZD0iTTI1NiwzNC4yOTdMMCw0NzcuNzAzaDUxMkwyNTYsMzQuMjk3eiBNMjU2LDc2Ljk2OWwyMTkuMDQ3LDM3OS40MDZIMzYuOTUzTDI1Niw3Ni45Njl6IiBmaWxsPSIjRkZGRkZGIi8+Cgk8L2c+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg==" alt="ico" />
		      </a>
		    </p>
  		</footer>
  		</div>
  	</div>
  </div>

    
		<script src="js/jquery-3.3.1.min.js"></script> 
		<script src="js/bootstrap.min.js" defer></script>
  	<script src="js/imagesloaded.pkgd.min.js" defer></script>
		<script src="js/demo.js" defer></script>
		<script src="/sw_tool.js" ></script>

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

			navigator.serviceWorker && navigator.serviceWorker.register('/sw.js').then(function(registration) {
				console.log('Excellent, registered with scope: ', registration.scope);
			});
			
			
		</script>
		<script src="js/sw_tool.js" ></script>
  </body>
</html>