<?php //login;pswd;EtatCivil;prenom;nom;tel;date;heure;CRLF
	include 'date.php';
	$login_correct = false;
	$login	=$_POST['login'];
	$pswd	=$_POST['pswd'];
	$fp = fopen("login.csv","r"); // ouverture en début de fichier et lecture seule
	echo "Nous sommes le $jour, il est $heure<br>";
	while (!feof($fp)) {
		$pers = fgets($fp); // copie toute la ligne jusqu'au CRLF
		$P = explode(";", $pers); // récupère les infos séparées par le ;
		$Login 	= $P[0];
		$Pswd 		= $P[1]; 
		$Etatcivil	= $P[2];
		$Prenom 	= $P[3]; 
		$Nom 		= $P[4]; 
		$Tel 		= $P[5]; 
		$Date 		= $P[6]; 
		$Heure 	= $P[7];
		if(strcmp($login, $Login)== 0 ) { // =0, si les chaînes sont identiques
			$login_correct = true;   break;  // on quitte la boucle car on a trouvé le bon login
		} 
	}
	if($login_correct == true)  {
		echo "<br>",$Login, " est un login correct";
		if(strcmp($Pswd,$pswd) == 0 ) //  =0, si les chaînes sont identiques, vérification du Mot de passe
		{	echo "<br>Bonjour $Etatcivil $Prenom $Nom, bienvenu sur notre site réservé.";
			echo "<br>Vous vous êtes inscrit le $Date à $Heure",'<br\>';
		}
		else echo "<br\>Mot de passe incorrect";  
	}
	else	echo "<br\>$login est un login incorrect";
	fclose( $fp );
?>