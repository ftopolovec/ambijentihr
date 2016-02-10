<?php 
	$mypages = get_pages( array( 'child_of' => 10, 'sort_column' => 'post_date', 'sort_order' => 'desc' ) ); 
?>
<p>
<?php foreach( $mypages as $page ) { ?>
	<h2><a href="<?php echo get_page_link( $page->ID ); ?>"><?php echo $page->post_title; ?></a></h2>

<?php }	?>
</p>