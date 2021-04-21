<div class="row">
	<?php include("../designs/headers/profilemenu.php"); ?>
	<div class="col-md-10 <?php if($lang_file == 'ar') echo 'col-md-pull-2'; ?>">
	<h4><label><?php language('booking'); ?></label></h4><br>
	
		<?php
		$booking = getBooking($startResults,$resultsPerPage);
		if(!empty($booking))
		{
		?>
		<div class="row">
			<div class="col-md-12">
				<div class="table-responsive">
				<table class="table table-bordered">
					<tr class="danger">
						<td><?php language('name'); ?></td>											
						<td><?php language('email'); ?></td>
						<td><?php language('mobile'); ?></td>
						<!-- <td><?php language('coursetype'); ?></td> -->
						<td><?php language('course'); ?></td>
						<td><?php language('time'); ?></td>
						<td><?php language('delete'); ?></td>
					</tr>
				<?php for($i=0;$i<sizeof($booking);$i++) { ?>
					<tr id="tr-<?php echo $booking[$i]['id']; ?>">
						<td><?php echo $booking[$i]['name']; ?></td>
						<td><?php echo $booking[$i]['email']; ?></td>
						<td><?php echo $booking[$i]['mobile']; ?></td>
						<!-- <td><?php language($booking[$i]['coursetype']); ?></td> -->
						<td><?php echo getCourseInfo($booking[$i]['coursetype'],'id',$booking[$i]['courseid'],$lang_file); ?></td>
						<td><?php echo $booking[$i]['time']; ?></td>
						<td>
							<i id="<?php echo $booking[$i]['id'];?>" style="color:red;" class="bookingdel glyphicon glyphicon-remove-circle"></i>
							<div id="booking-<?php echo $booking[$i]['id'];?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-sm">
									<div class="modal-content">
										<div class="modal-header">
											<?php language('deletebookingmodal'); ?>
											<br>
        								</div>
										<div class="modal-body">
										<center>
											<button class="btn btn-danger" onclick="deletebooking('<?php echo $booking[$i]['id'];?>')" data-dismiss="modal"><?php language('agree'); ?></button>
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
		
		<?php } else language("nobooking"); ?>
	</div>
</div>