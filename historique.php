<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

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
							<img src="img/rallye.jpg" alt="slide">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- contenu de la page -->
<div class="container about">
	<div class="textalign">
		<center>
			<h2 class="titre titrecenter gras"><?php echo _('Actualités, calendriers... du véhicule historique'); ?></h2>
			<a href="https://www.newsclassicracing.com/" target="_blank"><img src="img/ncr.png" style="border:1px solid black;" alt="https://www.newsclassicracing.com/"></a>
		</center>
		<br>
		<B><?php echo _('Christophe MARQUES, concepteur et testeur du RR420 nous fait partager ses comptes-rendus de rallye (uniquement en langue fran&ccedil;aise):'); ?></B><br><br>
		<center>
			<h2 class="titre titrecenter gras"><?php echo _('Rallye de régularité : Monte-Carlo Historique 2020... au pied du podium'); ?></h2>
			<div class="imgcenter"><img class="imgresize" src="img/rmch_20.jpg"></div>
			<a href="doc/CR_RMCH_20.pdf" target="_blank"><span class="violet gras souligne"><?php echo _('Compte-rendu de l\'équipage 38-SABY/MARQUES'); ?> </span></a><br><br>
			<br>

			<h2 class="titre titrecenter gras"><?php echo _('Rallye de régularité : Portugal Historique 2019'); ?></h2>
			<div class="imgcenter"><img class="imgresize" src="img/CasinoEstoril.jpg"></div>
			<a href="doc/CR_PortugalHisto_19.pdf" target="_blank"><span class="violet gras souligne"><?php echo _('Compte-rendu de l\'équipage 76-HOUY/MARQUES'); ?> </span></a><br><br>
			<br>

			<h2 class="titre titrecenter gras"><?php echo _('Rallye de régularité : Monte-Carlo Historique 2019 et les R8 à l\'honneur'); ?></h2>
			<div class="imgcenter"><img class="imgresize" src="img/rmch_19_ref.jpg"></div>
			<a href="doc/CR_RMCH_19.pdf" target="_blank"><span class="violet gras souligne"><?php echo _('Compte-rendu de l\'équipage 38-SABY/MARQUES'); ?> </span></a><br><br>
			<br>

			<h2 class="titre titrecenter gras"><?php echo _('Rallye de régularité VHRS : Tour de Corse Historique 2018'); ?></h2>
			<div class="imgcenter"><img class="imgresize" src="img/tdch_18_288_podium.jpg"></div>
			<a href="doc/CR_TDCH_18.pdf" target="_blank"><span class="violet gras souligne"><?php echo _('Compte-rendu de l\'équipage 288-VERDIELL/MARQUES'); ?> </span></a><br><br>
			<br>

			<h2 class="titre titrecenter gras"><?php echo _('Rallye de régularité : Monte-Carlo Historique 2017'); ?></h2>
			<div class="imgcenter"><img class="imgresize" src="img/rmch_17.jpg"></div>
			<a href="doc/CR_RMCH_17.pdf" target="_blank"><span class="violet gras souligne"><?php echo _('Compte-rendu de l\'équipage 33-LARROQUE-MARQUES'); ?> </span></a><br><br>
			<br>

			<h2 class="titre titrecenter gras"><?php echo _('Rallye de régularité : Monte-Carlo Historique 2016'); ?></h2>
			<div class="imgcenter"><img class="imgresize" src="img/rmch_16.jpg"></div>
			<a href="doc/CR_RMCH_16.pdf" target="_blank"><span class="violet gras souligne"><?php echo _('Compte-rendu de l\'équipage 147-GRANGEON-MARQUES'); ?> </span></a><br><br>
		</center>
	</div>
</div>
</body>

<footer>
	<?php include 'pied_p.php'; // intégration du pied de page ?>
</footer>

<!-- flèche pour remonter la page --><a href="#page-top" class="cd-top">Top</a>

<!-- import des fichiers js -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/modernizr.js"></script>
<script src="js/script.js"></script>

</html>