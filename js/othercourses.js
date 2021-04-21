$(document).ready(function(){
	$(".othercoursedel").click(function() {
		var id = $(this).attr('id');		
		$("#othercourse-"+id).modal('show');
		
});
});

function deleteothercourse(id,pic)
{
	$.ajax({
		type:'POST',
		//data:dataString,
		data: {	
		'id': id,
		'pic': pic,
		},
		url:'../ajaxs/deleteothercourse.php',
		success: function (response) { if(response == 1) $("#tr-"+id).hide(); }
	});
}