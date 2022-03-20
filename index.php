<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/favicon">
    <title>SR Academy Landing page</title>
	  <link rel="stylesheet" href="css/style.css">
	   <link rel="stylesheet" href="css/responsive.css">
	  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">	
		<link href="https://fonts.googleapis.com/css2?family=Inter&amp;display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>
<nav class="navbar navbar-inverse nav_menu navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#"><img src="images/logo-sra.png"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav menu_iteam">
        <li class="active"><a href="#sec3">Features</a></li>
        <li><a href="#sr_course">How this works</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right menu_iteamrt">
        <li><a href="https://play.google.com/store/apps/details?id=com.sr.sr_academy"><img src="images/icon/google playstore.png"></a></li>
        <li><a href="#"><img src="images/icon/apple-store1.png"></a></li>
      </ul>
    </div>
  </div>
</nav>

<section class="sra_sec1">
	<div class="container">
	<div class="row sec1_leftsec">
		<div class="col-md-6 col-sm-6 sec1_lefttop">
		<div class="row ace">
			<h1>Ace your preparation with SR Academy</h1>
			<p>Your journey to entrance starts here! Join SR Academy’s uniquely designed course to get an unmatched learning experience.  </p>
		</div>
		<div class="row" >
		<?php
			if(isset($_POST['sendopt'])) {
				require('textlocal.class.php');
				require('credential.php');

				$textlocal = new Textlocal(false, false, API_KEY);

                // You can access MOBILE from credential.php
				// $numbers = array(MOBILE);
                // Access enter mobile number in input box
                $numbers = array($_POST['mobile']);

				$sender = 'SRACAD';
				$otp = mt_rand(10000, 99999);
				$message = "Dear User, $otp is your OTP for SR Academy - SRACAD";

				try {
				    $result = $textlocal->sendSms($numbers, $message, $sender);
				    setcookie('otp', $otp);
				    echo "OTP successfully send..";
				} catch (Exception $e) {
				    die('Error: ' . $e->getMessage());
				}
			}

			if(isset($_POST['verifyotp'])) { 
				$otp = $_POST['otp'];
				if($_COOKIE['otp'] == $otp) {
					//echo "Congratulation, Your mobile is verified.";
                    header("Location: http://65.2.29.123/");
				} else {
					echo "Please enter correct otp.";
				}
			}
		?>
		
			<div class="enq_form" style="">
			<h4>Avail Free Live Classes for 2 Days</h4>
				 <form method="post" enctype="multipart/form-data">
					<input type="textl" class="form-control" id="email" placeholder="Name" name="uname" required>
					<input type="text" class="form-control" id="city" placeholder="city" name="city" required>
                    <input type="text" class="form-control" id="mobile" name="mobile" value="" maxlength="10" placeholder="Phone Number"  required="">
					<button type="submit" name="sendopt" class="btn btn-lg btn-success btn-block" style="margin-top:10px;">Send OTP</button>
				</form>
		<form method="POST" action="">
            <div class="row">
                <div class="col-sm-12 form-group">
                 <input type="text" class="form-control" id="otp" name="otp" placeholder="Enter OTP" maxlength="5" required="">
                </div>
            </div>
             <div class="row">
                <div class="col-sm-12 form-group">
                    <button type="submit" name="verifyotp" class="btn btn-lg btn-info btn-block">Submit</button>
                </div>
            </div>
        </form>
			</div>

			<div class="sec1_bt"><a href="https://play.google.com/store/apps/details?id=com.sr.sr_academy"><input type="button" class="get_started" value="Download App"> </a><span class="watch_video"><a href="#"><img src="images/icon/play.png"> Watch Video</a></span></div>
			</div>
			
		</div>
		<div class="col-md-6 col-sm-6 sec1_righttop">
			<img src="images/Phone Mockup.png" class="img-responsive mock_up">
		</div>
	</div>
	</div>
</section>

<section class="sra_sec2">
	<div class="container">
		<div class="col-md-2 col-sm-2 col-xs-6 sec2_icon">
			<img src="images/icon/_Client-logo.jpg">
		</div>
		<div class="col-md-2 col-sm-2 col-xs-6 sec2_icon">
			<img src="images/icon/_Client-logo1.jpg">
		</div>
		<div class="col-md-2 col-sm-2 col-xs-6 sec2_icon">
			<img src="images/icon/_Client-logo2.jpg">
		</div>
		<div class="col-md-2 col-sm-2 col-xs-6 sec2_icon">
			<img src="images/icon/_Client-logo3.jpg">
		</div>
		<div class="col-md-2 col-sm-2 col-xs-6 sec2_icon">
			<img src="images/icon/_Client-logo4.jpg">
		</div>
		<div class="col-md-2 col-sm-2 col-xs-6 sec2_icon">
			<img src="images/icon/_Client-logo5.jpg">
		</div>
	</div>
