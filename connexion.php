<html>
	<head>
		<title>Epicerie en ligne</title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		<style type="text/css">  th {  text-align:left; }  </style>
		<link rel="stylesheet" href="Style.css">
	</head>
	
	<body>

        <nav>

            <h1 class="nav"> <img class="navIm"> La Sublime Porte </h1>

            <div class="Centre">
               <li class="Acc">
                  <a href="Accueil.php">Accueil</a>
               </li>

               <li class="Par">
                   <a href="Categories.php">Categories</a> 
                </li>

               <li class="Comp">
                   <a href="Panier.php">Mon panier</a>
              </li>
              
               <li class="Loi">
                  <a href="connexion.php">Mon compte</a>
             </li>

              <li class="Cont">  
                 <a href="Contact.php">Contact</a>
               </li>
            </div>
        
        </nav>

	<section>
		<div class="Droit">

		<h3>Connexion :</h3>
		<form action="recherche.php" method="POST" >
		<table>
			<tr><th>Login : </th><td><input type="text" name="login"></td></tr>
			<tr><th>Mot de passe : </th><td><input type="password" name="pswd"></td></tr>
		</table>
		<br><input type="submit" name="personne" value="Connexion">
		</form>
		</div>

		<div class="Gauche">
		<h3>Inscription</h3>
		<form action="nouveau.php" method="POST" >

		<table>
			<tr><td></td><td>
			M. <input type="radio" name="etatcivil" value="M.">
			Mme <input type="radio" name="etatcivil" value="Mme">
			Mle <input type="radio" name="etatcivil" value="Mle" checked = "checked"></td></tr>
			<tr><th>Pr&eacute;nom : </th><td><input type="text" name="prenom"></td></tr>
			<tr><th>Nom : </th><td><input type="text" name="nom"></td></tr>
			<tr><th>T&eacute;l&eacute;phone : </th><td><input type="text" name="tel"></td></tr>
			<tr><th>Login : </th><td><input type="text" name="login"></td></tr>
			<tr><th>Mot de passe : </th><td><input type="password" name="pswd"></td></tr>
		</table>
		<br><input type="submit" name="personne" value="Nouveau">
		</form>
		
		</div>
	</section>

<?php require 'footer.php'; ?>