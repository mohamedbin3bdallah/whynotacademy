<div class="row" style="height: 19%;"></div>
<div class="row">
	<?php include("../designs/headers/profilemenu.php"); ?>
	<div class="col-md-10 <?php if($lang_file == 'ar') echo 'col-md-pull-2'; ?>">
	<h4><label><?php language('home'); ?></label></h4><br>
		<h5><label style="color:blue;"><?php language('carousel'); ?></label></h5>
		<?php
		$carousel = getCarousel();
		if(!empty($carousel))
		{
		?>
		<div class="row">
			<div class="col-md-12">
				<div class="table-responsive">
				<table class="table table-bordered">
					<tr class="danger">						
						<td><?php language('image'); ?></td>
						<td><?php language('newimage'); ?></td>
					</tr>
				<?php for($i=0;$i<sizeof($carousel);$i++) { ?>
					<tr id="tr-<?php echo $carousel[$i]['id']; ?>">
						<td>
						<?php if($carousel[$i]['image'] != '') { ?>
							<a href="#" data-toggle="modal" data-target="#carousel-<?php echo $i; ?>">
								<img class="img-responsive" src="../uploads/carousel/thumbnail/<?php echo $carousel[$i]['image']; ?>" style="width:75px;">
							</a>
							<div id="carousel-<?php echo $i; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<br>
        								</div>
										<div class="modal-body">
											<img src="../uploads/carousel/<?php echo $carousel[$i]['image']; ?>" class="img-responsive">
										</div>
									</div>
								</div>
							</div>
						<?php } ?>
						</td>						
						<td>
							<form enctype="multipart/form-data" method="POST" action="">
								<input type="hidden" name="oldimage" value="<?php echo $carousel[$i]['image']; ?>" />
								<input type="hidden" name="oldid" value="<?php echo $carousel[$i]['id']; ?>" />
								<div class="fileUpload btn btn-primary">
									<span><?php language("changeimage"); ?></span>									
									<input type="file" name="file" class="upload list-label" onchange="this.form.submit();" />
								</div>
							</form>
						</td>
					</tr>
				<?php } ?>
				</table>
				</div>
			</div>
		</div>
		<?php } else language("nocarousel"); ?>
		
		<!--
		<h5><label style="color:blue;"><?php language('carouseldata'); ?></label></h5>
		<?php
		$carouseldata = getCarouselData();
		if(!empty($carouseldata))
		{
		?>
		<div class="row">
			<div class="col-md-12">
				<div class="table-responsive">
				<table class="table table-bordered">
					<tr class="danger">						
						<td><?php language('titleen'); ?></td>
						<td><?php language('descriptionen'); ?></td>
						<td><?php language('titlear'); ?></td>
						<td><?php language('descriptionar'); ?></td>
						<td></td>
					</tr>
				<?php for($i=0;$i<sizeof($carouseldata);$i++) { ?>
					<form method="POST" action="">
					<input type="hidden" name="id" value="<?php echo $carouseldata[$i]['id']; ?>" />
					<tr id="tr-<?php echo $carouseldata[$i]['id']; ?>">
						<td><input type="text" class="form-control" name="titleen" value="<?php echo $carouseldata[$i]['titleen']; ?>" /></td>
						<td><textarea class="form-control" name="descriptionen" rows="7"><?php echo $carouseldata[$i]['descriptionen']; ?></textarea></td>
						<td><input type="text" class="form-control" name="titlear" value="<?php echo $carouseldata[$i]['titlear']; ?>" /></td>
						<td><textarea class="form-control" name="descriptionar" rows="7"><?php echo $carouseldata[$i]['descriptionar']; ?></textarea></td>
						<td><input type="submit" class="btn btn-success" name="savecarouseldata" value="<?php language('save'); ?>" /></td>
					</tr>
					</form>
				<?php } ?>
				</table>
				</div>
			</div>
		</div>
		<?php } else language("nocarouseldata"); ?>
		-->
	</div>
</div>