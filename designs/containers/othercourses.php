<div class="row">
	<?php include("../designs/headers/profilemenu.php"); ?>
	<div class="col-md-10 <?php if($lang_file == 'ar') echo 'col-md-pull-2'; ?>">
		<h4><label><?php language('othercourses'); ?></label></h4><br>
	
		<h5><label style="color:blue;"><?php language('newothercourse'); ?></label></h5>
		<div class="row">
			<div class="col-md-12">
				<div class="table-responsive">
				<form enctype="multipart/form-data" method="POST" action="">
				<?php if(isset($_GET['oldid'],$othercourse['image']) && $_GET['oldid'] != '') { ?><input type="hidden" name="oldid" value="<?php echo $_GET['oldid']; ?>" /><input type="hidden" name="oldimage" value="<?php echo $othercourse['image']; ?>" /><?php } ?>
				<table class="table table-bordered">
					<tr>
						<td class="info"><?php language('titleen'); ?></td>
						<td class="warning"><input type="text" name="titleen" value="<?php if(isset($othercourse['titleen'])) echo $othercourse['titleen']; ?>" maxlength="250" class="form-control" required="required" /></td>
					</tr>
					<tr>
						<td class="info"><?php language('titlear'); ?></td>
						<td class="warning"><input type="text" name="titlear" value="<?php if(isset($othercourse['titlear'])) echo $othercourse['titlear']; ?>" maxlength="250" class="form-control" required="required" /></td>
					</tr>
					<tr>
						<td class="info"><?php language('descriptionen'); ?></td>
						<td class="warning"><textarea name="descriptionen" class="form-control" rows="5" required="required"><?php if(isset($othercourse['descriptionen'])) echo $othercourse['descriptionen']; ?></textarea></td>
					</tr>
					<tr>
						<td class="info"><?php language('descriptionar'); ?></td>
						<td class="warning"><textarea name="descriptionar" class="form-control" rows="5" required="required"><?php if(isset($othercourse['descriptionar'])) echo $othercourse['descriptionar']; ?></textarea></td>
					</tr>
					<!-- <tr>
						<td><?php //language('icon'); ?></td>
						<td><input type="text" name="icon" value="<?php //if(isset($othercourse['icon'])) echo $othercourse['icon']; ?>" maxlength="100" class="form-control" required="required" /></td>
					</tr> -->
					<tr>
						<td class="info"><?php language('image'); ?></td>
						<td class="warning"><input type="file" name="file" class="form-control" <?php if(!isset($_GET['oldid']) || $_GET['oldid'] == '') { ?> required="required" <?php } ?> /></td>
					</tr>
					<tr>
						<td class="info"></td>
						<td class="warning"><input type="submit" name="saveothercourse" class="btn btn-success" /></td>
					</tr>
				</table>
				</form>
				</div>
			</div>
		</div>
	
	<h5><label style="color:blue;"><?php language('othercourses'); ?></label></h5>
		<?php
		$othercourses = getOtherCourses($startResults,$resultsPerPage);
		if(!empty($othercourses))
		{
		?>
		<div class="row">
			<div class="col-md-12">
				<div class="table-responsive">
				<table class="table table-bordered">
					<tr class="danger">
						<td><?php language('titleen'); ?></td>											
						<td><?php language('titlear'); ?></td>
						<td><?php language('descriptionen'); ?></td>
						<td><?php language('descriptionar'); ?></td>
						<td><?php language('image'); ?></td>
						<td><?php language('edit'); ?></td>
						<td><?php language('delete'); ?></td>
					</tr>
				<?php for($i=0;$i<sizeof($othercourses);$i++) { ?>
					<tr id="tr-<?php echo $othercourses[$i]['id']; ?>">
						<td><?php echo $othercourses[$i]['titleen']; ?></td>
						<td><?php echo $othercourses[$i]['titlear']; ?></td>
						<td><?php echo $othercourses[$i]['descriptionen']; ?></td>
						<td><?php echo $othercourses[$i]['descriptionar']; ?></td>
						<td>
						<?php if($othercourses[$i]['image'] != '') { ?>
							<a href="#" data-toggle="modal" data-target="#othercourseimage-<?php echo $i; ?>">
								<img class="img-responsive" src="../uploads/othercourses/thumbnail/<?php echo $othercourses[$i]['image']; ?>" style="width:75px;">
							</a>
							<div id="othercourseimage-<?php echo $i; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<br>
        								</div>
										<div class="modal-body">
											<img src="../uploads/othercourses/<?php echo $othercourses[$i]['image']; ?>" class="img-responsive">
										</div>
									</div>
								</div>
							</div>
						<?php } ?>
						</td>
						<td><a href="othercourses.php?oldid=<?php echo $othercourses[$i]['id']; ?>"><i style="color:green;" class="glyphicon glyphicon-edit"></i></a></td>
						<td>
							<i id="<?php echo $othercourses[$i]['id'];?>" style="color:red;" class="othercoursedel glyphicon glyphicon-remove-circle"></i>
							<div id="othercourse-<?php echo $othercourses[$i]['id'];?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-sm">
									<div class="modal-content">
										<div class="modal-header">
											<?php language('deleteothercoursemodal'); ?>
											<br>
        								</div>
										<div class="modal-body">
										<center>
											<button class="btn btn-danger" onclick="deleteothercourse('<?php echo $othercourses[$i]['id'];?>','<?php echo $othercourses[$i]['image'];?>')" data-dismiss="modal"><?php language('agree'); ?></button>
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
			<div class="col-md-2<?php if($lang_file == 'ar') echo ' col-md-push-10'; ?>">
			</div>
			<div class="col-md-10<?php if($lang_file == 'ar') echo ' col-md-pull-2'; ?>">
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
		
		<?php } else language("noothercourses"); ?>
	</div>
</div>