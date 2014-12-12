$(document).ready(function(){
  $('#entry_sub_btn').on('click',function(e){
    
    e.preventDefault();
    e.stopPropagation();

   
   var entry_isbn = $('#entry_isbn').val();
   var entry_subject= $('#entry_subject').val();
   var entry_book_name = $('#entry_book_name').val();
   var entry_author = $('#entry_author').val();
   var entry_publisher = $('#entry_publisher').val();
   var entry_edition = $('#entry_edition').val();
   var entry_copies = $('#entry_copies').val();
   var entry_cost = $('#entry_cost').val();
   var entry_catalog = $('#entry_catalog').val();
   
   
     
   $.ajax({
      url: 'php/lib_book_reg.php',
      type: 'post',
      data: { 'entry_isbn':entry_isbn, 'entry_subject':entry_subject, 'entry_book_name':entry_book_name, 'entry_author':entry_author, 
      'entry_publisher':entry_publisher, 'entry_edition':entry_edition,'entry_copies':entry_copies, 'entry_cost':entry_cost,
      'entry_catalog':entry_catalog},
      success: function(data) {
        alert(data);

      },
      cache: false
    }); // end ajax call
   
   });
});