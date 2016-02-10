
<?php
	if(!(is_page(10))){
?>
	<?php 
		$mypages = get_pages( array( 'child_of' => 10, 'sort_column' => 'post_date', 'sort_order' => 'desc' ) ); 
	?>
	<ul class="right-nav-pages">
	<?php foreach( $mypages as $page ) { ?>
		<li if()><a href="<?php echo get_page_link( $page->ID ); ?>"><?php echo $page->post_title; ?></a></li>

	<?php }	?>
	</ul>
<?php
	}else {
?>
	<ul class="usluge-list-sidebar">
		<li><b>HORTIKULTURA</b></li>
		<li>Mladen Pongrac</li>
		<li>040 558 880</li>
		<li>091 889 4324</li>
		<li>mladen@ambijenti.hr</li>
	</ul>
	<ul class="usluge-list-sidebar">
		<li><b>ČIŠČENJA</b></li>
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
<?php
	}
 ?>
