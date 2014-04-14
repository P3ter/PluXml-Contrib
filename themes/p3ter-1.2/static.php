<?php include(dirname(__FILE__).'/header.php'); ?>

	<div id="section">

		<div id="article">

			<div id="breadcrumbs">		
            	Vous êtes ici : <?php eval($plxShow->callHook('filAriane', ' &#187 ')); ?>
			</div>

			<h1><?php $plxShow->staticTitle(); ?></h1>
			<div class="static-content"><?php $plxShow->staticContent(); ?></div>

		</div>

		<?php include(dirname(__FILE__).'/sidebar.php'); ?>

	</div>

<?php include(dirname(__FILE__).'/footer.php'); ?>