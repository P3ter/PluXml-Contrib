<?php if(!defined('PLX_ROOT')) exit; ?>

	<div id="footer">
		<ul>
			<?php $plxShow->staticList('Accueil','<li id="#static_id" class="#static_status"><a href="#static_url" title="#static_name">#static_name</a></li>'); ?>
		</ul>

		<p>&copy; <?php $plxShow->mainTitle('link'); ?> -
                        <?php $plxShow->lang('POWERED_BY') ?> <a href="http://pluxml.org" title="<?php $plxShow->lang('PLUXML_DESCRIPTION') ?>">PluXml</a>
			<?php $plxShow->lang('IN') ?> <?php $plxShow->chrono(); ?>
			<?php $plxShow->httpEncoding() ?>
			- <a href="http://github.com/P3ter/P3ter.fr" title="Theme by P3ter" target="_blank">Theme by P3ter</a>
			<a rel="license" href="http://creativecommons.org/licenses/by/3.0/fr/" target="_blank"><img src="http://i.creativecommons.org/l/by/3.0/80x15.png"></a>
		</p>

	</div>

</body>
</html>