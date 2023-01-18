<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="CRISARTECH">

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

<div class="container about">
	<h2 class="titre titrecenter gras"><?php echo _('Mentions légales'); ?></h2>
	<p><br>
    <?php echo _('Les informations, caractéristiques techniques, et prix contenus dans ce site sont donnés à titre indicatif,
    sous la responsabilité de son gérant Christophe MARQUES.<br>
    Ils n\'ont aucune valeur contractuelle et CRISARTECH se réserve le droit de les modifier sans préavis.<br>
    CRISARTECH est une S.A.R.L. au capital variable de 15 000€ minimum.<br>
    RCS de MONTAUBAN n° 477 640 387 (2004 B 265) - SIRET : 477 640 387 00015 - Code TVA : FR 22 477 640 387 - Code APE : 62.01Z<br>
	Adresse du siège social : 161 chemin du ROC - 82300 MONTEILS - FRANCE<br><br>
	Site hébergé par Online SAS - BP 438 - 75366 Paris CEDEX 08'); ?>
	</p>
</div>

</body>

<?php include 'pied_p.php'; // intégration du pied de page ?>

<a href="#page-top" class="cd-top">Top</a>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/modernizr.js"></script>
<script src="js/script.js"></script>

</html>