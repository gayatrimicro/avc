<!doctype html>
<html lang="en-AU">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="manifest" href="">
		<meta name="msapplication-TileColor" content="">
		<meta name="msapplication-TileImage" content="">
		<meta name="theme-color" content="#00ADEE">
		<title>Contact</title>
		<link rel="canonical" href="" />
		<meta property="og:locale" content="" />
		<meta property="og:type" content="" />
		<meta property="og:title" content="" />
		<meta property="og:url" content="" />
		<meta property="og:site_name" content="" />
		<meta name="twitter:card" content="" />
		<meta name="twitter:title" content="" />
		<link rel='stylesheet' id='theme-css'  href='../css/theme.min3aa8.css' type='text/css' media='all' />
		<script type='text/javascript' src='https://widgets.healcode.com/javascripts/healcode.js?ver=1.9'></script>
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="../css/contact.css">
	</head>
	<body>
		<div id="page" class="site">
			<?php
			include("../header.php");
			?>
			<div id="content" class="site-content">
				<section class="page-heading">
					<div class="container-inner">
						<div class="row">
							<div class="col-xs-12 col-md-8 col-md-offset-2">
								<div class="top-heading">
									<h1>Health and Fitness Goals?</h1>
									<p>Whether you would like to get started with your health and fitness goals or just need some more information, we are here to help! You can contact us through our online enquiry form below or give us a call on 1300 362 311</p>
									<div class="btns">
									</div>
								</div>
							</div>
						</div>
					</div>
					<svg class="svg-bg" width="2200" height="288" aria-hidden="true" role="img" focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2200 288" enable-background="new 0 0 2200 288"><path class="cls-2" d="M-274.2-127.1V11.6H1.1c103.9,0,215.6,9.8,335.8,28.9c216.8,34.4,439.4,53.6,667.7,57.4 c121.8,2.2,252.9,2.5,432.5,34.9c97.1,17.6,188.2,61.1,276.1,96.6c25.8,11.7,55.6,21.8,85.7,30.8c116.6,34.8,239.5,35.9,355.7-0.4 l45.4-14.2c0,0,193.4-63.5,315.1-149.3v-223.5H-274.2z"/></svg></section>
					<section class="page-heading-offset">
						<div class="container-inner">
							<div class="row">
								<div class="col-xs-12 col-md-8 col-md-offset-2">
									
									<div class="healcode prospect">
										
										<form id="ConFrm">
											
											<div class="hc_prospect">
												<div class="hc-prospect-field hc-prospect-first-name">
													<input placeholder="First Name" type="text" name="app_fname" id="app_fname" required="">
												</div>
												<div class="hc-prospect-field hc-prospect-email">
													<input placeholder="Email" type="email" name="app_email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" id="app_email" required="">
												</div>
												<div class="hc-prospect-field hc-prospect-mobile-phone">
													<input placeholder="Phone Number" type="text" pattern="[0-9]{10,10}$" maxlength="10" name="app_number" id="app_number" required="">
												</div>
												<div class="hc-prospect-field hc-prospect-comment">
													<textarea rows="6" placeholder="Comment (optional)" name="app_message" id="app_message" required=""></textarea>
												</div>
												<div class="hc-actions">
													<input type="submit" value="Submit" class="submit hc-prospect-submit">
													<img id="hc-prospect-spinner-ca12659dbdf" style="display:none;" src="https://assets.healcode.com/assets/widgets/spinner-10fbb9196ed28f24a07be2de7f0c6f5d1704fe4d798fa7e51f9889430e787cfd.gif">
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</section>
						<div class="mapSec">
							<div class="inMap">
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3768.727449672396!2d72.85506621518758!3d19.163404087037797!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b7b21a02939b%3A0x3e5100b5f4c43c27!2siBridgeDigital%20-%20Web%20Design%20Company!5e0!3m2!1sen!2sin!4v1603281632517!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
							</div>
							<div class="addrssTxt">								
								<ul>
									<li><h4>Contact us</h4></li>
									<hr>
									<li><span><i class="fa fa-map-marker" aria-hidden="true"></i> Address : </span> <p>105, acme ind. park, <br>IB Patel Rd, Goregaon, <br>Mumbai, Maharashtra 400063</p></li>
									<li><span><i class="fa fa-phone" aria-hidden="true"></i> Contact : </span> <p>222-123-456</p></li>
									<li><span><i class="fa fa-fax" aria-hidden="true"></i> Fax : </span> <p>565-123-456</p></li>
									<li><span><i class="fa fa-envelope" aria-hidden="true"></i> Email : </span> <p>ibridge@gmail.com</p></li>
								</ul>
								<hr>
							</div>
						</div>
						
					</div>
					<?php
					include("../footer.php");
					?>
				</div>
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
				<script>
                    $(document).ready(function() { 
                        $('#ConFrm').submit(function(event) {
                          event.preventDefault();
                          var formdata = $('#ConFrm').serialize();
                          alert(formdata);

                            if ($('#app_fname').val() != "" && $('#app_number').val() != "" && $('#app_email').val() != "" && $('#app_message').val() != "") {
                                
                                 $.ajax({
                                                  url:'../requestapp.php',
                                                  type:'POST',
                                                  data:formdata,
                                                  success:function(result){ 
                                                  alert("Information Sent")                                                  
                                                     
                                                      $("#app_fname, #app_number, #app_email, #app_message").val("");
                                                      

                                                  }
                                        });

                            
                        }
                                 else{
                                  alert("All fields are mandatory");
                                      }
                        });
                    });

                    </script>
			</body>
		</html>