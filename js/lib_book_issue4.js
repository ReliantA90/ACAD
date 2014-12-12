$(document).ready(function(){

	$('#issue_btn').on('click',function(e){	
		e.preventDefault();
    	e.stopPropagation();
	
	var issue_book_isbn = $('#issue_book_isbn').val();
	var issue_copies = $('#issue_copies').val();
	var issue_mem_id = $('#issue_mem_id').val();
	var issue_date = $('#issue_date').val();
	var issue_due_date = $('#issue_due_date').val();
	
	if(issue_copies == 1)
	{
		sweetAlert("Message","Sorry.... Book is not avalaible. !Wait and try again.","error");
	}
	else{
	$.ajax({
		url: 'php/lib_book_issue4.php',
		type: 'POST',
		data: { 'issue_book_isbn':issue_book_isbn, 'issue_mem_id':issue_mem_id, 'issue_copies':issue_copies,
				'issue_date':issue_date, 'issue_due_date':issue_due_date },
		success: function(data)
		{
			sweetAlert("Message","Book Issued","success");
		},

		error: function(xhr, desc, err) {
			console.log(xhr);
			console.log("Details: " + desc + "\nError:" + err);
		},
		cache: false
		});
}
	});
});