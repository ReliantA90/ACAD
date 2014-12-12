$(document).ready(function(){
$('#issue_btn').prop('disabled', true);
	$('#issue_mem_id').on('change',function(e){	
		e.preventDefault();
    	e.stopPropagation();

	
	var issue_mem_id = $('#issue_mem_id').find(':selected').val();
	
	$.ajax({
		url: 'php/lib_book_issue5.php',
		type: 'POST',
		data: { 'issue_mem_id':issue_mem_id },
		success: function(data)
		{
			if(data>=5){
				alert("Sorry... You've already issued 5 books.");
			}
			else{
				$('#issue_btn').prop('disabled', false);
			}
		},

		error: function(xhr, desc, err) {
			console.log(xhr);
			console.log("Details: " + desc + "\nError:" + err);
		},
		cache: false
		});
	});
});