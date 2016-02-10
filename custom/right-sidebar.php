<?php $mypages = get_pages( array( 'include' => array(3526, 96), 'sort_column' => 'post_date', 'sort_order' => 'desc' ) ); ?>
<ul class="right-nav-pages">
<?php	foreach( $mypages as $page ) { ?>
		<li><a href="<?php echo get_page_link( $page->ID ); ?>"><?php echo $page->post_title; ?></a></li>

<?php }	?>
</ul>