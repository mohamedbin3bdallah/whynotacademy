<div class="row">
	<?php include("../designs/headers/profilemenu.php"); ?>
	<div class="col-md-10 <?php if($lang_file == 'ar') echo 'col-md-pull-2'; ?>">
	<h4><label><?php echo getTitleByID('universities',$_GET['id'],$lang_file); language(' ').language('faculties'); ?></label></h4><br>
	
		<h5><label style="color:blue;"><?php language('newfaculty'); ?></label></h5>
		<div class="row">
			<div class="col-md-12">
				<div class="table-responsive">
				<form enctype="multipart/form-data" method="POST" action="">
				<?php if(isset($_GET['oldid'],$faculty['image']) && $_GET['oldid'] != '') { ?><input type="hidden" name="oldid" value="<?php echo $_GET['oldid']; ?>" /><input type="hidden" name="oldimage" value="<?php echo $faculty['image']; ?>" /><?php } ?>
				<table class="table table-bordered">
					<tr>
						<td class="info"><?php language('titleen'); ?></td>
						<td class="warning"><input type="text" name="titleen" value="<?php if(isset($faculty['titleen'])) echo $faculty['titleen']; ?>" maxlength="250" class="form-control" required="required" /></td>
					</tr>
					<tr>
						<td class="info"><?php language('titlear'); ?></td>
						<td class="warning"><input type="text" name="titlear" value="<?php if(isset($faculty['titlear'])) echo $faculty['titlear']; ?>" maxlength="250" class="form-control" required="required" /></td>
					</tr>
					<tr>
						<td class="info"><?php language('descriptionen'); ?></td>
						<td class="warning"><textarea name="descriptionen" class="form-control" rows="5" required="required"><?php if(isset($faculty['descriptionen'])) echo $faculty['descriptionen']; ?></textarea></td>
					</tr>
					<tr>
						<td class="info"><?php language('descriptionar'); ?></td>
						<td class="warning"><textarea name="descriptionar" class="form-control" rows="5" required="required"><?php if(isset($faculty['descriptionar'])) echo $faculty['descriptionar']; ?></textarea></td>
					</tr>
					<!-- <tr>
						<td><?php //language('icon'); ?></td>
						<td><input type="text" name="icon" value="<?php //if(isset($faculty['icon'])) echo $faculty['icon']; ?>" maxlength="100" class="form-control" required="required" /></td>
					</tr> -->
					<tr>
						<td class="info"><?php language('image'); ?></td>
						<td class="warning"><input type="file" name="file" class="form-control" <?php if(!isset($_GET['oldid']) || $_GET['oldid'] == '') { ?> required="required" <?php } ?> /></td>
					</tr>
					<tr>
						<td class="info"></td>
						<td class="warning"><input type="submit" name="savefaculty" class="btn btn-success" /></td>
					</tr>
				</table>
				</form>
				</div>
			</div>
		</div>
	
	<h5><label style="color:blue;"><?php language('faculties'); ?></label></h5>
		<?php
		$faculties = getFaculties($_GET['id'],$startResults,$resultsPerPage);
		if(!empty($faculties))
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
				<?php for($i=0;$i<sizeof($faculties);$i++) { ?>
					<tr id="tr-<?php echo $faculties[$i]['id']; ?>">
						<td><?php echo $faculties[$i]['titleen']; ?></td>
						<td><?php echo $faculties[$i]['titlear']; ?></td>
						<td><?php echo $faculties[$i]['descriptionen']; ?></td>
						<td><?php echo $faculties[$i]['descriptionar']; ?></td>
						<td>
						<?php if($faculties[$i]['image'] != '') { ?>
							<a href="#" data-toggle="modal" data-target="#facultyimage-<?php echo $i; ?>">
								<img class="img-responsive" src="../uploads/faculties/thumbnail/<?php echo $faculties[$i]['image']; ?>" style="width:75px;">
							</a>
							<div id="facultyimage-<?php echo $i; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<br>
        								</div>
										<div class="modal-body">
											<img src="../uploads/faculties/<?php echo $faculties[$i]['image']; ?>" class="img-responsive">
										</div>
									</div>
								</div>
							</div>
						<?php } ?>
						</td>
						<td><a href="faculties.php?id=<?php echo $_GET['id']; ?>&oldid=<?php echo $faculties[$i]['id']; ?>"><i style="color:green;" class="glyphicon glyphicon-edit"></i></a></td>
						<td>
							<i id="<?php echo $faculties[$i]['id'];?>" style="color:red;" class="facultydel glyphicon glyphicon-remove-circle"></i>
							<div id="faculty-<?php echo $faculties[$i]['id'];?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-sm">
									<div class="modal-content">
										<div class="modal-header">
											<?php language('deletefacultymodal'); ?>
											<br>
        								</div>
										<div class="modal-body">
										<center>
											<button class="btn btn-danger" onclick="deletefaculty('<?php echo $faculties[$i]['id'];?>','<?php echo $faculties[$i]['image'];?>')" data-dismiss="modal"><?php language('agree'); ?></button>
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
						<?php if($totalPages > 1) { ?><li><a href="?id=<?php echo $_GET['id']; ?>&page=1"><?php language("first"); ?></a></li><?php } ?>
						<?php if($page > 3) { ?><li>
							<a href="?id=<?php echo $_GET['id']; ?>&page=<?php echo $page-2; ?>" aria-label="Previous">
								<span aria-hidden="true">&laquo;</span>
							</a>
						</li><?php } ?>
						<?php if($page > 1) { ?><li><a href="?id=<?php echo $_GET['id']; ?>&page=<?php echo $page-1; ?>"><?php echo $page-1; ?></a></li><?php } ?>
						<?php if($totalPages > 1) { ?><li><a href="?id=<?php echo $_GET['id']; ?>&page=<?php echo $page; ?>"><?php echo $page; ?></a></li><?php } ?>
						<?php if($page < $totalPages) { ?><li><a href="?id=<?php echo $_GET['id']; ?>&page=<?php echo $page+1; ?>"><?php echo $page+1; ?></a></li><?php } ?>
						<?php if($page < $totalPages-1) { ?><li>
							<a href="?id=<?php echo $_GET['id']; ?>&page=<?php echo $page+2; ?>" aria-label="Next">
								<span aria-hidden="true">&raquo;</span>
							</a>
						</li><?php } ?>
						<?php if($totalPages > 1) { ?><li><a href="?id=<?php echo $_GET['id']; ?>&page=<?php echo $totalPages; ?>"><?php language("last"); ?></a></li><?php } ?>
					</ul>
				</nav>
			</div>
		</div>
		
		<?php } else language("nofaculties"); ?>
	</div>
</div>