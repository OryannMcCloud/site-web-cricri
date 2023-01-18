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
							<img src="img/trip.jpg" alt="slide">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<!-- contenu de la page -->
<div class="container about">
	<h1 class="titre titrecenter gras"><?php echo _('Tripmaster'); ?></h1>
	<div class="imgcenter"><img src="img/RR420_det_s.jpg"></div><br>
	<h3 class="titre titrecenter gras"><?php echo _('</h3>
	<div class="textalign">
		<p>
			<span class="violet">CRISARTECH </span>vous propose une nouvelle gamme de Tripmaster pour différentes utilisations reprenant les qualités reconnues du RR420.
			<br>
			- un <span class="violet titrecenter">écran couleur</span> pour une meilleure lisibilité<br>
			- un <span class="violet titrecenter">écran tactile </span> pour une prise en main très intuitive <br>
			- <span class="violet titrecenter"> trois compteurs kilométriques </span> indépendants <br>
			- un <span class="violet titrecenter">chronomètre </span> <br>
			- une<span class="violet titrecenter"> horloge </span>synchronisée automatiquement sur celle du GPS <br>
			- une<span class="violet titrecenter"> gestion des contrôles horaires </span> avec calcul des moyennes à tenir<br>
			- un<span class="violet titrecenter"> étalonnage simple et rapide </span> pouvant être affiné en début de rallye<br>
			- une <span class="violet titrecenter"> correction des distances </span> par méthode classique "Figer/Corriger"<br>
			- une<span class="violet titrecenter"> saisie des distances </span> du road-book à l\'avance permettant d\'avoir un décompte jusqu\'au point de repère ( méthode plus efficace)<br>
			- un <span class="violet titrecenter">lecteur de clefs USB </span>pour les mises à jour'); ?></span><br><br>
		</p>
	</div>
</div>
<div class="container about">
	<h3 class="titre titrecenter gras"><?php echo _('Nos Tripmasters peuvent évoluer vers nos cadenceurs RR400/420 <br> lors du passage aux rallyes de régularité !'); ?></h3>
		<p>
			<br>
			<?php echo _('Cette gamme de Tripmaster se décline de la façon suivante :'); ?><br>
			<br>
			<?php echo _('<span class="violet">TG400 </span><br>
			- <span class="violet titrecenter"> mesures par GPS </span> avec une précision de l\'ordre de 2 m par km grâce à l\'utilisation simultanée des satellites américains, russes et européens <br>
			-<span class="violet"> plus besoin d\'installer de capteurs !</span> Idéal pour préserver votre véhicule historique<br><br>

			<span class="violet">TO400 </span><br>
			-<span class="violet"> topomètre, odomètre </span> pour professionnels de la route avec mesure de surface<br>
			-<span class="violet"> branchement rapide </span>sur prise de diagnostic (OBD) des véhicules récents<br>
			-<span class="violet"> précision garantie </span> de 10 cm sur les véhicules du groupe PSA et Fiat, nous consulter pour les autres véhicules<br><br>

			<span class="violet">TR420 </span><br>
			Fonctionnalités du TG400 et TO400 plus les fonctions avancées suivantes :<br>
			-<span class="violet"> mesure </span> des distances sur 2 roues à l\'aide de capteurs 2 ou 3 fils (compatible avec la plupart des capteurs du marché)<br>
			-<span class="violet"> télécommande infrarouge </span>pour saisie anticipée très rapide des distances<br><br>'); ?>



			<?php echo _('Télécharger les documents ci-dessous pour en savoir plus...'); ?><br>

			<?php  if ($lang=='fr_FR')
					{ // afficher les documents en fonctions de la langue choisie par l'utilisateur
						echo "<a href=\"doc/TO400_CRISARTECH.pdf\" target=\"_blank\"><span class=\"violet souligne gras\">Plaquette commerciale TO400 à télécharger</span></a><br>
						</span></a><br>";
					}
					elseif ($lang=='en_US')
					{
						echo "<a href=\"doc/TO400_En_CRISARTECH.pdf\" target=\"blank\"><span class=\"violet souligne gras\">TO400 flyer to download</span></a><br>
						</span></a><br>";
					}
					elseif ($lang=='es_ES')
					{
						echo "<a href=\"doc/TO400_Es_CRISARTECH.pdf\" target=\"blank\"><span class=\"violet souligne gras\">Folleto de ventas TO400 para descargar</span></a><br>
						</span></a><br>";
					}
					elseif ($lang=='it_IT')
					{
						echo "<a href=\"doc/TO400_It_CRISARTECH.pdf\" target=\"blank\"><span class=\"violet souligne gras\">Brochure di vendita TO400 da scaricare</span></a><br>
						</span></a><br>";
					}

			?>
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