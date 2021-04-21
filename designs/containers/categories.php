<div class="row">
	<?php include("../designs/headers/profilemenu.php"); ?>
	<div class="col-md-8 <?php if($lang_file == 'ar') echo 'col-md-pull-4'; ?>">
	
		<h4><label><?php language('newcategory'); ?></label></h4>
		<div class="row">
			<div class="col-md-12">
				<div class="table-responsive">
				<form enctype="multipart/form-data" method="POST" action="">
				<?php if(isset($_GET['id']) && $_GET['id'] != '') { ?><input type="hidden" name="oldid" value="<?php echo $_GET['id']; ?>" /><input type="hidden" name="oldimage" value="<?php echo $_GET['image']; ?>" /> <?php } ?>
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
						<td><input type="submit" name="savecategory" class="btn btn-info" /></td>
						<td></td>
					</tr>
				</table>
				</form>
				</div>
			</div>
		</div>
	
	<h4><label><?php language('categories'); ?></label></h4>
		<?php
		$categories = getCategories($startResults,$resultsPerPage);
		if(!empty($categories))
		{
		?>
		<div class="row">
			<div class="col-md-12">
				<div class="table-responsive">
				<table class="table table-striped">
					<tr>
						<td><?php language('en'); language(' '); language('title'); ?></td>
						<td><?php language('ar'); language(' '); language('title'); ?></td>
						<td><?php language('edit'); ?></td>
						<td><?php language('delete'); ?></td>
					</tr>
				<?php for($i=0;$i<sizeof($categories);$i++) { ?>
					<tr id="tr-<?php echo $categories[$i]['id']; ?>">
						<td><a href="subcategories.php?id=<?php echo $categories[$i]['id']; ?>"><?php echo $categories[$i]['titleen']; ?></a></td>
						<td><a href="subcategories.php?id=<?php echo $categories[$i]['id']; ?>"><?php echo $categories[$i]['titlear']; ?></a></td>
						<td><a href="categories.php?id=<?php echo $categories[$i]['id']; ?>&titleen=<?php echo $categories[$i]['titleen']; ?>&titlear=<?php echo $categories[$i]['titlear']; ?>"><i style="color:green;" class="groupdel glyphicon glyphicon-edit"></i></a></td>
						<td>
							<i id="<?php echo $categories[$i]['id'];?>" style="color:red;" class="categorydel glyphicon glyphicon-remove-circle"></i>
							<div id="categories-<?php echo $categories[$i]['id'];?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-sm">
									<div class="modal-content">
										<div class="modal-header">
											<?php language('deleteservicemodal'); ?>
											<br>
        								</div>
										<div class="modal-body">
										<center>
											<button class="btn btn-danger" onclick="deletecategory('<?php echo $categories[$i]['id'];?>')" data-dismiss="modal"><?php language('agree'); ?></button>
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
		
		<?php } else language("noservices"); ?>
	</div>
</div>