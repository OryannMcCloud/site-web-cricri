<!-- barre du haut -->
<div class="barre">
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<div class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-menu">
					<span class="bar1"></span>
					<span class="bar2"></span>
					<span class="bar3"></span>
			  	</div>
				<a class="navbar-brand top">
					<img class="logoresize logo" src="img/logos/logo.png" alt="">
				</a>
			</div>

			<div class="collapse navbar-collapse" id="main-menu">
			   <ul class="nav navbar-nav navbar-right">
				<li><?php echo "<a href=\"index.php?lang=$lang\">"._('Accueil')."</a>"; ?></li>
				<li><?php echo "<a href=\"tripmaster.php?lang=$lang\">"._('Tripmaster')."</a>"; ?></li>
				<li><?php echo "<a href=\"rallyesregularite.php?lang=$lang\">"._('Rallyes Régularité')."</a>"; ?></li>
				<li><?php echo "<a href=\"rallyesvitesse.php?lang=$lang\">"._('Rallyes Vitesse')."</a>"; ?></li>
				<li><?php echo "<a href=\"dashboard.php?lang=$lang\">"._('Dashboard')."</a>"; ?></li>
				<li><?php echo "<a href=\"historique.php?lang=$lang\">"._('Historique')."</a>"; ?></li>
				<li><?php echo "<a href=\"distributeurs.php?lang=$lang\">"._('Distributeurs')."</a>"; ?></li>
				<li><?php echo "<a href=\"contact.php?lang=$lang\">"._('Contact')."</a>"; ?></li>

				<!-- choix de la langue -->
				<li>
					<div id="langue">
						<form>
    						<select size="1" class="langue" onChange="location = this.options[this.selectedIndex].value;">
								<option value="#"><?php echo _('Langue'); ?></option>
        						<option value="?lang=fr_FR"><?php echo _('Francais'); ?></option>
								<option value="?lang=en_US"><?php echo _('Anglais'); ?></option>
								<option value="?lang=es_ES"><?php echo _('Espagnol'); ?></option>
								<option value="?lang=it_IT"><?php echo _('Italien'); ?></option>
    						</select>
						</form>
					</div>
				</li>
			   </ul>
			</div>
		</div>
	</nav>
</div>
