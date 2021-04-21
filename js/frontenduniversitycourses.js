$(document).ready(function(){
	$("#university").change(function() {
		var id = $(this).val();
		$.ajax({
		type:'POST',
		//data:dataString,
		data: {	
		'id': id,
		},
		url:'ajaxs/getfrontendfacultiesbyuniversityid.php',
		success: function (response) { document.getElementById("faculty").innerHTML = response; }
	});
		
});
});