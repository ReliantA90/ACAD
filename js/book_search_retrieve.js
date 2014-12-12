$(document).ready(function(){
	
	var count = 0;

	$.getJSON('php/book_search_result.php',function(data){
		if(count == 0){
			$.each(data,function(key,value){
			$.each(value,function(k,v){
				if(k == "l_book_no"){
					$('#retrieve_book_id').append("<tr><td>"+v+"</td></tr>");
				}
				if(k == "l_book_name"){
					$('#retrieve_book_name').append("<tr><td>"+v+"</td></tr>");
				}
				if(k == "l_book_subject"){
					$('#retrieve_subject').append("<tr><td>"+v+"</td></tr>");
				}
				if(k == "l_book_author"){
					$('#retrieve_author').append("<tr><td>"+v+"</td></tr>");
				}
				if(k == "l_book_publisher"){
					$('#retrieve_publisher').append("<tr><td>"+v+"</td></tr>");
				}
				if(k == "l_book_copies"){
					$('#retrieve_book_copies').append("<tr><td>"+v+"</td></tr>");
				}
				if(k == "l_book_catalog"){
					$('#retrieve_book_catalogue').append("<tr><td>"+v+"</td></tr>");
				}
			});
		});
		}
		count++;
	});
});