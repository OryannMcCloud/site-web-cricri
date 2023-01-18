<footer>
<?php
	$lang = $_GET['lang'];
	if(!isset($lang)){$lang = "fr_FR";}
?>

<!-- ligne de séparation -->
<div class="ligne"></div>
<br><br>

<!-- logos youtube et facebook -->
<section id="brand">
<!--		<div class="container">
			<div class="row">
				<div class="col-md-12">
				   <ul class="logo-list list-inline text-center marge-bas logo-margin">
				    <li><a href="https://www.youtube.com/user/CRISARTECH" target="_blank"><img src="img/logos/yt.png" alt="Youtube channel logo"/></a><?php echo _('Démonstrations et tutoriels'); ?></li>
					<li><a href="https://www.facebook.com/CM.CRISARTECH/" target="_blank"><img src="img/logos/fb.png" alt="Facebook page logo"/></a><?php echo _('Actualité'); ?></li>
				  </ul>
				</div>
			</div>
		</div> -->
	<center><B>
		<a href="https://www.youtube.com/user/CRISARTECH" target="_blank"><img src="img/logos/yt.png" alt="Youtube channel logo"/></a><?php echo _('Démonstrations et tutoriels'); ?>
		<a href="https://www.facebook.com/CM.CRISARTECH/" target="_blank"><img src="img/logos/fb.png" alt="Facebook page logo"/></a><?php echo _('Actualité'); ?>
	</B></center>
</section>

<!-- bouton mentions légales -->
<p class="imgcenter">© CRISARTECH <?php echo _('depuis 1999... déjà plus de 20 ans !'); ?></p>
<div class="mentionslegales"><?php echo "<a href=\"mentions-legales.php?lang=$lang\">"._('MENTIONS LEGALES')."</a>"; ?></div>
</footer>