</section>

<section class="sra_sec3" id="sec3">
	<div class="container">
		<div class="row sec3_row">
			<h3>Change the learning method with</h3>
			<h2> The SR Academy App</h2>
				</div>
		<div class="row sec3_r">
			<div class="col-md-4 sec3_r1">
				<img src="images/icon/teaching.png" width="50px" height="50px">
				<h4>Live interactive lectures </h4>
				<p>Pace your learning with interactive lectures. Learn tips, tricks, and chapters with examples from the experienced faculty.</p>
			</div>
			<div class="col-md-4 sec3_r1">
				
				<img src="images/icon/online-counseling.png" width="50px" height="50px">

				<h4>Separate doubt sessions</h4>
				<p>Keep the concepts clear, clear all your doubts in the doubt session. Weekly subject-wise doubt sessions help in matching the pace and learning for every examination.</p>
			</div>
			<div class="col-md-4 sec3_r1">
				<img src="images/icon/timing.png" width="50px" height="50px">
				<h4>Real-time analysis </h4>
				<p>The application hosts numerous tests of every subject that can help you in testing your learnings. Once the test is complete you can easily check and analyze the results and performance.</p>
			</div>
			<div class="col-md-4 sec3_r1">
				<img src="images/icon/course.png" width="50px" height="50px">
				<h4>Offline availability of lectures</h4>
				<p>Nothing can stop you when you are with the best coaching institute. SR Academy app offers access to lectures offline. The student can easily download the lecture and watch it whenever required.
</p>
			</div>
			<div class="col-md-4 sec3_r1">
				<img src="images/icon/Doudth.png" width="50px" height="50px">
				<h4>Custom feed as per course progress</h4>
				<p>We monitor your progress and help you every time to move forward. The app shows suggested lectures or recommendations based on your search and course progress.
</p>
			</div>
			<div class="col-md-4 sec3_r1">
				<img src="images/icon/book.png" width="50px" height="50px">
				<h4>Subject-wise progress tracker</h4>
				<p>To reach the goal you have to stay dedicated and keep on analyzing the progress. With the SR Academy application, you can easily check the progress of every subject. 
</p>
			</div>
		</div>
	</div>
</section>

<section class="sr_sec4">
	<div class="container">
		<div class="testimonial-06">
  <div class="flex-col">
    <div class="overlap-group1">
      <img class="quote-mark-1" src="images/icon/quote-mark-1.png">
      <div class="section-heading-1">
        <div class="section-titleinter-bold-mirage-48px">
          <span class="inter-bold-mirage-48px">Success Stories </span>
        </div>
        <div class="description-1inter-normal-mirage-18px">
          <span class="inter-normal-mirage-18px">Get inspired by these stories.</span>
        </div>
      </div>
    </div>
    <div class="testimonial-item">
      <img class="client-logo" src="images/icon/_test-logo.jpg">
      <div class="content-1">
        <img class="quote-mark" src="images/icon/quote-2.png">
        <div class="feedback-person-details">
          <div class="feedbackinter-normal-mirage-18px">
            <span class="inter-normal-mirage-18px">I believe that joining SR Academy was the best decision of my life. I have always underestimated the syllabus and the competition of entrance exams, but now after successfully securing a seat after my first NEET attempt. I would like to recommend everyone to join SR Academy. </span>
          </div>
           </div>
      </div>
    </div>
  </div>
  <div class="testimonial-item-container">
    <div class="testimonial-item-1">
      <img class="client-logo" src="images/icon/_test-logo1.jpg">
      <div class="content-3">
        <img class="quote-mark" src="images/icon/quote-2.png">
        <div class="feedback-person-details-1">
          <div class="feedback-1inter-normal-mirage-18px">
            <span class="inter-normal-mirage-18px"> Managing everything all together in a limited time was tough. With the aim to save time I joined an online course for IIT-JEE. The course has helped in saving my time and energy. Moreover, the teachers have been very supportive throughout my preparation.

</span>
          </div>
               </div>
      </div>
    </div>
    <div class="testimonial-item-2">
      <img class="client-logo" src="images/icon/_test-logo2.jpg">
      <div class="content-1">
        <img class="quote-mark" src="images/icon/quote-2.png">
        <div class="feedback-person-details-2">
          <div class="feedback-2inter-normal-mirage-18px">
            <span class="inter-normal-mirage-18px">Everything that I have expected from SR Academy was apt. The teachers have played a very important role in my success. I am really thankful to all the people associated with SR Academy. 

