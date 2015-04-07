

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="Keywords" content="Curriculum, curriculum, Vitae, vitae, curriculum vitae, R�sum�, resume, Pierre, Fourreau, Pierre Fourreau, d�veloppeur, informatique">
<meta name="Author" content="Pierre Fourreau, fourreau.pierre@gmail.com">
<meta name="Identifier-URL" content="fourreau.pierre@gmail.com">
<meta name="Publisher" content="Fourreau Pierre">

<title>Pierre Fourreau</title>
<link href="styles.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" charset="utf-8" />

<link rel="icon" type="image/png" href="images/fav.ico" />

<link href='http://fonts.googleapis.com/css?family=Bree+Serif' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

<script type='text/javascript' src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js?ver=3.3"></script>	
<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>

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
<div id="header">
	<div id="logo"><a href="#"><img src="images/logo.png"></a></div>
	<ul id="main-menu">
    	<li><a href="#about">A propos</a></li>
        <li><a href="#experience">Experiences</a></li>
        <li><a href="#work">Projets</a></li>
        <li><a href="#connect">Contact</a></li>
    </ul>
</div>

<div id="container">

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
			$return_message = "Votre mail a été envoyé"; 

		} else { 
			$return_message = "Une erreur s'est produite"; 
		} 
	}
	else {
		$return_message = "Email incorect.";
	}
}
else {
	$return_message = "Veuillez remplir tous les champs.";
}

echo "<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><p align='center'>";
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
</body>
</html>