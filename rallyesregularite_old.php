<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="CRISARTECH">
	<meta name="description" content="Produits CRISARTECH : dashboards, cadenceurs, rally timers...">
	<meta name="keywords" content="CRISARTECH, afficheur, cadenceur, rallye régularité, tableau de bord, comp&eacute;tition, competition, tuning, ULM, moto, rallye, rallye-raid, rallye-cross, autocross, course de côte, piste, d&eacute;veloppement informatique, électronique automobile, CAN, LIN, multiplexage, dashboard, chrono, chronomètre, chronographe, stopwatch, rally timer, tripmaster, trip master, trip">
	<title>Instrumentation automobile CRISARTECH</title>

    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

	<title>Instrumentation Automobile Crisartech</title>
</head>

<body>
<?php
	$lang = $_GET['lang']; // récupérer la langue dans l'url
	if(!isset($lang)){$lang = "fr_FR";} // éviter que la variable de langue ne contienne rien par défaut
	include 'i18n.php'; // internationnalisation du site
	include 'menu.php'; // intégration du menu
?>

<!-- image en haut de la page -->

<section class="slider">
	<div class="container-fluid">
		<div class="row no-gutter">
			<div class="col-lg-12">
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<img src="img/regularite.jpg" alt="slide">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<!-- contenu de la page -->
<div class="container about">
	<h1 class="titre titrecenter gras"><?php echo _('Tripmaster / Cadenceur RR420'); ?></h1>
	<div class="imgcenter"><img src="img/RR420_det_s.jpg"></div><br>
	<h3 class="titre titrecenter gras"><?php echo _('Le cadenceur indispensable aux équipages de rallye de régularité</h3>
	<div class="textalign">
		<p>
			<span class="violet">CRISARTECH </span>vous propose un cadenceur qui bouscule tous les codes de la discipline :
			<br>
			- un <span class="violet titrecenter">écran couleur</span> pour une meilleure lisibilité<br>
			- un <span class="violet titrecenter">écran tactile </span> pour une prise en main très intuitive <br>
			- un <span class="violet titrecenter">lecteur de clefs USB </span>pour faciliter les échanges de fichiers et les mises à jour'); ?></span><br><br>
		</p>
	</div>
</div>
<div class="container about">
	<h3 class="titre titrecenter gras"><?php echo _('Les cadenceurs compliqués, c\'est terminé !'); ?></h3>
		<p>
			<br>
			<?php echo _('<span class="violet">- mesure des distances sur deux roues, </span>avec la précision du mètre pour les capteurs de vitesse roue.
			Avec la prise OBDII jusqu\'à 1 cm de précision et mesure jusqu\'à 4 roues (suivant véhicule)<br>
			<span class="violet">- chronomètre au 1/100 seconde</span><br>
			<span class="violet">- télécommande infrarouge </span>et/ou un clavier déporté à gros boutons<br>
			<span class="violet">- boitier optionnel affichant 6 leds multicolores</span> (équivalence 18 leds)
			par reflet sur le pare-brise, en vision tête haute (HUD) comme pour les avions de chasse.
			Le pilote voit les leds sans quitter la route des yeux<br>
			<span class="violet">- installation en moins de 2 minutes </span>sur la prise OBDII d\'un véhicule de série récent
			pour l\'entrainement, les reconnaissances ou les rallyes "Energies Nouvelles"<br>
			<span class="violet">- récepteur GPS de précision </span>pour des recalages automatiques du trip plus fiables par l\'utilisation des satellites américains, russes et européens.
			La précision, de l\'ordre de 2 mètres, est comparable à un recalage manuel effectué sur table, loin des conditions réelles (nuit, brouillard, secousses...)<br>
			<span class="violet">- synchronisation automatique de son horloge </span>sur celle du GPS pour des démarrages automatiques du chrono très précis<br><br>
			Le RR420 comprend une interface pour capteurs et accessoires intégrée derrière l’afficheur.
			Télécharger le tarif ci-dessous pour en savoir plus...'); ?><br>
		</p>
			<br>
	<h3 class="titre titrecenter gras"><?php echo _('Ce cadenceur est maintenant décliné en version spéciale Rallye Raid !'); ?></h3>
			<div class="imgcenter"><img class="imgresize" src="img/RR400_Raid.jpg"></div>
		<p>
			<br>
			<?php echo _('En plus de l\'aspect régularité, la navigation est aidée par une fonction de <span class="violet">suivi de cap</span>.'); ?><br>
			<br>
		</p>
		<p>
			<?php if ($lang=='fr_FR')
					{ // afficher les documents en fonctions de la langue choisie par l'utilisateur
						echo "
								<a href=\"doc/RR400_CRISARTECH.pdf\" target=\"_blank\"><span class=\"violet souligne gras\">Plaquette commerciale RR420 à télécharger</span></a><br>
								<a href=\"doc/RR400_Raid_CRISARTECH.pdf\" target=\"_blank\"><span class=\"violet souligne gras\">Plaquette commerciale RR400 Raid à télécharger</span></a><br>
								<a href=\"doc/CatalogRegulClassic_FR_2202.pdf\" target=\"_blank\"><span class=\"violet souligne gras\">Tarifs détaillés du système RR420, avec exemples de configurations à télécharger</span></a><br>
							 ";
					}
					elseif ($lang=='en_US')
					{
						echo "
								<a href=\"doc/RR400_CRISARTECH_en.pdf\" target=\"blank\"><span class=\"violet souligne gras\">RR420 flyer to download</span></a><br>
								<a href=\"doc/RR400_Raid_CRISARTECH_en.pdf\" target=\"_blank\"><span class=\"violet souligne gras\">RR400 Raid flyer to download</span></a><br>
								<a href=\"doc/CatalogRegulClassic_EN_2202.pdf\" target=\"_blank\"><span class=\"violet souligne gras\">Detailed rates for RR420 system, with configurations examples to download</span></a><br>
							 ";
					}
					elseif ($lang=='es_ES')
					{
						echo "
								<a href=\"doc/RR400_CRISARTECH_es.pdf\" target=\"blank\"><span class=\"violet souligne gras\">Folleto comercial RR420 para descargar</span></a><br>
								<a href=\"doc/RR400_Raid_CRISARTECH_es.pdf\" target=\"blank\"><span class=\"violet souligne gras\">Folleto comercial RR400 Raid para descargar</span></a><br>
								<a href=\"doc/CatalogRegulClassic_ES_2202.pdf\" target=\"_blank\"><span class=\"violet souligne gras\">Tarifas detalladas para el sistema RR420, con ejemplos de configuraciones para descargar</span></a><br>
							 ";
					}
					elseif ($lang=='it_IT')
					{
						echo "
								<a href=\"doc/RR400_CRISARTECH_Ita.pdf\" target=\"blank\"><span class=\"violet souligne gras\">Brochure commerciale RR420 da scaricare</span></a><br>
								<a href=\"doc/RR400_Raid_CRISARTECH_Ita.pdf\" target=\"blank\"><span class=\"violet souligne gras\">Brochure commerciale RR400 Raid da scaricare</span></a><br>
								<a href=\"doc/CatalogRegulClassic_IT_2202.pdf\" target=\"_blank\"><span class=\"violet souligne gras\">Tariffe dettagliate per il sistema RR420, con esempi di configurazioni da scaricare </span></a><br>
							 ";
					}
					else
					{
						echo "
								<a href=\"doc/RR400_CRISARTECH.pdf\" target=\"_blank\"><span class=\"violet souligne gras\">Plaquette commerciale RR420 à télécharger</span></a><br>
								<a href=\"doc/RR400_Raid_CRISARTECH.pdf\" target=\"_blank\"><span class=\"violet souligne gras\">Plaquette commerciale RR400 Raid à télécharger</span></a><br>
								<a href=\"doc/CatalogRegulClassic_FR_2202.pdf\" target=\"_blank\"><span class=\"violet souligne gras\">Tarifs détaillés du système RR420, avec exemples de configurations à télécharger</span></a><br>
							 ";
						echo "
								<a href=\"doc/RR400_CRISARTECH_en.pdf\" target=\"blank\"><span class=\"violet souligne gras\">RR420 flyer to download</span></a><br>
								<a href=\"doc/RR400_Raid_CRISARTECH_en.pdf\" target=\"_blank\"><span class=\"violet souligne gras\">RR400 Raid flyer to download</span></a><br>
								<a href=\"doc/CatalogRegulClassic_EN_2202.pdf\" target=\"_blank\"><span class=\"violet souligne gras\">Detailed rates for RR420 system, with configurations examples to download</span></a><br>
							 ";
					} ?>
		</p>
</div>

</body>

<?php include 'pied_p.php'; // intégration du pied de page ?>

<!-- flèche pour remonter la page --><a href="#page-top" class="cd-top">Top</a>

<!-- import des fichier js -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/modernizr.js"></script>
<script src="js/script.js"></script>

</html>