"use strict"

$(document).ready(function(){
	$('#search').on('keyup',function(){
		var mytext = $("#search").val();
		
		$.ajax({
			url: '/adminhome/search',
			data: {
				txt : mytext
			},
			method: 'POST',
			headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
			success: function(res){
					$('#result').html(res);
			},
			error: function(err){
					console.log(err);
			}
		});
	});
});








