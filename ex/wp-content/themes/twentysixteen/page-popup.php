<?php 
/*
  Template Name: Popup
*/
?>

<div id="closeBt">
  <a href="javascript:close();"><img src="<?php bloginfo('template_url'); ?>/img/cnt_closebt.png" width="59" height="58"></a>
</div>
<?php 
			global $wp_query;
			echo $wp_query->queried_object->post_content;
?>
