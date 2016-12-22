// Set to true to use full width mode
MsgPop.displaySmall = true;

// Custom the postion
MsgPop.position = "top-right";



// Call the plugin
$("#notification").click(function(){
	var image=$(".img-responsive header_avatar");
	MsgPop.open({
		// Options
		Type:  "success",
		Content:"<div><img class='imgNotif' src='/images/merlin.jpg'> Merlin à liker votre post</div>",
		//AutoClose:false,
	});	
});


