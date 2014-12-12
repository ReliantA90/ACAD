$(document).ready(function(){
	$('#search_btn').on('click',function(e){
		e.preventDefault();
		e.stopPropagation();


		var search_book_name = $('#search_book_name').val();
		var search_subject = $('#search_subject').val(); 
		var search_author = $('#search_author').val();
		var search_publisher = $('#search_publisher').val();

		$('#search_book >tbody:last').html('');


		$.ajax({
			url: 'php/book_search_result.php',
			type: 'POST',
			data: { 'search_book_name':search_book_name, 'search_subject':search_subject, 'search_author':search_author,
			'search_publisher':search_publisher },
			success:function(data){
				var response = $.parseJSON(data);

				$.each(response,function(key,value){
			$.each(value,function(k,v){

				if(k == "l_book_no"){
					$('#search_book >tbody:last').append(
						$('<tr>').append(
							$('<td>').append(v)
							.append(
								$('</td>').append(
									$('</tr>')
									)
								)
							)
						);
					}
				if(k == "l_book_name"){
					$('#search_book >tbody >tr:last').append(
						$('<td>').append(v)
							.append($('</td>')
								)
							);
					}
				if(k == "l_book_subject"){
					$('#search_book >tbody >tr:last').append(
						$('<td>').append(v)
						.append($('</td>')
							)
						);
					}
				if(k == "l_book_author"){
					$('#search_book >tbody >tr:last').append(
						$('<td>').append(v)
						.append($('</td>')
							)
						);
					}
				if(k == "l_book_publisher"){
					$('#search_book >tbody >tr:last').append(
						$('<td>').append(v)
						.append($('</td>')
							)
						);
					}
				if(k == "l_book_copies"){
					$('#search_book >tbody >tr:last').append(
						$('<td>').append(v)
						.append($('</td>')
							)
						);
				}
				if(k == "l_book_catalog"){
					$('#search_book >tbody >tr:last').append(
						$('<td>').append(v)
						.append($('</td>')
							)
						);
					}
			});
		});
			
			},
			error: function(xhr, desc, err) {
	        console.log(xhr);
	        console.log("Details: " + desc + "\nError:" + err);
	      },
			cache: false
		}); /*end of ajax*/
	}); /*end of btn click event*/
});