$(document).ready(function(){
	$("#university").change(function() {
		var id = $(this).val();
		$.ajax({
		type:'POST',
		//data:dataString,
		data: {	
		'id': id,
		},
		url:'../ajaxs/getfacultiesbyuniversityid.php',
		success: function (response) { document.getElementById("faculty").innerHTML = response; }
	});
		
});
});

$(document).ready(function(){
	$(".universitycoursedel").click(function() {
		var id = $(this).attr('id');
		$("#universitycourse-"+id).modal('show');
		
});
});

function deleteuniversitycourse(id,pic)
{
	$.ajax({
		type:'POST',
		//data:dataString,
		data: {	
		'id': id,
		'pic': pic,
		},
		url:'../ajaxs/deleteuniversitycourse.php',
		success: function (response) { if(response == 1) $("#tr-"+id).hide(); }
	});
}