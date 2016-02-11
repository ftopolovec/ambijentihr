<?php 
	$mypages = get_pages( array( 'child_of' => 10, 'sort_column' => 'post_date', 'sort_order' => 'desc' ) ); 
?>
<ul class="post-list-page">
<?php foreach( $mypages as $page ) { ?>
	<li>
		<h2><a href="<?php echo get_page_link( $page->ID ); ?>"><?php echo $page->post_title; ?></a></h2>
		<?php the_field( "uvodni_tekst", $page->ID );?>
	</li>
<?php }	?>
</ul>