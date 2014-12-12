$(document).ready(function(){
  $('#osdbtn').on('click',function(e){

    e.preventDefault();
    e.stopPropagation();

   var spname = $('#spname').val();
   var stype = $('#stype').val();
   var con = $('#con').val();
   var contd = $('#contd').val();
   var cos = $('#cos').val();
   var sdate = $('#sdate').val();
   var edate = $('#edate').val();
   
   $.ajax({
      url: 'php/ossd_entry.php',
      type: 'post',
      data: { 'spname':spname,'stype':stype,'con':con,'contd':contd,'cos':cos,'sdate':sdate,'edate':edate },
      success: function(data) {
        
        sweetAlert("Message",data,"success");


      },
      cache: false
    }); // end ajax call
   
   });
});