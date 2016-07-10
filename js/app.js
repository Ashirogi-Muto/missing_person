$(document).ready(function(){
	//redirection to home page
   $(".home").click(function(){
   		console.log("Home clicked");
		window.location.href = 'index.php';
	});
   //redirection to find page
   /*$("#find").click(function(){
   		window.location.href = 'find.php';
   });
   */
   //uploading the information except the image
  /* $("#submit").click(function(){
   		var fullName = $("#fullName").val();
   		var age = $("#age").val();
   		var gender = $("#gender").val();
   		var dateOfMissing = $("#date").val();
   		var info = $("#info").val();
   		var image = $("#image").val();
   		//making a data string to pass to the php script
   		var dataString="fullName="+fullName+"&age="+age+"&gender="+gender+"&dom="+dateOfMissing+"&info="+info+"&image="+image;
   		//ajax call to submit the information
   		$.ajax({
   			method : "POST",
   			dataType : "json",
   			url : "http://127.0.0.1/missing/uploadInfo.php",
   			data : dataString,
   			beforeSend : function(){
   				console.log(dataString);
   			},
   			success : function(){
   				$('#postForm')[0].reset();//success notification
   				$("#notify").html("<div class='alert alert-success'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Success!</strong> Information uploaded successfully.</div>");
   			},
   			error : function(){
   				$('#postForm')[0].reset();//failed notification
   				$("#notify").html("<div class='alert alert-danger'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Failed!</strong> Something went wrong. Please try again.</div>");
   			}
   		});
   });*/
	
	$('#submit').click(function(){
		$.ajax({
			method: "POST",
			data: $('#postForm').serialize(),
	        url: "uploadInfo.php",
	        beforeSend : function(){
	        	localStorage.setItem('info',$('#postForm').serialize());
	        },
	        success: function (data) {
	        		$('#postForm')[0].reset();//success notification
	   				$("#notify").html("<div class='alert alert-success'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Success!</strong> Information uploaded successfully.</div>");
	   				console.log(data.status);
	        },
	        error : function(data){
	   				$('#postForm')[0].reset();//failed notification
	   				$("#notify").html("<div class='alert alert-danger'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Failed!</strong> Something went wrong. Please try again.</div>");
	   				console.log(data.responseText);
	   			}
   			 });
		});
});