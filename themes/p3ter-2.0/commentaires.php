<?php if(!defined('PLX_ROOT')) exit; ?>

    <?php if($plxShow->plxMotor->plxRecord_arts->f('allow_com') AND $plxShow->plxMotor->aConf['allow_com']): ?>

    <div id="form">

        <h2>
    		<?php $plxShow->lang('WRITE_A_COMMENT') ?>
		</h2>

		<form action="<?php $plxShow->artUrl(); ?>#form" method="post">
			<fieldset>
                <p>
					<label for="id_content" class="lab_com"><?php $plxShow->lang('COMMENT') ?> :</label>
					<textarea id="id_content" name="content" cols="35" rows="6"><?php $plxShow->comGet('content',''); ?></textarea>
				</p>
                <p>
					<label for="id_name"><?php $plxShow->lang('NAME') ?> :</label>
					<input id="id_name" name="name" type="text" size="20" value="<?php $plxShow->comGet('name',''); ?>" maxlength="30" />
					<label for="id_site"><?php $plxShow->lang('WEBSITE') ?> :</label>
					<input id="id_site" name="site" type="text" size="20" value="<?php $plxShow->comGet('site',''); ?>" />
					<label for="id_mail"><?php $plxShow->lang('EMAIL') ?> :</label>
					<input id="id_mail" name="mail" type="text" size="20" value="<?php $plxShow->comGet('mail',''); ?>" />
				</p>
				<p class="com-alert">
					<?php $plxShow->comMessage(); ?>
				</p>
				<?php if($plxShow->plxMotor->aConf['capcha']): ?>
				<p>
					<label for="id_rep"><?php echo $plxShow->lang('ANTISPAM_WARNING') ?></label>
					<?php $plxShow->capchaQ(); ?> :
					<input id="id_rep" name="rep" type="text" size="2" maxlength="1" />
				</p>
				<?php endif; ?>
				<p>
					<input type="submit" value="<?php $plxShow->lang('SEND') ?>" />
				</p>
			</fieldset>
		</form>

	</div>

	<?php else: ?>

		<p>
			<?php $plxShow->lang('COMMENTS_CLOSED') ?>.
		</p>

	<?php endif; # Fin du if sur l'autorisation des commentaires ?>
    
    <?php if($plxShow->plxMotor->plxRecord_coms): ?>

    <div class="rss">
		<?php $plxShow->comFeed('rss',$plxShow->artId()); ?>
	</div>

	<div id="comments">

		<h2>
			<?php echo $plxShow->artNbCom(); ?>
		</h2>

		<?php while($plxShow->plxMotor->plxRecord_coms->loop()): # On boucle sur les commentaires ?>

		<div id="<?php $plxShow->comId(); ?>">
			<blockquote>
				<img class="" alt="Gravatar" src="http://www.gravatar.com/avatar.php?gravatar_id=<?php echo md5( strtolower($plxShow->plxMotor->plxRecord_coms->f('mail')) ) ?>&amp;d=http://0.gravatar.com/avatar/29a258fbb2d69d21b675424f7bf8ae90?s=48&amp;d=http%3A%2F%2F0.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D48&amp;r=X" height='52' width='52' />
                <div class="comment">
                <div class="info_comment"><a class="num-com" href="<?php $plxShow->ComUrl(); ?>" title="#<?php echo $plxShow->plxMotor->plxRecord_coms->i+1 ?>">#<?php echo $plxShow->plxMotor->plxRecord_coms->i+1 ?></a> <?php $plxShow->comDate('#day #num_day #month #num_year(4) &#64; #hour:#minute'); ?> <?php $plxShow->comAuthor('link'); ?> <?php $plxShow->lang('SAID'); ?> : </div>
				<div class="content_com type-<?php $plxShow->comType(); ?>"><?php $plxShow->comContent(); ?></div>
                </div>
			</blockquote>
		</div>

		<?php endwhile; # Fin de la boucle sur les commentaires ?>

	</div>

	<?php endif; ?>
