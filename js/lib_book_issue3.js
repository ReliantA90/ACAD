$(document).ready(function(){

	$('#issue_book_isbn').on('change',function(){	
	
	var issue_book_isbn = $('#issue_book_isbn').find(':selected').val();

	$.ajax({
		url: 'php/lib_book_issue3.php',
		type: 'POST',
		data: { 'issue_book_isbn':issue_book_isbn },
		success: function(data)
		{
			var res = $.parseJSON(data);
			$.each(res,function(key,value){
				$.each(value,function(k,v){
					if(k == "l_book_copies"){
						$('#issue_copies').val(v);
						}
					});
				});
		},
		 error: function(xhr, desc, err) {
        console.log(xhr);
        console.log("Details: " + desc + "\nError:" + err);
      },
		cache: false
	});
});
	});