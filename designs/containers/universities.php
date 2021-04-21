<div class="row">
	<?php include("../designs/headers/profilemenu.php"); ?>
	<div class="col-md-10 <?php if($lang_file == 'ar') echo 'col-md-pull-2'; ?>">
	<h4><label><?php language('universities'); ?></label></h4><br>
	
		<h5><label style="color:blue;"><?php language('newuniversity'); ?></label></h5>
		<div class="row">
			<div class="col-md-12">
				<div class="table-responsive">
				<form enctype="multipart/form-data" method="POST" action="">
				<?php if(isset($_GET['oldid'],$university['image']) && $_GET['oldid'] != '') { ?><input type="hidden" name="oldid" value="<?php echo $_GET['oldid']; ?>" /><input type="hidden" name="oldimage" value="<?php echo $university['image']; ?>" /><?php } ?>
				<table class="table table-bordered">
					<tr>
						<td class="info"><?php language('titleen'); ?></td>
						<td class="warning"><input type="text" name="titleen" value="<?php if(isset($university['titleen'])) echo $university['titleen']; ?>" maxlength="250" class="form-control" required="required" /></td>
					</tr>
					<tr>
						<td class="info"><?php language('titlear'); ?></td>
						<td class="warning"><input type="text" name="titlear" value="<?php if(isset($university['titlear'])) echo $university['titlear']; ?>" maxlength="250" class="form-control" required="required" /></td>
					</tr>
					<tr>
						<td class="info"><?php language('descriptionen'); ?></td>
						<td class="warning"><textarea name="descriptionen" class="form-control" rows="5" required="required"><?php if(isset($university['descriptionen'])) echo $university['descriptionen']; ?></textarea></td>
					</tr>
					<tr>
						<td class="info"><?php language('descriptionar'); ?></td>
						<td class="warning"><textarea name="descriptionar" class="form-control" rows="5" required="required"><?php if(isset($university['descriptionar'])) echo $university['descriptionar']; ?></textarea></td>
					</tr>
					<!-- <tr>
						<td><?php //language('icon'); ?></td>
						<td><input type="text" name="icon" value="<?php //if(isset($university['icon'])) echo $university['icon']; ?>" maxlength="100" class="form-control" required="required" /></td>
					</tr> -->
					<tr>
						<td class="info"><?php language('image'); ?></td>
						<td class="warning"><input type="file" name="file" class="form-control" <?php if(!isset($_GET['oldid']) || $_GET['oldid'] == '') { ?> required="required" <?php } ?> /></td>
					</tr>
					<tr>
						<td class="info"></td>
						<td class="warning"><input type="submit" name="saveuniversity" class="btn btn-success" /></td>
					</tr>
				</table>
				</form>
				</div>
			</div>
		</div>
	
	<h5><label style="color:blue;"><?php language('universities'); ?></label></h5>
		<?php
		$universities = getUniversities($startResults,$resultsPerPage);
		if(!empty($universities))
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
				<?php for($i=0;$i<sizeof($universities);$i++) { ?>
					<tr id="tr-<?php echo $universities[$i]['id']; ?>">
						<td><a href="faculties.php?id=<?php echo $universities[$i]['id']; ?>"><?php echo $universities[$i]['titleen']; ?></a></td>
						<td><a href="faculties.php?id=<?php echo $universities[$i]['id']; ?>"><?php echo $universities[$i]['titlear']; ?></a></td>
						<td><?php echo $universities[$i]['descriptionen']; ?></td>
						<td><?php echo $universities[$i]['descriptionar']; ?></td>
						<td>
						<?php if($universities[$i]['image'] != '') { ?>
							<a href="#" data-toggle="modal" data-target="#universityimage-<?php echo $i; ?>">
								<img class="img-responsive" src="../uploads/universities/thumbnail/<?php echo $universities[$i]['image']; ?>" style="width:75px;">
							</a>
							<div id="universityimage-<?php echo $i; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<br>
        								</div>
										<div class="modal-body">
											<img src="../uploads/universities/<?php echo $universities[$i]['image']; ?>" class="img-responsive">
										</div>
									</div>
								</div>
							</div>
						<?php } ?>
						</td>
						<td><a href="universities.php?oldid=<?php echo $universities[$i]['id']; ?>"><i style="color:green;" class="glyphicon glyphicon-edit"></i></a></td>
						<td>
							<i id="<?php echo $universities[$i]['id'];?>" style="color:red;" class="universitydel glyphicon glyphicon-remove-circle"></i>
							<div id="university-<?php echo $universities[$i]['id'];?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-sm">
									<div class="modal-content">
										<div class="modal-header">
											<?php language('deleteuniversitymodal'); ?>
											<br>
        								</div>
										<div class="modal-body">
										<center>
											<button class="btn btn-danger" onclick="deleteuniversity('<?php echo $universities[$i]['id'];?>','<?php echo $universities[$i]['image'];?>')" data-dismiss="modal"><?php language('agree'); ?></button>
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
		
		<?php } else language("nouniversities"); ?>
	</div>
</div>