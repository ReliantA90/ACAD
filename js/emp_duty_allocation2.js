$(document).ready(function(){
	$('#duty_eid').on('keyup', function(){
	var count = 0 ;

	$.getJSON('php/emp_duty_allocation1.php',function(data){
		if(count == 0) {
			$.each(data,function(key,value){
			$.each(value,function(k,v){
				if(k == "e_name"){
					$('#duty_emp_name').val(v);
				}
				if(k == "e_gen"){
					$('#duty_emp_gen').val(v);
				}
				if(k == "e_cno"){
					$('#duty_emp_contact').val(v);
				}
				if(k == "e_email"){
					$('#duty_emp_email').val(v);
				}
				if(k == "e_dor"){
					$('#duty_emp_reg_date').val(v);
				}
			});
		});
		}
		count++;
	});
});
});