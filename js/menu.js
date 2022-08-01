$(document).ready(function(){
	var i = 0;
   function buttonClick(id1,id2) {
       i++;
       document.getElementById('inc').value = i;
       document.getElementById('inc1').value = i;
        $("#"+id2).show();
         $("#"+id1).hide();
       if(i>=1)
       {
         $("#faki1").show();
       }
       // else if(i<1)
       // {
       //   $("#faki1").hide();
       // }
// 

   }
   function Click(id1,id2) {
       i--;
       document.getElementById('inc').value = i;
       document.getElementById('inc1').value = i;
       if(i==0)
       {
         $("#"+id1).show();
         $("#"+id2).hide();
         $("#faki1").hide();
       }
     }
     function toggleSidebar() {
     document.getElementById("sidebar").classList.toggle("active");
      // document.getElementByClass("toggle-btn").classList.toggle("active");
     }
     

  $('#inst').attr('disabled', true);
  $('#instruct').on('keyup',function() {
    if($(this).val() != '') {
        $('#inst').attr('disabled' , false);
    }else{
        $('#inst').attr('disabled' , true);
    }
});
 

 $('.label_trans input').focus(function(){
          $(this).parent().addClass('focused');
        });
        $('.label_trans input').blur(function(){
          var inputValue = $(this).val();
          if ( inputValue == "" ) {
            $(this).parent().removeClass('focused');
          }
        });

        function goBack() {
  window.history.back();
}

 });