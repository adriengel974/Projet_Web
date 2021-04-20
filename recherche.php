<!DOCTYPE html>

<html>
	<head>

	</head>

	<body>

		<?php //login;pswd;EtatCivil;prenom;nom;tel;date;heure;CRLF
			include 'date.php';
			$login_correct = false;
			$login	=$_POST['login'];
			$pswd	=$_POST['pswd'];
			$fp = fopen("login.csv","r"); // ouverture en d�but de fichier et lecture seule
			echo "Nous sommes le $jour, il est $heure<br>";
			while (!feof($fp)) {
				$pers = fgets($fp); // copie toute la ligne jusqu'au CRLF
				$P = explode(";", $pers); // r�cup�re les infos s�par�es par le ;
				$Login 	= $P[0];
				$Pswd 		= $P[1]; 
				$Etatcivil	= $P[2];
				$Prenom 	= $P[3]; 
				$Nom 		= $P[4]; 
				$Tel 		= $P[5]; 
				$Date 		= $P[6]; 
				$Heure 	= $P[7];
			if(strcmp($login, $Login)== 0 ) { // =0, si les cha�nes sont identiques
				$login_correct = true;   break;  // on quitte la boucle car on a trouv� le bon login
			} 
		}
			if($login_correct == true)  {
				echo "<br>",$Login, " est un login correct";
				if(strcmp($Pswd,$pswd) == 0 ) { //  =0, si les cha�nes sont identiques, v�rification du Mot de passe
					echo "<br>Bonjour $Etatcivil $Prenom $Nom, bienvenu sur notre site r�serv�.";
					echo "<br>Vous vous �tes inscrit le $Date � $Heure",'<br\>';
				} else echo "<br\>Mot de passe incorrect";  
			} else	echo "<br\>$login est un login incorrect";
	
			fclose( $fp );
		?>	
	</body>
</html>