</span>
          </div>
          
        </div>
      </div>
    </div>
  </div>
</div>
		
		
	</div>
</section>

<section class="sr_course" id="sr_course">
	<div class="container">
		<div class="col-md-5 col-sm-5">
		<div class="course_heading">
				<span>Unlock the new world of learning</span>
			</div>
			<div class="course_dec">
				<p>Learning may take time but registering for the SR Academy application is very easy. You are just three steps away from unlocking the journey to the entrance examination. Here is what you have to do:  </p>
			</div>
		</div>
		<div class="col-md-7 col-sm-7 app_store">
		<div class="col-md-4 col-sm-4 col-xs-12"><img src="images/mob_s1.jpg" class="img-responsive "></div>
		<div class="col-md-4 col-sm-4 col-xs-12"><img src="images/mob_s2.jpg" class="img-responsive mob_img" ></div>
		<div class="col-md-4 col-sm-4 col-xs-12"><img src="images/mob_s3.jpg" class="img-responsive mob_img"></div>
		</div>
	</div>
</section>




<section class="sr_sec5">
	<div class="container">
		<div class="col-md-6 col-sm-6 sec5_left">
			<div class="sec5_heading">
				<span>Still need clarification? </span>
			</div>
			<div class="sec5_dec">
				<p>No worries, our customer support executives will help you in clarifying each doubt before the enrollment. Request a callback or call us directly on the contact number listed below.</p>
			</div>
		</div>
	
		<div class="col-md-6 col-sm-6 sec5_right">
			<img src="images/con_logos.png" class="img-responsive">
		</div>
		</div>
</section>

<section class="sr_sec6">
	<div class="container">
		<div class="col-md-6 col-sm-6 sec6_left">
			<div class="sec6_heading">
				<span>Start preparing today with one of the best learning application</span>
			</div>
			<div class="sec6_dec">
			<p>With our unique teaching methodology and user-friendly interface. We believe there is nothing gonna stop you from cracking the toughest entrance exam.  </p>
			</div>
			<div class="sec6_bt">
				<span>Get the App</span>
			</div>
			<div class="badges">
				<a href="https://play.google.com/store/apps/details?id=com.sr.sr_academy"><img class="store-badge-3" src="images/icon/google playstore.png"></a><img class="store-badge" src="images/icon/apple-store1.png">
			</div>
		</div>
		<div class="col-md-6 col-sm-6">
			<div class="image">
			<div class="col-md-6">
				<img class="phone-mockup-1" src="images/Phone Mockup 1.png">
			</div>
			<div class="col-md-6">
				<img class="images/phone-mockup-2" src="images/Phone Mockup 2.png">
			</div>
			</div>
		</div>
	</div>
</section>

<section class="footer">
	<div class="container">
	<div class="col-md-9">
	<img src="images/logo_white.png" class="img-responsive" width="140px">
	<div class="footer_s1">
		<ul>
			<li><a href="https://play.google.com/store/apps/details?id=com.sr.sr_academy">Download Now</a></li>
			<li class="s1_lft"><a href="https://www.sracademy.co/about">About Us</a></li>
		</ul>
	</div>
	<!---
	<div class="footer_s2">
		<ul>
			<li><a href="">About</a></li>
			<li class="s1_lft"><a href="">Features</a></li>
			<li class="s1_lft"><a href="">Pricing</a></li>
			<li class="s1_lft"><a href="">News</a></li>
			<li class="s1_lft mob1"><a href="">Help</a></li>
			<li class="s1_lft"><a href="">Contact</a></li>

			
		</ul>
	</div>
	--->
	<div class="footer_s3">
	<span class="copyright">© 2022 SR Academy. All Rights reserved.</span>
	</div>
	</div>
	
		<div class="col-md-3">
		<div class="footer_bt">
				<span>Get the App</span>
			</div>
		<div class="badges4">
				<a href="https://play.google.com/store/apps/details?id=com.sr.sr_academy"><img class="store-badge-4" src="images/icon/google playstore.png"></a>
				<br>
				<img class="store-badge4.1" src="images/icon/apple-store2.png">
			</div>
	</div>

</div></section>


<script>
function validateForm() {
  let x = document.forms["myForm"]["name"].value;
  if (x == "") {
    alert("Name must be filled out");
    return false;
  }
}
</script>

</body></html>