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
							<img src="img/dash.jpg" alt="slide">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- contenu de la page -->
<div class="container about">
	<h1 class="titre titrecenter gras">Dashboard TB400 </h1><br>
	<div class="imgcenter"><img class="imgcenter" src="img/dashboard/tb400.jpg"></div>
		<div class="textalign">
			<p>
				<?php echo _('Affichage des données sur écran graphique TFT 4"3 couleur avec un très bon contraste même en plein soleil,
				enregistrement des données de roulage (mini data logger) sur disque FLASH interne et transfert automatique sur clef USB. Il est décliné en trois versions :<br>
				<span class="violet titrecenter">- TB401 : affichage de données CAN</span><br>
				<span class="violet titrecenter">- TB402 : affichage de données CAN avec écran tactile pour configuration et/ou interaction
				avec véhicule</span><br>
				<span class="violet titrecenter">- TB403 : affichage de données CAN avec écran tactile pour configuration
				et/ou interaction avec véhicule, 4 entrées, 3 sorties</span><br>'); ?>

				<?php if ($lang=='fr_FR'){ // afficher les documents en fonctions de la langue choisie par l'utilisateur
					echo "<a href=\"doc/TB400_CRISARTECH.pdf\" target=\"_blank\"><span class=\"violet souligne gras\">Documentation à télécharger en pdf</span></a><br>";
				} elseif ($lang=='en_US') {
					echo "<a href=\"doc/TB400_CRISARTECH_en.pdf\" target=\"blank\"><span class=\"violet souligne gras\">TB400 flyer to download</span></a><br>";
				} ?>
			</p>
		</div>
	</div>
</div>
<br>
<div class="container about">
	<h1 class="titre titrecenter gras">Dashboard TB300</h1><br>
	<div class="imgcenter"><img class="imgcenter" src="img/dashboard/tb300.jpg"></div>
		<div class="textalign">
			<p>
				<?php echo _('Modèle plus compact et léger :'); ?>
				<?php echo _('Affichage des données sur écran graphique TFT 2"8 couleur avec un très bon contraste sauf en plein soleil.<br>
				Affichage des données CAN sur plusieurs pages, en gros caractères très lisibles changeants de couleur en cas d\'alerte.'); ?><br>

				<span class="violet titrecenter"><?php echo _('- led pour signaler pré-alerte (orange fixe) et alerte (rouge clignotante),</span><br>
				<span class="violet titrecenter">- possibilité de gérer un niveau de carburant virtuel
				(le plein est diminué de la quantité injectée), suivant modèle de calculateur de contrôle moteur.</span><br>
				<span class="violet titrecenter">- compteur horaire du moteur</span><br>
				Il est entièrement configurable par son clavier et ne nécessite pas de connexion avec un ordinateur.<br>
				Ce modèle n\'est disponible que sur commande pour application spécifique.<br>
				Exemple d\'application pour gestion de moteur d\'ULM pour : <a href="https://www.ladaero.fr" target="_blank"><span class="violet souligne gras">LAD Aéro</span></a>'); ?><br>

				<?php if ($lang=='fr_FR'){ // afficher les documents en fonctions de la langue choisie par l'utilisateur
					echo "<a href=\"doc/TB300_CRISARTECH.pdf\" target=\"_blank\"><span class=\"violet souligne gras\">Documentation à télécharger en pdf</span></a><br>";
				} ?>
			</p>
		</div>
</div>
<br>
<div class="container about">
	<h1 class="titre titrecenter gras">Dashboard TB100</h1><br>
	<div class="imgcenter"><img class="imgcenter" src="img/dashboard/tb100.jpg"></div>
		<div class="textalign">
			<p>
				<?php echo _('Il a équipé de nombreux véhicules en "première monte" :<br>
				<span class="violet titrecenter">- 207 Spider, 207 RCRallye (207 R3T)</span><br>
				<span class="violet titrecenter">- Fun Cup</span><br>
				<span class="violet titrecenter">- Mitjet 1300, Hacker Hayabusa, Legends cars...</span><br>
				<span class="violet titrecenter">- Et une foultitude d\'engins variés, dans toutes disciplines, avec tous types de moteurs...</span><br>

				Modèle phare pendant de longues années, il n\'est plus fabriqué.<br>
				Il nous reste cependant de nombreuses pièces détachées permettant de vous proposer :'); ?><br>
				<span class="violet titrecenter"><?php echo _('- évolution votre TB100 en fonction de l\'évolution de votre véhicule
				(changement de moteur, calculateur, boite de vitesse...) ou de l\'achat d\'un TB100 d\'occasion</span><br>
				<span class="violet titrecenter">- réparation de votre TB100</span><br>
				<span class="violet titrecenter">- vente d\'un TB100 reconditionné en fonction des reprises et échanges que nous effectuons</span><br>
				N\'hésitez pas à nous contacter pour toute question.'); ?><br>
			</p>
		</div>
</div>
</body>

<?php include 'pied_p.php'; // intégration du pied de page ?>

<!-- flèche pour remonter la page --><a href="#page-top" class="cd-top">Top</a>

<!-- import des fichiers js -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/modernizr.js"></script>
<script src="js/script.js"></script>

</html>