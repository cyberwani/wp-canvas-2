<?php global $wpc2; ?>

.left-background { 
	max-width: <?php echo $wpc2['border_width']; ?>px; 
}
.site-header,
.site-content,
.site-footer {
	padding-left: <?php echo $wpc2['edge_padding']; ?>px;
	padding-right: <?php echo $wpc2['edge_padding']; ?>px;
}
.content-area {
	max-width: <?php echo $wpc2['content_width']; ?>px; 
}
.widget-area {
	max-width: <?php echo $wpc2['sidebar_width']; ?>px; 
}

<?php $x = $wpc2['content_width']; ?>
<?php $i = $wpc2['border_width']; ?>
<?php while ( $i > 992 ) : ?>
@media screen and (min-width: <?php echo $i-99; ?>px) and (max-width: <?php echo $i; ?>px) {
<?php $x -= 100; ?>
	.left-background { 
		max-width: <?php echo $i-100; ?>px; 
	}
	.content-area { 
		max-width: <?php echo $x; ?>px; 
	}
}
<?php $i -= 100; ?>
<?php endwhile; ?>

@media screen and (max-width: <?php echo $i; ?>px) {
	body .site-header,
	body .site-content,
	body .site-footer {
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
