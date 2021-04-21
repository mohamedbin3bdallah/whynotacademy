<div class="row">
	<?php include("../designs/headers/profilemenu.php"); ?>
	<div class="col-md-8 <?php if($lang_file == 'ar') echo 'col-md-pull-4'; ?>">
	
		<h4><label><?php language('newclient'); ?></label></h4>
		<div class="row">
			<div class="col-md-12">
				<div class="table-responsive">
				<form enctype="multipart/form-data" method="POST" action="">
				<?php if(isset($_GET['id']) && $_GET['id'] != '') { ?><input type="hidden" name="oldid" value="<?php echo $_GET['oldid']; ?>" /><input type="hidden" name="oldimage" value="<?php echo $_GET['oldimage']; ?>" /> <?php } ?>
				<table class="table table-striped">
					<tr>
						<td><?php language('title'); ?></td>
						<td><input type="text" name="title" value="<?php if(isset($_GET['title'])) echo $_GET['title']; ?>" maxlength="100" class="form-control" required="required" /></td>
					</tr>
					<tr>
						<td><?php language('image'); ?></td>
						<td><input type="file" name="file" class="form-control" required="required" /></td>
					</tr>
					<tr>
						<td><input type="submit" name="saveclient" class="btn btn-info" /></td>
						<td></td>
					</tr>
				</table>
				</form>
				</div>
			</div>
		</div>
	
	<h4><label><?php language('clients'); ?></label></h4>
		<?php
		$clients = getClients($startResults,$resultsPerPage);
		if(!empty($clients))
		{
		?>
		<div class="row">
			<div class="col-md-12">
				<div class="table-responsive">
				<table class="table table-striped">
					<tr>
						<td><?php language('title'); ?></td>						
						<td><?php language('image'); ?></td>						
						<td><?php language('edit'); ?></td>
						<td><?php language('delete'); ?></td>
					</tr>
				<?php for($i=0;$i<sizeof($clients);$i++) { ?>
					<tr id="tr-<?php echo $clients[$i]['id']; ?>">
						<td><?php echo $clients[$i]['title']; ?></td>
						<td>
						<?php if($clients[$i]['image'] != '') { ?>
							<a href="#" data-toggle="modal" data-target="#client-<?php echo $i; ?>">
								<img class="img-responsive" src="../uploads/clients/thumbnail/<?php echo $clients[$i]['image']; ?>" style="width:75px;">
							</a>
							<div id="client-<?php echo $i; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<br>
        								</div>
										<div class="modal-body">
											<img src="../uploads/clients/<?php echo $clients[$i]['image']; ?>" class="img-responsive">
										</div>
									</div>
								</div>
							</div>
						<?php } ?>
						</td>
						<td><a href="clients.php?oldid=<?php echo $clients[$i]['id']; ?>&title=<?php echo $clients[$i]['title']; ?>&oldimage=<?php echo $clients[$i]['image']; ?>"><i style="color:green;" class="glyphicon glyphicon-edit"></i></a></td>
						<td>
							<i id="<?php echo $clients[$i]['id'];?>" style="color:red;" class="clientdel glyphicon glyphicon-remove-circle"></i>
							<div id="clients-<?php echo $clients[$i]['id'];?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-sm">
									<div class="modal-content">
										<div class="modal-header">
											<?php language('deleteclientmodal'); ?>
											<br>
        								</div>
										<div class="modal-body">
										<center>
											<button class="btn btn-danger" onclick="deleteclient(<?php echo $clients[$i]['id'];?>,<?php echo $clients[$i]['image'];?>)" data-dismiss="modal"><?php language('agree'); ?></button>
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
		
		<?php } else language("noclients"); ?>
	</div>
</div>