<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>图片上传demo</title>
	<link rel="stylesheet" type="text/css" href="/tp3/thinkphp/Public/css/upload.css">
</head>
<body>
    <div class="wrap">
    <h1> AJAX图片上传 </h1>
     <form  method="post"  enctype="multipart/form-data" class="form">
     	
     		
     	
     	    <div class="upload_btn">
     	    	
     	    </div>
     </form>
     	

     </div>
	
</body>
</html>
<script type="text/javascript" src="/tp3/thinkphp/Public/js/jquery-1.11.3.min.js"></script>
<script type="text/javascript">
	(function(){
           $(".upload_btn").click(function(){
            $(".file").remove();
           	$(".form").append("<input type='file' class='file' name='image' multiple=multiple />")
            
           	$(".file").click();
           	$(".file").change(function(){
            
           	var form=$(".form");
             var formdata=new FormData(form[0]);
               $.ajax({
				  url: "Home/Index/upload",
				  type: "POST",
				  data: formdata,
				  processData: false,  
				  contentType: false ,
				  success:function(data){
                   if(data.msg==1){
                   
                    alert("图片上传成功")
                   }else{
                   
                    alert("图片失败");
                   }    
				  }
				});
           	})
           })


	})(jQuery);
</script>