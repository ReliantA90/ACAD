$(document).ready(function(){
  var count = 0;

  $.getJSON('php/retrieve_user_category.php',function(data){
    if(count == 0 ){
      $.each(data,function(key,value){

        $.each(value,function(k,v){
          if(k == "u_cat"){
            $('#user_category').append("<option>"+v+"</option>");
          }
         
        });

      });
    }
    count++;
  });/*end of get_JSON*/  
});/*end of main function*/