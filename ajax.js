$(document).ready(function(){

	$('#generate').on('click', function() {
		
		// Get options from form
		var options = {
			prefix: $('#prefix').val(),
			postfix: $('#postfix').val(),
			sameLetter: $("#sameLetter:checked").length
		}

		console.log(options);

		// Ajax call to get new name
		$.ajax({
			type: 'POST',
			url: 'create_codename.php',
			data: options,
			success: function(data) {
				console.log(data);
				
				var new_name = '';
				$.each(data, function(index, name) {
					new_name = new_name + name + ' ';
				});
				$('.new_name').html(new_name);
				
			},
			error: function() {
				alert('Something went wrong with the request!');
			}

		})

	});

});