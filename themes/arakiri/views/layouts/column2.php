<?php $this->beginContent('//layouts/main'); ?>

<!-- Start container left -->
<div id="container_left" >

	<?php $this->widget('FlashMessage'); ?>
	
	<?php echo $content; ?>
</div>
<!-- End container left --> 
      
<!-- Start container right -->
<div id="container_right"> 
	<!-- Start container_rt -->
	<div id="container_rt">
		<?php $this->widget('UserInfo'); ?>
	</div>
	<!-- End container_rt -->
	
	<!-- Start container_rb -->
	<div id="container_rb">
		<?php $this->widget('BarInfo'); ?>
	
		<?php $this->widget('TopPlayer'); ?>
		
		<!-- Footer image for the right container -->
		<div id="c_rb_footer"></div>
	</div>
	<!-- End container_rb -->
</div>
<!-- End container right -->

<?php $this->endContent(); ?>