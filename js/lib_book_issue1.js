/*BOOK ISSUE FORM*/
$(document).ready(function(){
	var counts = 0;

	$.getJSON('php/lib_book_issue1.php',function(data){
		if(counts == 0){
			$.each(data,function(key,value){
				
				$.each(value,function(k,v){
					if(k == "l_book_isbn"){
						
						$('#issue_book_isbn').append("<option>"+v+"</option>");
					}
				});
			});
		}
		counts++;
	});
});

$(document).ready(function(){
	var counts = 0;

	$.getJSON('php/lib_book_issue2.php',function(data){
		if(counts == 0){
			$.each(data,function(key,value){
				
				$.each(value,function(k,v){
					if(k == "m_id"){
						
						$('#issue_mem_id').append("<option>"+v+"</option>");
					}
				});
			});
		}
		counts++;
	});
});


/*BOOK RETURN FORM*/
$(document).ready(function(){
	var counts = 0;

	$.getJSON('php/lib_book_issue1.php',function(data){
		if(counts == 0){
			$.each(data,function(key,value){
				
				$.each(value,function(k,v){
					if(k == "l_book_isbn"){
						
						$('#return_book_isbn').append("<option>"+v+"</option>");
					}
				});
			});
		}
		counts++;
	});
});

$(document).ready(function(){
	var counts = 0;

	$.getJSON('php/lib_book_issue2.php',function(data){
		if(counts == 0){
			$.each(data,function(key,value){
				
				$.each(value,function(k,v){
					if(k == "m_id"){
						
						$('#return_member_id').append("<option>"+v+"</option>");
					}
				});
			});
		}
		counts++;
	});
});