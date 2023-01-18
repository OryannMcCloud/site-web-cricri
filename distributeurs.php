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
							<img src="img/distributeurs.jpg" alt="slide">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<!-- contenu de la page -->
<div class="container about">
  	<h3 class="titre titrecenter gras"><?php echo _('Distributeurs RR420'); ?></h3>
	<div class="textalign">
	  <p>
	    <a href="https://sparacing.com/" target="_blank"><img src="img/belgium-flag.png" style="border:1px solid black;" alt="Flag"></a> <a href="https://sparacing.com/" target="_blank"><span class="violet souligne gras">Benelux : SPA RACING</span></a>
    	<br /><br />

    	<a href="https://www.vhclassics.de//" target="_blank"><img src="img/germany-flag.png" style="border:1px solid black;" alt="Flag"></a> <a href="https://www.vhclassics.de//" target="_blank"><span class="violet souligne gras">Deutschland : VH CLASSICS</span></a>
    	<br /><br />

		<a href="mailto:jmiller@wist.pl" target="_blank"><img src="img/poland-flag.png" style="border:1px solid black;" alt="Flag" border=2></a> <a href="mailto:jmiller@wist.pl" target="_blank"><span class="violet souligne gras">Polska : Jacek MILLER - jmiller@wist.pl</span></a>
		<br/><br/>
		<a href="https://saabvoyage.com/rajdy-na-regularnosc-crisartech/" target="_blank"><img src="img/poland-flag.png" style="border:1px solid black;" alt="Flag" border=2></a> <a href="https://saabvoyage.com/rajdy-na-regularnosc-crisartech/" target="_blank"><span class="violet souligne gras">Polska : SAAB VOYAGE</span></a>
		<br/><br/>
		<a href="https://classic-group.pl/" target="_blank"><img src="img/poland-flag.png" style="border:1px solid black;" alt="Flag" border=2></a> <a href="https://classic-group.pl/" target="_blank"><span class="violet souligne gras">Polska : CLASSIC-GROUP</span></a>
		<br/><br/>

		<a href="mailto:cuniclasicos@hotmail.com" target="_blank"><img src="img/spain-flag.png"style="border:1px solid black;" alt="Flag"></a> <a href="mailto:cuniclasicos@hotmail.com" target="_blank"><span class="violet souligne gras">Espa&ntilde;a : CHRONO SYSTEM CLASSIC</span></a>
		<br/><br/>

		<a href="mailto:mverini@masterdriving.it" target="_blank"><img src="img/italy-flag.png"style="border:1px solid black;" alt="Flag"></a> <a href="mailto:mverini@masterdriving.it" target="_blank"><span class="violet souligne gras">Italia : Maurizio VERINI - mverini@masterdriving.it</span></a>
	  </p>
	</div>
    <br />

	<h3 class="titre titrecenter gras"><?php echo _('Distributeurs TB400'); ?></h3>

	<div class="textalign">
	  <p>
    	<a href="http://www.jmr-motorsport.com/" target="_blank"><img src="img/spain-flag.png"style="border:1px solid black;" alt="Flag"></a> <a href="http://www.jmr-motorsport.com/" target="_blank"><span class="violet souligne gras">Espa&ntilde;a : JMR-MOTORSPORT</span></a>
	  </p>
	</div>

	<div class="textalign">
	  <p>
		<?php echo _('N\'hésitez pas à nous contacter afin de rejoindre notre équipe de distributeurs'); ?>
	  </p>
	</div>
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