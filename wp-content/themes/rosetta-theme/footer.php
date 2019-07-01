</div> <!-- Aquí cierra el main-wrap -->

<?php if(true): ?>

<!-- <div class="footer__bg" style="background-image: url(<?php echo THEMEURL ?>images/bg/5.png);"> -->

	<footer class="footer">
		<img class="footer__logo" src="<?php echo THEMEURL ?>images/logo/logo-footer-verde.svg" alt="" />

        <?php if(!is_page('politica-privacidad')): ?>
			<h1 class="aviso-link">
				<a href="<?php echo get_page_link(get_page_by_path('politica-privacidad')); ?>">
					<?php echo get_the_title(get_page_by_path( 'politica-privacidad' )) ?>
				</a>
			</h1>
		<?php endif; ?>
	</footer>

<!-- </div> -->

<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script>

<script type='text/javascript'>
	(function($) {
		window.fnames = new Array();
		window.ftypes = new Array();
		fnames[0]='EMAIL';
		ftypes[0]='email';
	}(jQuery));

	var $mcj = jQuery.noConflict(true);
</script>

<?php endif; ?>

<?php wp_footer(); ?>

</body>
</html>
