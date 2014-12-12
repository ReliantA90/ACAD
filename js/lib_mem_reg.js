$(document).ready(function(){
  $('#mem_reg_btn').on('click',function(e){
    
    e.preventDefault();
    e.stopPropagation();

   // var eid = $('#eid').val();
   var mem_full_name = $('#mem_full_name').val();
   var mem_fat_name = $('#mem_fat_name').val();
   var mem_mot_name = $('#mem_mot_name').val();
   var mem_dob = $('#mem_dob').val();
   var mem_phone_no = $('#mem_phone_no').val();
   var mem_email_id = $('#mem_email_id').val();
   var mem_gender = $('#mem_gender').val();
   var mem_designation = $('#mem_designation').val();
   var mem_permanent_address = $('#mem_permanent_address').val();
   var mem_mail_address = $('#mem_mail_address').val();
   
     
   $.ajax({
      url: 'php/lib_mem_reg.php',
      type: 'post',
      data: { 'mem_full_name':mem_full_name, 'mem_fat_name':mem_fat_name, 'mem_mot_name':mem_mot_name, 'mem_dob':mem_dob, 
      'mem_phone_no':mem_phone_no, 'mem_email_id':mem_email_id, 'mem_gender':mem_gender, 'mem_designation':mem_designation,
      'mem_permanent_address':mem_permanent_address, 'mem_mail_address':mem_mail_address },
      success: function(data) {
        alert(data);

      },
      cache: false
    }); // end ajax call
   
   });
});