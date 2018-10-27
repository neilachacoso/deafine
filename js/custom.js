// var detailsDiv;

// $(document).ready(function(){
// 	detailsDiv = $("#detailsDiv").load()
// })

$(document).ready(function(){

	// $("#editProfileForm").unbind('submit').bind('submit', function(){
	// 	$.ajax({
	// 		url     : form.attr('action'),
 //            type    : form.attr('method'),
 //            async	: true,
 //            data    : form.serialize(),
	// 		dataType : 'json',
	// 		success : function(response) {
	// 			if (response.success == true) {
	// 				$("#applicant").html("HELLO");
	// 			} else {
	// 				alert('Error');
	// 			}
	// 			console.log(response);
	// 		}
	// 	});
	// 	return false;
	// });
	
	$("#applicant").load( "retrieve-applicant.php", function() {
		$("#editProfileBtn").on('click', function() {
			$("#editProfileForm").unbind('submit').bind('submit', function(e){
				e.preventDefault();

				$.ajax({
					url : 'p.php',
					type : 'POST',
					data : $('#editProfileForm').serialize(),
					dataType : 'json',
					success : function(response) {
						if (response['success'] == true) {
							$('#saved-alert').removeClass('d-none');
						} else {
							alert('Error');
						}
						console.log(response);
					}
				});
				return false;
			});
		});
	});		
});