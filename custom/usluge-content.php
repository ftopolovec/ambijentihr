<?php
	global $post;
	if($post->ID == '10' ){
?>
<?php 
	$mypages = get_pages( array( 'child_of' => 10, 'sort_column' => 'post_date', 'sort_order' => 'asc' ) ); 
?>
<ul class="post-list-page">
<?php foreach( $mypages as $page ) { ?>
	<li>
		<h2><a href="<?php echo get_page_link( $page->ID ); ?>"><?php echo $page->post_title; ?></a></h2>
		<?php the_field( "uvodni_tekst", $page->ID );?>
	</li>
<?php }	?>
</ul>
<?php
	} elseif($post->ID == '11725') { ?>
		<ul class="gallery-cat">
			<?php 
			$gallerypages = get_pages( array( 'child_of' => 11725, 'sort_column' => 'post_date', 'sort_order' => 'asc' ) ); 
			foreach ( $gallerypages as $gallerypage ) {
				$attachment_id = get_post_thumbnail_id( $gallerypage->ID );
				$image_attributes = wp_get_attachment_image_src( $attachment_id, 'full' );
					if( $image_attributes ) {
					?>	
						<li>
							<h2><a href="<?php echo $gallerypage->post_name; ?>"><?= $gallerypage->post_title ?></a></h2>
							<a href="<?php echo $gallerypage->post_name; ?>" title="<?php echo $gallerypage->post_title; ?>">
								<img src="<?php echo $image_attributes[0]; ?>" width="222" height="auto">
							</a>
						</li>
				<?php }
			} ?>
		</ul>
<?php
	 } elseif ($post->ID == '11734') { ?>
			<?php 
				$mypages = get_pages( array( 'child_of' => 11734, 'sort_column' => 'post_date', 'sort_order' => 'asc' ) ); 
			?>
			<ul class="post-list-page">
			<?php foreach( $mypages as $page ) { ?>
				<li>
					<h2><a href="<?php echo get_page_link( $page->ID ); ?>"><?php echo $page->post_title; ?></a></h2>
					<?php the_field( "uvodni_tekst", $page->ID );?>
				</li>
			<?php }	?>
			</ul>
<?php }?>