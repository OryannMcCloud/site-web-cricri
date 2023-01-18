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
							<img src="img/contact.jpg" alt="slide">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<div class="container about titrecontact">
	<h3 class="titre gras titrecenter margindown"><?php echo _('Nous contacter'); ?></h3>
</div>

<h5 class="titre titrecenter margintitle gras"><?php echo _('Adresse mail'); ?> :</h5>
<div class="imgcenter">
	<img class="imgcontact" src="img/email.png">
</div>
<h5 class="titre titrecenter margintitle gras"><?php echo _('Téléphone'); ?> :</h5>
<div class="imgcenter">
	<img src="img/tel.png">
</div>
<h5 class="titre titrecenter margintitle gras"><?php echo _('Adresse postale'); ?> :</h5>
<!--<div class="container about">-->
	<p class="textcenter">161 Chemin du ROC<br>82300 MONTEILS<br>FRANCE<br>
	<span class="gras"><?php echo _('Nous contacter avant tout retour de matériel'); ?></span></p>
<!--</div>-->
</body>

<?php include 'pied_p.php'; // intégration du pied de page ?>

<!-- flèche pour remonter la page --><a href="#page-top" class="cd-top">Top</a>

<!-- import des fichiers js -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/modernizr.js"></script>
<script src="js/script.js"></script>

</html>