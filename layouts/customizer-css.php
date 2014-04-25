<?php
$site_width = get_theme_mod( 'site_width' );
$sidebar_width = get_theme_mod( 'sidebar_width' );
$edge_padding = get_theme_mod( 'edge_padding' );
$sidebar_edge_padding = get_theme_mod( 'sidebar_edge_padding' );

$content_width = $site_width - $sidebar_width - $sidebar_edge_padding - ( 2 * $edge_padding );
?>
<style type="text/css">
.site { 
	max-width: <?php echo $site_width; ?>px; 
	padding-left: <?php echo $edge_padding; ?>px;
	padding-right: <?php echo $edge_padding; ?>px;
}
.content-area { 
	max-width: <?php echo $content_width; ?>px; 
}
.widget-area { 
	max-width: <?php echo $sidebar_width; ?>px; 
}

<?php $x = $content_width; ?>
<?php $i = $site_width; ?>
<?php do { ?>
@media screen and (min-width: <?php echo $i-99; ?>px) and (max-width: <?php echo $i; ?>px) {
<?php $x -= 100; ?>
	.site { 
		max-width: <?php echo $i-100; ?>px; 
	}
	.content-area { 
		max-width: <?php echo $x; ?>px; 
	}
}
<?php $i -= 100; ?>
<?php } while ( $i > 992 ); ?>

@media screen and (max-width: <?php echo $i; ?>px) {
	body .site { 
		padding-left: 20px;
		padding-right: 20px;
	}
	body .content-area {
		max-width: none;
		float: none;
		margin: 0 auto;
	}
	body .widget-area {
		float: none;
		margin: 0 auto;
	}
}
</style>
