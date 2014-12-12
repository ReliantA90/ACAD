$(document).ready(function(){
  $('#stubtn').on('click',function(e){
    
    e.preventDefault();
    e.stopPropagation();

   var sname = $('#sname').val();
   var slname= $('#slname').val();
   var sgen = $('#sgen').val();
   var sdob = $('#sdob').val();
   var spob = $('#spob').val();
   var snat = $('#snat').val();
   var slsah = $('#slsah').val();
   var sols = $('#sols').val();
   var sha = $('#sha').val();
   
   var sphn = $('#sphn').val();
   var semail = $('#semail').val();
   var ssaf = $('#ssaf').val();
   var seca = $('#seca').val();
   var srd = $('#srd').val();
   var sps = $('#sps').val();
   var sadd = $('#sadd').val();
   var sda = $('#sda').val();
   var sstd = $('#sstd').val();
   var sphno = $('#sphno').val();
   var sloi = $('#sloi').val();
   var sfat = $('#sfat').val();
   var smot = $('#smot').val();
   
   var shadd = $('#shadd').val();
   var sfpno = $('#sfpno').val();


   var sfemail = $('#sfemail').val();
   var sgn = $('#sgn').val();
   var sgha = $('#sgha').val();
   var sgpno = $('#sgpno').val();
   var sgemail = $('#sgemail').val();
   
     
   $.ajax({
      url: 'php/stu_reg.php',
      type: 'post',
      data: { 'sname':sname, 'slname':slname, 'sgen':sgen, 'sdob':sdob, 'spob':spob, 'snat':snat, 
      'slsah':slsah, 'sols':sols, 'sha':sha, 'sphn':sphn, 'semail':semail, 'ssaf':ssaf, 
      'seca':seca, 'srd':srd, 'sps':sps, 'sadd':sadd, 'sda':sda, 'sstd':sstd, 'sphno':sphno,
      'sloi':sloi, 'sfat':sfat, 'smot':smot, 'shadd':shadd, 'sfpno':sfpno, 'sfemail':sfemail,
      'sgn':sgn, 'sgha':sgha, 'sgpno':sgpno, 'sgemail':sgemail },

    success: function(data) {
        alert(data);

      },
      cache: false
    }); // end ajax call
   
   });
});