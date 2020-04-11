"use strict"

$(document).ready(function(){
	$('#tbl').on('change','#cls', function(){
		var mytext = $("#cls").val();
		
		$.ajax({
			url: '/adminhome/allsubjects',
			data: {
				class : mytext
			},
			method: 'POST',
			headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
			success: function(res){
					$('#allsubjects').html(res);
					$('#allteachers').html("");
			},
			error: function(err){
					console.log(err);
			}
		});
	});
	
	$('#tbl').on('change','#sbjid',function(){
		var cls = $("#cls").val();
		var sub = $("#sbjid").val();
		$.ajax({
			url: '/adminhome/allteachers',
			data: {
				class : cls,
				subject : sub
			},
			method: 'POST',
			headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
			success: function(res){
					$('#allteachers').html(res);
			},
			error: function(err){
					console.log(err);
			}
		});
	});
});









