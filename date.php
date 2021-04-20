<?php
	date_default_timezone_set('Europe/Paris'); //(PHP 5 >= 5.1.0) Récupère le décalage horaire pour toutes les fonctions date/heure
	setlocale (LC_TIME, 'fr_FR.utf8','fra'); 
	$jour = strftime("%A %d %B %Y");
	$heure = date("H:i:s");
?>