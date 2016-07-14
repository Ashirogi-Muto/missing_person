$(document).ready(function(){
	//redirection to home page
   $(".home").click(function(){
   		console.log("Home clicked");
		window.location.href = 'index.php';
	});
   //redirection to post page
   $("#post").click(function(){
   		window.location.href = 'post.php';
   });
});