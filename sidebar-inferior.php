<?php // if (mobile_detect()==0) { ?>
<aside id="sibebar_inferior">
<?php if ( is_active_sidebar( 'sidebar-inferior' ) ) : ?>
		<ul class="listas_widget">
			<?php dynamic_sidebar( 'sidebar-inferior' ); ?>
		</ul>
<?php endif; ?>
</aside>
<?php // } ?>