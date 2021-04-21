$(document).ready(function(){
	$(".facultydel").click(function() {
		var id = $(this).attr('id');		
		$("#faculty-"+id).modal('show');
		
});
});

function deletefaculty(id,pic)
{
	$.ajax({
		type:'POST',
		//data:dataString,
		data: {	
		'id': id,
		'pic': pic,
		},
		url:'../ajaxs/deletefaculty.php',
		success: function (response) { if(response == 1) $("#tr-"+id).hide(); }
	});
}