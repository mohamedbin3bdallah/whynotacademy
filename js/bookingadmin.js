$(document).ready(function(){
	$(".bookingdel").click(function() {
		var id = $(this).attr('id');		
		$("#booking-"+id).modal('show');
		
});
});

function deletebooking(id)
{
	$.ajax({
		type:'POST',
		//data:dataString,
		data: {	
		'id': id,
		},
		url:'../ajaxs/deletebooking.php',
		success: function (response) { if(response == 1) $("#tr-"+id).hide(); }
	});
}