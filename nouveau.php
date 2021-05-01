<!DOCTYPE html>

<html>
	<head>

	</head>

	<body>
		<?php
			include 'date.php';
			$etatcivil	= $_POST['etatcivil'];
			$prenom		= $_POST['prenom'];
			$nom		= $_POST['nom'];
			$tel		= $_POST['tel'];
			$login		= $_POST['login'];
			$pswd		= $_POST['pswd'];
			$login_trouve = false;
			$fp = fopen("login.csv","r+");  // R & W, pointe début du fichier.
			while(!feof($fp))  {  
				$pers = fgets($fp); // copie toute la ligne jusqu'au CRLF
				$P = explode(";", $pers); // récupére les infos séparées par le ;
				$Login 		= $P[0];
				if(strcmp($login, $Login)== 0 ) { // =0, si les chaines sont identiques
					$login_trouve = true;   break;  // on quitte la boucle car on a trouvé le bon login
				} 
			}

			if($login_trouve == true)  
				echo "Ce login: $login existe dejà : Pour revenir à l'inscription <a href=\"connexion.php\">Cliquez ici<\a>";
			else   { 
				echo "Nous sommes le ",$jour, " et il est ",$heure,"<br> Bonjour $etatcivil $nom ",'<br>';
				$chaine = "\r\n$login;$pswd;$etatcivil;$prenom;$nom;$tel;$jour;$heure";
				fwrite($fp,$chaine);
			}
			fclose($fp);
		?>
	</body>
</html>
