<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="CRISARTECH">
	<meta name="description" content="Produits CRISARTECH : dashboards, cadenceurs, rally timers...">
	<meta name="keywords" content="CRISARTECH, afficheur, cadenceur, rallye régularité, tableau de bord, comp&eacute;tition, competition, tuning, ULM, moto, rallye, rallye-raid, rallye-cross, autocross, course de côte, piste, d&eacute;veloppement informatique, électronique automobile, CAN, LIN, multiplexage, dashboard, chrono, chronomètre, chronographe, stopwatch, rally timer, tripmaster, trip master, trip">

	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">

	<title>Instrumentation Automobile CRISARTECH</title>
</head>

<body>
<?php
	$lang = $_GET['lang']; // récupérer la langue dans l'url
	if(!isset($lang)){$lang = "fr_FR";} // éviter que la variable de langue ne contienne rien par défaut
	include 'i18n.php'; // internationnalisation du site
	include 'menu.php'; // intégration du menu
?>


<!-- texte de présentation -->
<section class="intro">
	<div class="container">
		<div class="row">
			<div class="col-lg-7">
				<p>

					<?php echo "<span class=\"violet\">CRISARTECH </span>"?>


					<?php echo _('conçoit et produit des systèmes d\'instrumentation pour le sport automobile depuis 1999. Nos tableaux de bord, cadenceurs de rallye de régularité, tripmasters, chronomètres sont utilisés par des équipages dans toute l\'Europe avec un accent sur l\'')."<span class=\"violet\">"._('efficacité, la qualité et la facilité d\'utilisation.'); ?>
				</p>
			</div>
		</div>
	</div>
</section>

<!-- image en haut de la page -->
<section class="slider">
	<div class="container-fluid">
		<div class="row no-gutter">
			<div class="col-lg-12">
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<img src="img/accueil.JPG" alt="slide">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- contenu de la page -->
<div class="container about">
	<div class="row">
		<div class="col-md-6">
			<h3 class="titre gras"><?php echo _('Quelle efficacité ?'); ?></h3>
			<p><br>
			<?php echo _('Lisibilité maximale des données affichées quelques soient les conditions d\'éclairage.'); ?>
			<br><br>
			<?php echo _('Affichage en temps réel des informations.'); ?>
			<br><br>
			<?php echo _('Utilisation systématique du bus multiplexé CAN pour réduire le câblage. Cela permet aussi d\'apporter des fonctions
			de diagnostic des calculateurs de contrôle moteur.'); ?>
			</p>
		</div>
		<div class="col-md-6">
			<h3 class="titre gras titre2"><?php echo _('Quelle qualité ?'); ?></h3>
			<p><br>
			<?php echo _('Les afficheurs TFT couleurs sont fabriqués en Allemagne par des équipementiers réputés pour la qualité de leur production.
			Tous les produits sont ensuite assemblés, programmés et testés dans nos locaux pour une qualité optimale.');?><br><br>
			<span class="violet"><?php echo _('- Les afficheurs TB300 sont garantis 3 ans.'); ?></span><br>
			<span class="violet"><?php echo _('- Les afficheurs RR420-RP380-TB400-TB400 Pro sont garantis 2 ans.'); ?></span><br><br>
			</p><br>
		</div>
	</div>
</div>

<div class="container about">
	<h3 class="titre gras"><?php echo _('Nos services ?'); ?></h3>
	<p><br>
	<span class="violet">CRISARTECH</span> <?php echo _('est une entreprise française qui réalise l\'étude et la conception de ses produits.'); ?><br>
	<span class="violet"><?php echo _('- CRISARTECH vous accompagne et étudie vos besoins.'); ?></span><br>
	<span class="violet"><?php echo _('- CRISARTECH est aussi un bureau d\'étude qui vous conseille et personnalise ses produits afin de vous satisfaire.
	 '); ?></span><br>
	<span class="violet"><?php echo _('- CRISARTECH vous aide à l\'installation et à la configuration du matériel...'); ?></span>
	</p>
</div><br>
<div class="container about">
	<h3 class="titre gras"><?php echo _('Démarche environnementale'); ?></h3><br>
	<span class="violet">CRISARTECH</span> <?php echo _('s\'emploie à réduire autant que possible son empreinte environnementale :'); ?><br>
	<p>
	<?php echo _('- Consommation d\'électricité renouvelable.'); ?><br>
	<?php echo _('- Limitation des déplacements.'); ?><br>
	<?php echo _('- Réduction et recyclage des déchets.'); ?><br>
	<?php echo _('- Ré-utilisation des emballages.'); ?><br>
	<?php echo _('- Utilisation de matériel reconditionné (téléphones, ordinateurs ...).'); ?><br>
	<?php echo _('- Fabrication de produits fiables, évolutifs et réparables. Une politique payante pour l\'environnement et pour nos clients.'); ?>
	</p>
	</div><br>
</body>

<?php include 'pied_p.php'; // intégration du pied de page ?>

<!-- flèche pour remonter la page --><a href="#page-top" class="cd-top">Top</a>

<!-- import des fichiers js -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/modernizr.js"></script>
<script src="js/script.js"></script>

</html>