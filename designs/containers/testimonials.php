<div class="row">
	<?php include("../designs/headers/profilemenu.php"); ?>
	<div class="col-md-8 <?php if($lang_file == 'ar') echo 'col-md-pull-4'; ?>">
	
		<h4><label><?php language('newtestimonial'); ?></label></h4>
		<div class="row">
			<div class="col-md-12">
				<div class="table-responsive">
				<form enctype="multipart/form-data" method="POST" action="">
				<?php if(isset($_GET['id'],$_GET['oldimage']) && $_GET['id'] != '') { ?><input type="hidden" name="oldid" value="<?php echo $_GET['id']; ?>" /><input type="hidden" name="oldimage" value="<?php echo $_GET['oldimage']; ?>" /> <?php } ?>
				<table class="table table-striped">
					<tr>
						<td><?php language('message'); ?></td>
						<td><textarea name="body" class="form-control"><?php if(isset($_GET['body'])) echo $_GET['body']; ?></textarea></td>
					</tr>
					<tr>
						<td><?php language('name'); ?></td>
						<td><input type="text" name="name" value="<?php if(isset($_GET['name'])) echo $_GET['name']; ?>" maxlength="100" class="form-control" required="required" /></td>
					</tr>
					<tr>
						<td><?php language('job'); ?></td>
						<td><input type="text" name="job" value="<?php if(isset($_GET['job'])) echo $_GET['job']; ?>" maxlength="100" class="form-control" required="required" /></td>
					</tr>
					<tr>
						<td><?php language('company'); ?></td>
						<td><input type="text" name="company" value="<?php if(isset($_GET['company'])) echo $_GET['company']; ?>" maxlength="100" class="form-control" required="required" /></td>
					</tr>
					<tr>
						<td><?php language('website'); ?></td>
						<td><input type="url" name="website" value="<?php if(isset($_GET['website'])) echo $_GET['website']; ?>" maxlength="100" class="form-control" required="required" /></td>
					</tr>
					<tr>
						<td><?php language('image'); ?></td>
						<td><input type="file" name="file" class="form-control" required="required" /></td>
					</tr>
					<tr>
						<td><input type="submit" name="savetestimonial" class="btn btn-info" /></td>
						<td></td>
					</tr>
				</table>
				</form>
				</div>
			</div>
		</div>
	
	<h4><label><?php language('testimonials'); ?></label></h4>
		<?php
		$testimonials = getTestimonials($startResults,$resultsPerPage);
		if(!empty($testimonials))
		{
		?>
		<div class="row">
			<div class="col-md-12">
				<div class="table-responsive">
				<table class="table table-striped">
					<tr>
						<td><?php language('message'); ?></td>
						<td><?php language('name'); ?></td>
						<td><?php language('job'); ?></td>
						<td><?php language('company'); ?></td>
						<td><?php language('website'); ?></td>
						<td><?php language('image'); ?></td>
						<td><?php language('edit'); ?></td>
						<td><?php language('delete'); ?></td>
					</tr>
				<?php for($i=0;$i<sizeof($testimonials);$i++) { ?>
					<tr id="tr-<?php echo $testimonials[$i]['id']; ?>">
						<td><?php echo $testimonials[$i]['body']; ?></td>
						<td><?php echo $testimonials[$i]['name']; ?></td>
						<td><?php echo $testimonials[$i]['job']; ?></td>
						<td><?php echo $testimonials[$i]['company']; ?></td>
						<td><?php echo $testimonials[$i]['website']; ?></td>
						<td>
						<?php if($testimonials[$i]['pic'] != '') { ?>
							<a href="#" data-toggle="modal" data-target="#testimonial-<?php echo $i; ?>">
								<img class="img-responsive" src="../uploads/testimonials/thumbnail/<?php echo $testimonials[$i]['pic']; ?>" style="width:75px;">
							</a>
							<div id="testimonial-<?php echo $i; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<br>
        								</div>
										<div class="modal-body">
											<img src="../uploads/testimonials/<?php echo $testimonials[$i]['pic']; ?>" class="img-responsive">
										</div>
									</div>
								</div>
							</div>
						<?php } ?>
						</td>
						<td><a href="testimonials.php?id=<?php echo $testimonials[$i]['id']; ?>&body=<?php echo $testimonials[$i]['body']; ?>&name=<?php echo $testimonials[$i]['name']; ?>&job=<?php echo $testimonials[$i]['job']; ?>&company=<?php echo $testimonials[$i]['company']; ?>&website=<?php echo $testimonials[$i]['website']; ?>&oldimage=<?php echo $testimonials[$i]['pic']; ?>"><i style="color:green;" class="glyphicon glyphicon-edit"></i></a></td>
						<td>
							<i id="<?php echo $testimonials[$i]['id'];?>" style="color:red;" class="testimonialdel glyphicon glyphicon-remove-circle"></i>
							<div id="testimonials-<?php echo $testimonials[$i]['id'];?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-sm">
									<div class="modal-content">
										<div class="modal-header">
											<?php language('deletetestimonialmodal'); ?>
											<br>
        								</div>
										<div class="modal-body">
										<center>
											<button class="btn btn-danger" onclick="deletetestimonial('<?php echo $testimonials[$i]['id'];?>','<?php echo $testimonials[$i]['pic'];?>')" data-dismiss="modal"><?php language('agree'); ?></button>
											<button class="btn btn-success" data-dismiss="modal" aria-hidden="true"><?php language('no'); ?></button>
										</center>
										</div>
									</div>
								</div>
							</div>
						</td>
					</tr>
				<?php } ?>
				</table>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-4<?php if($lang_file == 'ar') echo ' col-md-push-8'; ?>">
			</div>
			<div class="col-md-8<?php if($lang_file == 'ar') echo ' col-md-pull-4'; ?>">
				<nav>
					<ul class="pagination">
						<?php if($totalPages > 1) { ?><li><a href="?page=1"><?php language("first"); ?></a></li><?php } ?>
						<?php if($page > 3) { ?><li>
							<a href="?page=<?php echo $page-2; ?>" aria-label="Previous">
								<span aria-hidden="true">&laquo;</span>
							</a>
						</li><?php } ?>
						<?php if($page > 1) { ?><li><a href="?page=<?php echo $page-1; ?>"><?php echo $page-1; ?></a></li><?php } ?>
						<?php if($totalPages > 1) { ?><li><a href="?page=<?php echo $page; ?>"><?php echo $page; ?></a></li><?php } ?>
						<?php if($page < $totalPages) { ?><li><a href="?page=<?php echo $page+1; ?>"><?php echo $page+1; ?></a></li><?php } ?>
						<?php if($page < $totalPages-1) { ?><li>
							<a href="?page=<?php echo $page+2; ?>" aria-label="Next">
								<span aria-hidden="true">&raquo;</span>
							</a>
						</li><?php } ?>
						<?php if($totalPages > 1) { ?><li><a href="?page=<?php echo $totalPages; ?>"><?php language("last"); ?></a></li><?php } ?>
					</ul>
				</nav>
			</div>
		</div>
		
		<?php } else language("notestimonials"); ?>
	</div>
</div>