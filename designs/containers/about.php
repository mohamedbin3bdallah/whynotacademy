<div class="row">
	<?php include("../designs/headers/profilemenu.php"); ?>
	<div class="col-md-10 <?php if($lang_file == 'ar') echo 'col-md-pull-2'; ?>">
	<h4><label><?php language('about'); ?></label></h4><br>
		<h5><label style="color:blue;"><?php language('images'); ?></label></h5>
		<?php
		$aboutimages = getAboutImages();
		if(!empty($aboutimages))
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
				<?php for($i=0;$i<sizeof($aboutimages);$i++) { ?>
					<tr id="tr-<?php echo $aboutimages[$i]['id']; ?>">
						<td>
						<?php if($aboutimages[$i]['image'] != '') { ?>
							<a href="#" data-toggle="modal" data-target="#aboutimages-<?php echo $i; ?>">
								<img class="img-responsive" src="../uploads/about/thumbnail/<?php echo $aboutimages[$i]['image']; ?>" style="width:75px;">
							</a>
							<div id="aboutimages-<?php echo $i; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<br>
        								</div>
										<div class="modal-body">
											<img src="../uploads/about/<?php echo $aboutimages[$i]['image']; ?>" class="img-responsive">
										</div>
									</div>
								</div>
							</div>
						<?php } ?>
						</td>						
						<td>
							<form enctype="multipart/form-data" method="POST" action="">
								<input type="hidden" name="oldimage" value="<?php echo $aboutimages[$i]['image']; ?>" />
								<input type="hidden" name="oldid" value="<?php echo $aboutimages[$i]['id']; ?>" />
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
		<?php } else language("nodata"); ?>
		
		<h5><label style="color:blue;"><?php language('data'); ?></label></h5>
		<?php
		$about = getAbout();
		if(!empty($about))
		{
		?>
		<div class="row">
			<div class="col-md-12">
				<div class="table-responsive">
				<table class="table table-bordered">					
					<form enctype="multipart/form-data" method="POST" action="">
					<input type="hidden" name="oldid" value="<?php echo $about['id']; ?>" />
					<th class="danger" colspan="2" style="text-align: center;">
						<h4>English</h4>
					</th>					
					<tr>
						<td><?php language('mission'); ?></td>
						<td><textarea class="form-control" name="missionen" rows="5"><?php echo $about['missionen']; ?></textarea></td>												
					</tr>
					<tr>
						<td><?php language('vision'); ?></td>
						<td><textarea class="form-control" name="visionen" rows="5"><?php echo $about['visionen']; ?></textarea></td>												
					</tr>
					
					<th class="danger" colspan="2" style="text-align: center;">
						<h4>عربي</h4>
					</th>
					<tr>
						<td><?php language('mission'); ?></td>
						<td><textarea class="form-control" name="missionar" rows="5"><?php echo $about['missionar']; ?></textarea></td>												
					</tr>
					<tr>
						<td><?php language('vision'); ?></td>
						<td><textarea class="form-control" name="visionar" rows="5"><?php echo $about['visionar']; ?></textarea></td>												
					</tr>										
					
					<tr>
						<td></td>
						<td><input type="submit" name="saveabout" value="<?php language('save'); ?>" class="btn btn-success" /></td>
					</tr>
					</form>
				</table>
				</div>
			</div>
		</div>
		<?php } else language("nodata"); ?>
	</div>
</div>