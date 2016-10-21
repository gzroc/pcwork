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

               
    $('.lingqu_id').click(function(){
                          if(confirm("确定机器修好已经领走？")){
                                       if(confirm("确定机器修好已经领走？")){
                                            
                                            var t=$('.lingqu_id').val();
                                            window.location.href='index.php?id='+t;
                                            alert (t+'号机器被领走');
                                       }else
                                       {
                                           refresh();
                                       }
                       }
       });
        

        $('.print_id').click(function(){
                           if(confirm("确认打印"))
                       {

                            var t=$('.print_id').val();
                            window.location.href='work.php?id='+t;
                       }
                       else
                        {
                             refresh();
                       }

       });            

          jQuery.validator.addMethod("isMobile", function(value, element) {
              var length = value.length;
              var mobile = /^(13[0-9]{9})|(18[0-9]{9})|(14[0-9]{9})|(17[0-9]{9})|(15[0-9]{9})$/;
              return this.optional(element) || (length == 11 && mobile.test(value));
          }, "请正确填写您的手机号码");




            $("#songxiu").validate({
              errorPlacement: function(error, element) {
    
      $( element )
        .closest( "form" )
          .find( "label[for='" + element.attr( "id" ) + "']" )
            .append( error );
    },
    errorElement: "span",
          rules:{
                          p_name:"required",
                          p_photo:{
                          required : true,
                          digits:true,
                          minlength : 11,
                          isMobile : true
                           },
                           c_fault:{
                            required:true,
                            minlength:10
                           }
                       },    

                     messages: {
                          p_name: "请输入您的名字",
                          p_photo: {
                              required : "请输入手机号",
                              minlength : "确认手机不能小于11个字符",
                              digits:"请输入数字",
                              isMobile : "请正确填写您的手机号码"
                                      },
                          c_fault:{
                            required:"请填写详细的问题所在，方便维修人员修理",
                            minlength:"最少输入10个字符"
                                     }
                         }
               

          });  


              $("#denglu").validate({
              errorPlacement: function(error, element) {
    
      $( element )
        .closest( "form" )
          .find( "label[for='" + element.attr( "id" ) + "']" )
            .append( error );
    },
    errorElement: "span",
          rules:{
                          p_no:"required",
                          p_psw:{
                          required : true,
                           },
                        
                       },    

                     messages: {
                          p_no: "请输入您的用户名",
                          p_psw: {
                              required : "请输入您的密码",
                                      },
                           }
               

          });  
});

