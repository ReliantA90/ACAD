$(document).ready(function(){
  $('#return_sub_btn').prop('disabled', true);
  $('#return_sub_btn').on('click',function(e){
    
    e.preventDefault();
    e.stopPropagation();

   var return_book_isbn = $('#return_book_isbn').val();
   var return_member_id = $('#return_member_id').val();
   var return_issue_date = $('#return_issue_date').val();
   var return_due_date = $('#return_due_date').val();
   var return_date = $('#return_date').val();
   var return_fine = $('#return_fine').val();
     
   $.ajax({
      url: 'php/lib_book_return.php',
      type: 'post',
      data: { 'return_book_isbn':return_book_isbn, 'return_member_id':return_member_id, 
      'return_issue_date':return_issue_date, 'return_due_date':return_due_date, 'return_date':return_date,
      'return_fine':return_fine },
      success: function(data) {
        alert(data);

      },
      cache: false
    }); // end ajax call
   
   });
});



/*on return_book_isbn dropdown change event*/
$(document).ready(function(){
  $('#return_book_isbn').on('change',function(e){
    
    e.preventDefault();
    e.stopPropagation();

   var return_book_isbn = $('#return_book_isbn').find(':selected').val();
   // var return_member_id = $('#return_member_id').find(':selected').val();
     
   $.ajax({
      url: 'php/book_return1.php',
      type: 'post',
      data: { 'return_book_isbn':return_book_isbn },
      success: function(data) {

        if(data==0){
          sweetAlert("Message","This book is not issued","error");
          $('#return_sub_btn').prop('disabled', true);
        }
        else
        {
          $('#return_sub_btn').prop('disabled', false);
          
        }

      },
      cache: false
    }); // end ajax call
   
   });
});


// /*on return_member_id dropdown change event*/
$(document).ready(function(){

  $('#return_member_id').on('change',function(e){
    
    e.preventDefault();
    e.stopPropagation();

   var return_member_id = $('#return_member_id').find(':selected').val();
     
   $.ajax({
      url: 'php/book_return1.php',
      type: 'post',
      data: { 'return_member_id':return_member_id },
      success: function(data) {
        if(data == 0){
          sweetAlert("Message","No Book issued to this member","error");
          $('#return_sub_btn').prop('disabled', true);
        }
        else
        {
          $('#return_sub_btn').prop('disabled', false);
        }

      },
      cache: false
    }); // end ajax call
   
   });
});