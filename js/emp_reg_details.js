$(document).ready(function(){
	var count = 0 ;

	$.getJSON('php/emp_reg_details.php',function(data){
		if(count == 0) {
			$.each(data,function(key,value){
			$.each(value,function(k,v){

				if(k == "e_id"){
					$("#emp_tab >tbody:last").append(
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
				if(k == "e_name"){
					$("#emp_tab >tbody >tr:last").append(
						
							$('<td>').append(v)
							.append(
								$('</td>')
								
								)
							
					);
					}
				if(k == "e_dob"){
					$("#emp_tab >tbody >tr:last").append(
						
							$('<td>').append(v)
							.append(
								$('</td>').append(
									$('</tr>')
									)
								)
							
					);
				}
				if(k == "e_cno"){
					$("#emp_tab >tbody >tr:last").append(
						
							$('<td>').append(v)
							.append(
								$('</td>').append(
									$('</tr>')
									)
								)
							
					);
				}
				if(k == "e_email"){
					$("#emp_tab >tbody >tr:last").append(
						
							$('<td>').append(v)
							.append(
								$('</td>').append(
									$('</tr>')
									)
								)
						
					);
				}
				if(k == "e_edu"){
					$("#emp_tab >tbody >tr:last").append(
						
							$('<td>').append(v)
							.append(
								$('</td>').append(
									$('</tr>')
									)
								)
							
					);
				}
				if(k == "e_spcl"){
					$("#emp_tab >tbody >tr:last").append(
						
							$('<td>').append(v)
							.append(
								$('</td>').append(
									$('</tr>')
									)
								)
					);
				}

			});
		});
		}
		count++;
	});
});