
<?php
	global $post;
	if($post->post_parent == '10' ){
?>
	<?php 
		$mypages = get_pages( array( 'child_of' => 10, 'sort_column' => 'post_date', 'sort_order' => 'asc' ) ); 
	?>
	<ul class="right-nav-pages">
	<?php foreach( $mypages as $page ) { ?>
		<li <?php if(is_page($page->ID)){echo 'class= "current-sidemenu-item"';} ?>><a href="<?php echo get_page_link( $page->ID ); ?>"><?php echo $page->post_title; ?></a></li>
	<?php }	?>
	</ul>
<?php
}elseif ($post->post_parent == '11725') {
?>
	<?php 
		$mypages = get_pages( array( 'child_of' => 11725, 'sort_column' => 'post_date', 'sort_order' => 'asc' ) ); 
	?>
	<ul class="right-nav-pages">
	<?php foreach( $mypages as $page ) { ?>
		<li <?php if(is_page($page->ID)){echo 'class= "current-sidemenu-item"';} ?>><a href="<?php echo get_page_link( $page->ID ); ?>"><?php echo $page->post_title; ?></a></li>
	<?php }	?>
	</ul>
<?php
}elseif (is_page(8)) {
?>
	<div class="border-left">
	<h3>CERTIFIKATI</h3>
	[imageframe lightbox="yes" lightbox_image="" style_type="none" hover_type="none" bordercolor="" bordersize="0px" borderradius="0" stylecolor="" align="none" link="" linktarget="_self" animation_type="fade" animation_direction="right" animation_speed="0.3" animation_offset="" hide_on_mobile="no" class="" id=""] <img alt="Certifikat - AMBIJENTI d.o.o." class="img-shadow" src="http://localhost/ambijentihr/wp-content/uploads/2016/02/certifikat-ambijent-2015.jpg" />[/imageframe]
	</div>
<?php
}elseif ($post->post_parent == '11734') {
?>
	<?php 
		$mypages = get_pages( array( 'child_of' => 11734, 'sort_column' => 'post_date', 'sort_order' => 'asc' ) ); 
	?>
	<ul class="right-nav-pages">
	<?php foreach( $mypages as $page ) { ?>
		<li <?php if(is_page($page->ID)){echo 'class= "current-sidemenu-item"';} ?>><a href="<?php echo get_page_link( $page->ID ); ?>"><?php echo $page->post_title; ?></a></li>
	<?php }	?>
	</ul>

<?php
	}else {
?>
<div class="border-left">
	<ul class="usluge-list-sidebar">
		<li><b>HORTIKULTURA</b></li>
		<li>Mladen Pongrac</li>
		<li>040 558 880</li>
		<li>091 889 4324</li>
		<li>mladen@ambijenti.hr</li>
	</ul>
	<ul class="usluge-list-sidebar">
		<li><b>ČIŠĆENJA</b></li>
		<li>Jadranka Novak</li>
		<li>040 558 880</li>
		<li>091 889 4324</li>
		<li>jadranka@ambijenti.hr</li>
	</ul>
	<ul class="usluge-list-sidebar">
		<li><b>UPRAVLJENJE ZGRADAMA</b></li>
		<li>Zlatko Horvat</li>
		<li>040 558 880</li>
		<li>091 889 4324</li>
		<li>zlatko@ambijenti.hr</li>
	</ul>
	<ul class="usluge-list-sidebar">
		<li><b>RASADNIK</b></li>
		<li>Ivan Novak</li>
		<li>040 558 880</li>
		<li>091 889 4324</li>
		<li>ivan@ambijenti.hr</li>
	</ul>
</div>
<?php
	}
 ?>
