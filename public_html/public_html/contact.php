<?php
/*if($_POST["message"]) {
    mail("steve24244@gmail.com", "Form to email message", $_POST["message"], "From: an@email.address");
}*/


if($_POST["submit"]) {
    $recipient="steve@steveauman.com";
    $subject="Form to email message";
    $sender=$_POST["Name"];
    $senderEmail=$_POST["email"];
    $message=$_POST["Message"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}
?>
<!DOCTYPE html>

<html lang="en">
<head>
  <title>Steve Auman</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet"href="CSS.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/js/bootstrapValidator.min.js"></script>
  <!--Jumbotron Fade Script-->
  <script> 
	var jumboHeight = $('.jumbotron').outerHeight();
	function parallax(){
		var scrolled = $(window).scrollTop();
		$('.bg').css('height', (jumboHeight-scrolled) + 'height');
	}
	$(window).scroll(function(e){
    parallax();
	});
	
  <!--Form Check-->
	$('#contact-form').bootstrapValidator({
//        live: 'disabled',
        message: 'This value is not valid',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            Name: {
                validators: {
                    notEmpty: {
                        message: 'The Name is required and cannot be empty'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'The email address is required'
                    },
                    emailAddress: {
                        message: 'The email address is not valid'
                    }
                }
            },
            Message: {
                validators: {
                    notEmpty: {
                        message: 'The Message is required and cannot be empty'
                    }
                }
            }
        }
    });
  </script>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
<!--Nav Bar-->
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="default.html">Home</a>
	  <a class="navbar-brand" href="contact.php">Contact</a>
	  <a class="navbar-brand" href="#">Top</a>
    </div>

    </div>
  </div>
</nav>
<!--Title/top page-->
<div class="bg"></div>
<div class="jumbotron text-center">
  <h1>Get In Touch</h1>
  <p class ="lead"></p>
</div>






<!-- Form Name -->


<!-- Form  -->
<div class="container-fluid text-center">
<p>Have Questions or want to reach out? Feel free to contact me about anything from questions to just getting in contact. You can either email me directly at steve@steveauman.com or fill out the form below. I'll try to get back to you as soon as possible. 
	<div class="row">
		<form role="form" id="contact-form" class="contact-form" method="post" action="contact.php">
                    <div class="row">
                		<div class="col-md-6">
                  		<div class="form-group">
                            <input type="text" class="form-control" name="Name" autocomplete="off" id="Name" placeholder="Name">
                  		</div>
                  	</div>
                    	<div class="col-md-6">
                  		<div class="form-group">
                            <input type="email" class="form-control" name="email" autocomplete="off" id="email" placeholder="E-mail">
                  		</div>
                  	</div>
                  	</div>
                  	<div class="row">
                  		<div class="col-md-12">
                  		<div class="form-group">
                            <textarea class="form-control textarea" rows="3" name="Message" id="Message" placeholder="Message"></textarea>
                  		</div>
                  	</div>
                    </div>
                    <div class="row">
                    <div class="col-md-12">
                  <button type="submit" name ="submit" value= "submit" class="btn main-btn pull-right">Send a message</button>
                  </div>
                  </div>
                </form>
	</div>
</div>


</body>
</html>
