$(document).ready(function(){
	$(".universitydel").click(function() {
		var id = $(this).attr('id');		
		$("#university-"+id).modal('show');
		
});
});

function deleteuniversity(id,pic)
{
	$.ajax({
		type:'POST',
		//data:dataString,
		data: {	
		'id': id,
		'pic': pic,
		},
		url:'../ajaxs/deleteuniversity.php',
		success: function (response) { if(response == 1) $("#tr-"+id).hide(); }
	});
}