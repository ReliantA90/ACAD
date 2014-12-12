$(document).ready(function(){
	var counts = 0;

	$.getJSON('php/manage_member_frm.php',function(data){
		if(counts == 0){
			$.each(data,function(key,value){
				$.each(value,function(k,v){
					if(k == "m_id"){
						$('#member_id').append("<option>"+v+"</option>");
					}
					if(k == "m_name"){
						$('#member_name').append("<option>"+v+"</option>");
					}
					if(k == "m_desig"){
						$('#member_designation').append("<option>"+v+"</option>");
					}
				});
			});
		}
		counts++;
	});
});