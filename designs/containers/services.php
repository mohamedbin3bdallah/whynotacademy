<div class="row">
	<?php include("../designs/headers/profilemenu.php"); ?>
	<div class="col-md-8 <?php if($lang_file == 'ar') echo 'col-md-pull-4'; ?>">
	
		<h4><label><?php language('newservice'); ?></label></h4>
		<div class="row">
			<div class="col-md-12">
				<div class="table-responsive">
				<form enctype="multipart/form-data" method="POST" action="">
				<?php if(isset($_GET['oldid']) && $_GET['oldid'] != '') { ?><input type="hidden" name="oldid" value="<?php echo $_GET['oldid']; ?>" /><?php } ?>
				<table class="table table-striped">
					<tr>
						<td><?php language('en'); language(' '); language('title'); ?></td>
						<td><input type="text" name="titleen" value="<?php if(isset($_GET['titleen'])) echo $_GET['titleen']; ?>" maxlength="100" class="form-control" required="required" /></td>
					</tr>
					<tr>
						<td><?php language('ar'); language(' '); language('title'); ?></td>
						<td><input type="text" name="titlear" value="<?php if(isset($_GET['titlear'])) echo $_GET['titlear']; ?>" maxlength="100" class="form-control" required="required" /></td>
					</tr>
					<tr>
						<td><?php language('icon'); ?></td>
						<td><input type="text" name="icon" value="<?php if(isset($_GET['icon'])) echo $_GET['icon']; ?>" maxlength="100" class="form-control" required="required" /></td>
					</tr>
					<!-- <tr>
						<td><?php //language('image'); ?></td>
						<td><input type="file" name="file" class="form-control" required="required" /></td>
					</tr> -->
					<tr>
						<td><input type="submit" name="saveservice" class="btn btn-info" /></td>
						<td></td>
					</tr>
				</table>
				</form>
				</div>
			</div>
		</div>
	
	<h4><label><?php language('services'); ?></label></h4>
		<?php
		$services = getServices($_GET['id'],$startResults,$resultsPerPage);
		if(!empty($services))
		{
		?>
		<div class="row">
			<div class="col-md-12">
				<div class="table-responsive">
				<table class="table table-striped">
					<tr>
						<td><?php language('en'); language(' '); language('title'); ?></td>
						<td><?php language('ar'); language(' '); language('title'); ?></td>
						<td><?php language('icon'); ?></td>
						<td><?php language('edit'); ?></td>
						<td><?php language('delete'); ?></td>
					</tr>
				<?php for($i=0;$i<sizeof($services);$i++) { ?>
					<tr id="tr-<?php echo $services[$i]['id']; ?>">
						<td><a href="subservices.php?id=<?php echo $services[$i]['id']; ?>"><?php echo $services[$i]['titleen']; ?></a></td>
						<td><a href="subservices.php?id=<?php echo $services[$i]['id']; ?>"><?php echo $services[$i]['titlear']; ?></a></td>
						<td><i class="fa fa-<?php echo $services[$i]['icon']; ?>"></i></td>
						<!-- <td>
						<?php //if($services[$i]['image'] != '') { ?>
							<a href="#" data-toggle="modal" data-target="#service-<?php //echo $i; ?>">
								<img class="img-responsive" src="../uploads/services/thumbnail/<?php //echo $services[$i]['image']; ?>" style="width:75px;">
							</a>
							<div id="service-<?php //echo $i; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<br>
        								</div>
										<div class="modal-body">
											<img src="../uploads/services/<?php //echo $services[$i]['image']; ?>" class="img-responsive">
										</div>
									</div>
								</div>
							</div>
						<?php //} ?>
						</td> -->
						<td><a href="services.php?id=<?php echo $_GET['id']; ?>&oldid=<?php echo $services[$i]['id']; ?>&titleen=<?php echo $services[$i]['titleen']; ?>&titlear=<?php echo $services[$i]['titlear']; ?>&icon=<?php echo $services[$i]['icon']; ?>"><i style="color:green;" class="glyphicon glyphicon-edit"></i></a></td>
						<td>
							<?php if($services[$i]['haschilds'] == 0) { ?>
							<i id="<?php echo $services[$i]['id'];?>" style="color:red;" class="servicedel glyphicon glyphicon-remove-circle"></i>
							<div id="services-<?php echo $services[$i]['id'];?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-sm">
									<div class="modal-content">
										<div class="modal-header">
											<?php language('deleteservicemodal'); ?>
											<br>
        								</div>
										<div class="modal-body">
										<center>
											<button class="btn btn-danger" onclick="deleteservice('<?php echo $services[$i]['id'];?>','<?php echo $_GET['id'];?>')" data-dismiss="modal"><?php language('agree'); ?></button>
											<button class="btn btn-success" data-dismiss="modal" aria-hidden="true"><?php language('no'); ?></button>
										</center>
										</div>
									</div>
								</div>
							</div>
							<?php } ?>
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
		
		<?php } else language("noservices"); ?>
	</div>
</div>