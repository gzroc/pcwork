$(document).ready(function(){

	
  $('#add').click(function(){
                    $('#addtable').fadeIn();
                    $('#addtable').fadeIn("slow");
                    $('#addtable').fadeIn(3000);
                    $('#quxiao').fadeIn();
                    $('#quxiao').fadeIn("slow");
                    $('#quxiao').fadeIn(3000); 

                  });
   $('#quxiao').click(function(){
                    $('#addtable').fadeOut();
                    $('#addtable').fadeOut("slow");
                    $('#addtable').fadeOut(3000);
                    $('#quxiao').fadeOut();
                    $('#quxiao').fadeOut("slow");
                    $('#quxiao').fadeOut(3000);
                  });
     $('#adddep').click(function(){
                    $('#deptable').fadeIn();
                    $('#deptable').fadeIn("slow");
                    $('#deptable').fadeIn(3000);
                    $('#quxiaodep').fadeIn();
                    $('#quxiaodep').fadeIn("slow");
                    $('#quxiaodep').fadeIn(3000);
                  });
   $('#quxiaodep').click(function(){
                    $('#deptable').fadeOut();
                    $('#deptable').fadeOut("slow");
                    $('#deptable').fadeOut(3000);
                    $('#quxiaodep').fadeOut();
                    $('#quxiaodep').fadeOut("slow");
                    $('#quxiaodep').fadeOut(3000);
                  });

$(".radio-inline").change(function() {
          var $selectedvalue = $("input[name='c_state']:checked").val();
         //alert($selectedvalue);
          if ($selectedvalue == 2) {
                    $('#bujian').fadeIn();
                    $('#bujian').fadeIn("slow");
                    $('#bujian').fadeIn(3000);
          }else
          {
                    $('#bujian').fadeOut();
                    $('#bujian').fadeOut("slow");
                    $('#bujian').fadeOut(3000);
          }
        });   

               
    $('.lingqu').click(function(){
                          if(confirm("确定机器修好已经领走？")){
                                       if(confirm("确定机器修好已经领走？")){
                                              window.location.href="index.php";
                                       }
                       }
       });
        $('.print').click(function(){
                          if(confirm("确认打印")){
                       }

       });

});

