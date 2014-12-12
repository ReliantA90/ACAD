$(document).ready(function(){
 $('#duty_eid').on('keyup',function(){

	var duty_eid = $('#duty_eid').val();

	$.ajax({
		url: 'php/counter.php',
		type: 'POST',
		data: { 'duty_eid': duty_eid },
		success: function() {
			
		}
								
		});
});
 });