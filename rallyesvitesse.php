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
							<img src="img/rallye_var.jpg" alt="slide">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<!-- contenu de la page -->
<div class="container about">
			<p>
			<span class="violet">CRISARTECH </span><?php echo _('vous propose un ordinateur de bord pour co-pilote de rallye permettant de comparer différents runs d\'une même spéciale :
			<br>
			- un <span class="violet titrecenter">écran couleur</span> pour une meilleure lisibilité<br>
			- un <span class="violet titrecenter">écran tactile </span> pour une prise en main très intuitive <br>
			- un <span class="violet titrecenter">lecteur de clefs USB </span>pour faciliter les échanges de fichiers et les mises à jour'); ?></span><br><br>
		</p>
	</div>
</div>
<div class="container about">
	<h3 class="titre titrecenter gras"><?php echo _('Les fonctionnalités sont en cours de validation par des co-pilotes renommés'); ?></h3>
		<p>
			<br>



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