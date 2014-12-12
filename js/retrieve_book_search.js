$(document).ready(function(){
  var count = 0;

  $.getJSON('php/retrieve_book_search.php',function(data){
    if(count == 0 ){
      $.each(data,function(key,value){

        $.each(value,function(k,v){
          if(k == "l_book_name"){
            $('#search_book_name').append("<option>"+v+"</option>");
          }
          if(k == "l_book_subject"){
            $('#search_subject').append("<option>"+v+"</option>");
          }
          if(k == "l_book_author"){
            $('#search_author').append("<option>"+v+"</option>");
          }
          if(k == "l_book_publisher"){
            $('#search_publisher').append("<option>"+v+"</option>");
          }
        });

      });
    }
    count++;
  });/*end of get_JSON*/  
});/*end of main function*/