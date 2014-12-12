$(document).ready(function(){
  $('#vitbtn').on('click',function(e){

    e.preventDefault();
    e.stopPropagation();

   var vnme = $('#vnme').val();
   var vmono = $('#vmono').val();
   var qry = $('#qry').val();
  
   
   $.ajax({
      url: 'php/v_entry.php',
      type: 'post',
      data: { 'vnme':vnme, 'vmono':vmono, 'qry':qry },
      success: function(data) {
        
        sweetAlert("Message",data,"success");

      },
      cache: false
    }); // end ajax call
   });
});