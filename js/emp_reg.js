$(document).ready(function(){
  $('#empbtn').on('click',function(e){
    
    e.preventDefault();
    e.stopPropagation();

   // var eid = $('#eid').val();
   var ename = $('#ename').val();
   var elname= $('#elname').val();
   var edob = $('#edob').val();
   var epob = $('#epob').val();
   var egen = $('#egen').val();
   var efat = $('#efat').val();
   var emot = $('#emot').val();
   var epadd = $('#epadd').val();
   var etadd = $('#etadd').val();
   var ecno = $('#ecno').val();
   var eemail = $('#eemail').val();
   var edor = $('#edor').val();
   var eeduc = $('#eeduc').val();
   var espcl = $('#espcl').val();
   var eextra = $('#eextra').val();
   var egoi = $('#egoi').val();
   var eachieve = $('#eachieve').val();
   
     
   $.ajax({
      url: 'php/emp_reg.php',
      type: 'post',
         data: { 'ename':ename, 'elname':elname, 'edob':edob, 'epob':epob, 'egen':egen, 'efat':efat,
              'emot':emot, 'epadd':epadd, 'etadd':etadd, 'ecno':ecno, 'eemail':eemail, 'edor':edor, 
              'eeduc':eeduc, 'espcl':espcl,'eextra':eextra,'egoi':egoi,'eachieve':eachieve },
      // data: { 'ename':ename, 'elname':elname, 'edob':edob, 'epob':epob, 'egen':egen, 'efat':efat,
      //         'emot':emot, 'epadd':epadd, 'etadd':etadd, 'ecno':ecno, 'eemail':eemail, 'edor':edor,
      //         'eeduc':eeduc,'espcl':espcl,'eextra':eextra,'egoi':egoi,'eachieve':eachieve },
      success: function(data) {
        alert(data);

      },
      cache: false
    }); // end ajax call
   
   });
});