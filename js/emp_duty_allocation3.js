$(document).ready(function(){
	$('#duty_sub_btn').on('click',function(e){
		e.preventDefault();
		e.stopPropagation();

		var duty_eid = $('#duty_eid').val();
		var duty_office = $('#duty_office').val();
		var duty_position = $('#duty_position').val();

		$.ajax({
			url: 'php/emp_duty_allocation2.php',
			type: 'POST',
			data: {'duty_eid':duty_eid, 'duty_office':duty_office, 'duty_position':duty_position },
			success: function(data)
			{
					alert(data);
			},
			cache: false
		});//end of ajax function
	});
});