<?php include(dirname(__FILE__).'/header.php'); ?>

<section>

	<div id="container">

		<div class="width-sidebar">

			<div class="directory">
				<span>
					<strong><?php $plxShow->tagName(); ?></strong>
				</span>
			</div>

			<?php while($plxShow->plxMotor->plxRecord_arts->loop()): ?>

			<article role="article" id="post-<?php echo $plxShow->artId(); ?>">

				<header>
					<h1>
						<?php $plxShow->artTitle('link'); ?>
					</h1>
					<p>
						<?php $plxShow->lang('WRITTEN_BY'); ?> <?php $plxShow->artAuthor() ?> -
						<time datetime="<?php $plxShow->artDate('#num_year(4)-#num_month-#num_day'); ?>"><?php $plxShow->artDate('#num_day #month #num_year(4)'); ?> /</time>
						<?php $plxShow->artNbCom(); ?>
					</p>
                    <div class="share-icons">
                        <a class="flattr" onclick="window.open(this.href);return false;" title="Flattr !" href="https://flattr.com/submit/auto?user_id=P3ter&url=<?php $plxShow->artUrl(); ?>&title=<?php $plxShow->artTitle(); ?>&description=<?php $plxShow->mainTitle(); ?>&language=fr_FR&tags=blog&category=text" rel="nofollow"><img src="<?php $plxShow->template(); ?>/img/simple-icons-master/icons/flattr/flattr-32.png" alt="Flattr" /></a>
                        <a class="twitter" onclick="window.open(this.href);return false;" title="Twitter" href="https://twitter.com/share?url=<?php $plxShow->artUrl(); ?>&text=<?php $plxShow->artTitle(); ?>&via=P3terFr" rel="nofollow" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=400,width=700');return false;"><img src="<?php $plxShow->template(); ?>/img/simple-icons-master/icons/twitter/twitter-32.png" alt="Twitter" /></a>
                        <a class="facebook" onclick="window.open(this.href);return false;" title="Facebook" href="https://www.facebook.com/sharer.php?u=<?php $plxShow->artUrl(); ?>&t=<?php $plxShow->artTitle(); ?>" rel="nofollow" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=500,width=700');return false;"><img src="<?php $plxShow->template(); ?>/img/simple-icons-master/icons/facebook/facebook-32.png" alt="Facebook" /></a>
                        <a class="googleplus" onclick="window.open(this.href);return false;" title="Google +" href="https://plus.google.com/share?url=<?php $plxShow->artUrl(); ?>&hl=fr" rel="nofollow" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=450,width=650');return false;"><img src="<?php $plxShow->template(); ?>/img/simple-icons-master/icons/googleplus/googleplus-32.png" alt="Google Plus" /></a>
                    </div>
				</header>

				<section>
					<?php $plxShow->artChapo(); ?>
				</section>

				<footer>
					<p>
						<?php $plxShow->lang('CLASSIFIED_IN') ?> : <?php $plxShow->artCat(); ?> /
						<?php $plxShow->lang('TAGS') ?> : <?php $plxShow->artTags(); ?>
					</p>
				</footer>

			</article>

			<?php endwhile; ?>

			<div id="pagination">
				<?php $plxShow->pagination(); ?>
			</div>

			<div class="rss">
				<?php $plxShow->tagFeed() ?>
			</div>

		</div>

		<?php include(dirname(__FILE__).'/sidebar.php'); ?>

	</div>

</section>

<?php include(dirname(__FILE__).'/footer.php'); ?>
