<!DOCTYPE HTML>
<html>
	<head>
		<title>Pierre Fourreau</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="Curriculum vitae Pierre Fourreau" />
		<meta name="keywords" content="Curriculum, curriculum, Vitae, vitae, curriculum vitae, R�sum�, resume, Pierre, Fourreau, Pierre Fourreau, d�veloppeur, informatique">
		<meta name="Author" content="Pierre Fourreau, fourreau.pierre@gmail.com">
		<meta name="Identifier-URL" content="fourreau.pierre@gmail.com">
		<meta name="Publisher" content="Fourreau Pierre">
		<meta name="viewport" content="initial-scale=1.0, user-scalable=yes" />
		
		<link rel="icon" type="image/png" href="images/fav.ico" />
		
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.scrollzer.min.js"></script>
		<script src="js/jquery.scrolly.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		
		<!-- Google analytics -->
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-39799031-2', 'auto');
	  ga('send', 'pageview');

	</script>
	
	</head>
	<body>
		<div id="wrapper">
			<!-- Header -->
				<section id="header" class="skel-layers-fixed">
					<header>
						<span class="image avatar"><img src="images/avatar1.png" alt="avatar profil" /></span>
						<h1 id="logo"><a href="#">Pierre Fourreau</a></h1>
						<p>Ingénieur informatique</p>
					</header>
					<nav id="nav">
						<ul>
							<li><a href="#one" class="active">A propos</a></li>
							<li><a href="#two">Ce que je peux faire</a></li>
							<li><a href="#three">Experiences</a></li>
							<li><a href="#four">Projets</a></li>
							<li><a href="#five">Contact</a></li>
						</ul>
					</nav>
					<footer>
						<ul class="icons">
							<li><a href="https://fr.linkedin.com/pub/pierre-fourreau/48/539/66" class="icon fa-linkedin" target="_blank"><span class="label">Twitter</span></a></li>
							<li><a href="https://twitter.com/pierre_fourreau" class="icon fa-twitter" target="_blank"><span class="label">Twitter</span></a></li>
							<li><a href="https://github.com/PierreFourreau" class="icon fa-github" target="_blank"><span class="label">Github</span></a></li>
							<li><a href="mailto:fourreau.pierre@gmail.com" class="icon fa-envelope" target="_blank"><span class="label">Email</span></a></li>
						</ul>
					</footer>
				</section>

			<!-- Main -->
				<div id="main">
					<!-- One -->
						<section id="one">
							<div class="container">

								<?php 

								$nom=$_POST['nom']; 
								$mail=$_POST['mail']; 
								$objet=$_POST['objet']; 
								$message=$_POST['message']; 

								/*echo $nom;
								echo $mail;
								echo $objet;
								echo $message;*/

								if ($nom != '' || $mail != '' || $objet != '' || $message != '') {
									$regex = "^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$"; 
									if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
										$return_message;
										$headers = "MIME-Version: 1.0\r\n"; 
										$headers .= "Content-type: text/plain; charset=iso-8859-1\r\n"; 
										$headers .= "From: $nom <$mail>\r\nReply-to : $nom <$mail>\nX-Mailer:PHP"; 

										$subject=$objet; 
										$destinataire="fourreau.pierre@gmail.com";
										$body=$message; 
										
										$send_mail = mail($destinataire,$subject,$body,$headers);
										echo $send_mail;
										if (send_mail) {
											$return_message = "Votre mail a été envoyé."; 

										} else { 
											$return_message = "Une erreur s'est produite."; 
										} 
									}
									else {
										$return_message = "Email incorect.";
									}
								}
								else {
									$return_message = "Veuillez remplir tous les champs.";
								}

								echo "<p align='center'>";
									echo $return_message;
									echo "<br/><br/>";
									echo "Vous allez bientôt etre redirigé vers la page d'acceuil<br>Si vous n'etes pas redirigé au bout de 5 secondes cliquez <a href='http://pierrefourreau.fr/'>ici </a>";
								echo "</p>";
								redirect("http://pierrefourreau.fr","3");  


								function redirect($url, $time=3) 
								{      
								   //On vérifie si aucun en-tete n'a deja envoyé
								   if (!headers_sent()) 
								   { 
									 header("refresh: $time;url=$url");  
									 exit; 
								   } 
								   else 
								   { 
									 echo '<meta http-equiv="refresh" content="',$time,';url=',$url,'">'; 
								   } 
								} 
								?>
							</div>
						</section>
				</div>

			<!-- Footer -->
				<section id="footer">
					<div class="container">
						<ul class="copyright">
							<li>&copy; Pierre Fourreau</li><li>Tous droits reservés</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
						</ul>
					</div>
				</section>

	</body>
</html>