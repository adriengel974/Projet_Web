<?php
include 'date.php';
$etatcivil	= $_POST['etatcivil'];
$prenom		= $_POST['prenom'];
$nom		= $_POST['nom'];
$tel		= $_POST['tel'];
$login		= $_POST['login'];
$pswd		= $_POST['pswd'];
$login_trouve = false;
$fp = fopen("login.csv","r+");  // R & W, pointe d�but du fichier.
while(!feof($fp))  {  
	$pers = fgets($fp); // copie toute la ligne jusqu'au CRLF
	$P = explode(";", $pers); // r�cup�re les infos s�par�es par le ;
	$Login 		= $P[0];
	if(strcmp($login, $Login)== 0 ) { // =0, si les cha�nes sont identiques
		$login_trouve = true;   break;  // on quitte la boucle car on a trouv� le bon login
	} 
}
if($login_trouve == true)  
	echo "Ce login: $login existe dej� : Pour revenir � l'inscription <a href=\"index.html\">Cliquez ici<\a>";
else   { 
	echo "Nous sommes le ",$jour, " et il est ",$heure,"<br> Bonjour $etatcivil $nom ",'<br>';
	$chaine = "\r\n$login;$pswd;$etatcivil;$prenom;$nom;$tel;$jour;$heure";
	fwrite($fp,$chaine);
}
fclose($fp);
?>