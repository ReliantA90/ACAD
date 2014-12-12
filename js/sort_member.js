$(document).ready(function(){
	$('#view').on('click',function(){
	
		var member_id = $('#member_id').val();
		var member_name = $('#member_name').val(); 
		var member_designation = $('#member_designation').val();

		$('#filter_table >tbody:last').html('');
		
		$.ajax({
			url: 'php/sort_member.php',
			type: 'POST',
			data: { 'member_id':member_id, 'member_name':member_name, 'member_designation':member_designation },
			success:function(data){
				var response = $.parseJSON(data);
				$.each(response,function(key,value){
			$.each(value,function(k,v){

				if(k == "m_id"){
				    $('#filter_table >tbody:last').append(
				    	$('<tr>').append(
				    		$('<td>').append(v)
				    		.append($('</td>')
				    			.append(
				    				$('</tr>')
				    				)
				    			)
				    		)
				    	);
				  }
				  if(k == "m_name"){
				    $('#filter_table >tbody >tr:last').append(
				    	$('<td>').append(v)
				    	.append($('</td>')
				    		)
				    	);
				  }
				  if(k == "m_phno"){
				  	$('#filter_table >tbody >tr:last').append(
				    	$('<td>').append(v)
				    	.append($('</td>')
				    		)
				    	);
				  }
				  if(k == "m_email"){
				    $('#filter_table >tbody >tr:last').append(
				    	$('<td>').append(v)
				    	.append($('</td>')
				    		)
				    	);
				  }
				  if(k == "m_desig"){
				    $('#filter_table >tbody >tr:last').append(
				    	$('<td>').append(v)
				    	.append($('</td>')
				    		)
				    	);
				  }
				  if(k == "m_padd"){
				    $('#filter_table >tbody >tr:last').append(
				    	$('<td>').append(v)
				    	.append($('</td>')
				    		)
				    	);
				  }
				  if(k == "m_madd"){
				    $('#filter_table >tbody >tr:last').append(
				    	$('<td>').append(v)
				    	.append($('</td>')
				    		)
				    	);
				  }
				  if(k == "m_madd"){
				    $('#filter_table >tbody >tr:last').append(
				    	$('<td>').append($('<a href="#" type="button" class="edit_b btn btn-warning btn-sm"><span class="fa fa-pencil-square-o"></span> Edit</a>       <a type="button" class="btn btn-danger btn-sm"><i class="fa fa-times"></i> Delete</a>') 				    		
				    	.append($('</td>')
				    		)
				    		)
				    	);
				    $('#filter_table >tbody >tr:last').on('click', '.edit_b', function() {
				    	var $td = $(this).closest('tr').children('td');
						var part_name = $td.eq(1).text();
						alert(part_name);
						});
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