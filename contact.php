<!DOCTYPE html>
<html lang="en">


<?php 
include("header.php")
?>
<?php 
if(isset($_POST['submit'])){
    $to = "vishesh.suryavanshi07@gmail.com"; // 
    // $to = "va19.pitbull@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $message = $_POST['message'];
    $subject = "Lead";
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>
        <!-- Header Ends -->
        <!-- Contact Section Starts -->
        <section class="contact">
            <!-- Map Section Starts -->
            <div class="info-map">
                <div class="google-map">
                    <div class="gmap_container">
                        <div id="gmap_canvas"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3680.0136025530546!2d75.8723527507567!3d22.727735785030017!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3962fd6af7a27467%3A0xcb6731b149a326b0!2sNo%2024%2C%20Yeshwant%20Niwas%20Rd%2C%20Near%20Sony%20Service%20Private%20Limited%2C%20Vallabh%20Nagar%2C%20New%20Palasia%2C%20Indore%2C%20Madhya%20Pradesh%20452001!5e0!3m2!1sen!2sin!4v1641488220661!5m2!1sen!2sin" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
                    </div>
                </div>
            </div>
            <!-- Info Map Boxes Starts -->
            <div class="container">
                <div class="row info-map-boxes">
					<!-- Left Info Map Box Starts -->
                    <div class="col-md-6 col-sm-6">
                        <div class="info-map-boxes-item fa fa-phone">
                            <h1>Phone &amp; Online</h1>
                            <p>Phone :  +91 89822-73944
                                <br><a href="#">va19.pitbull@gmail.com</a></p>
                        </div>
                    </div>
                    <!-- Left Info Map Box Ends -->
                    <!-- Right Info Map Box Starts -->
                    <div class="col-md-6 col-sm-6">
                        <div class="info-map-boxes-item fa fa-clock-o">
                            <h1>Working Hours</h1>
                            <p>Monday-Saturday : 08:00–21:00
                                <br>Sunday - Closed</p>
                        </div>
                    </div>
                    <!-- Right Info Map Box Ends -->
                </div>
            </div>
            <!-- Info Map Boxes Ends -->
        </section>
        <!-- Contact Section Ends -->
        <!-- Contact Form Section Starts -->
        <section class="contactform">
            <div class="section-overlay">
                <div class="container">
                    <!-- Main Heading Starts -->
                    <div class="text-center top-text">
                        <h1><span>Send Us</span> an email</h1>
                        <h4>We are very responsive to messages</h4>
                    </div>
                    <!-- Main Heading Ends -->
                    <div class="form-container">
                        <!-- Contact Form Starts -->
                        <form class="formcontact" method="post" action="">
                            <div class="row form-inputs">
                                <!-- First Name Field Starts -->
                                <div class="col-sm-6 form-group custom-form-group">
                                    <span class="input custom-input">
										<input placeholder="First Name" class="input-field custom-input-field" id="firstname" name="firstname" type="text" required data-error="NEW ERROR MESSAGE">
										<label class="input-label custom-input-label" >
											<i class="fa fa-user icon icon-field"></i>
										</label>
									</span>
                                </div>
                                <!-- First Name Field Ends -->
                                <!-- Last Name Field Starts -->
                                <div class="col-sm-6 form-group custom-form-group">
                                    <span class="input custom-input">
										<input placeholder="Last Name" class="input-field custom-input-field" id="lastname" name="lastname" type="text" required>
										<label class="input-label custom-input-label" >
											<i class="fa fa-user-o icon icon-field"></i>
										</label>
									</span>
                                </div>
                                <!-- Last Name Field Ends -->
                                <!-- Message Field Starts -->
                                <div class="form-group custom-form-group col-sm-12">
                                    <textarea placeholder="Message" id="message" name="message" cols="45" rows="7" required></textarea>
                                </div>
                                <!-- Message Field Ends -->
                                <!-- Email Name Field Starts -->
                                <div class="col-sm-6 form-group custom-form-group">
                                    <span class="input custom-input">
										<input placeholder="Email" class="input-field custom-input-field" id="email" name="email" type="text" required>
										<label class="input-label custom-input-label" >
											<i class="fa fa-envelope icon icon-field"></i>
										</label>
									</span>
                                </div>
                                <!-- Email Name Field Ends -->
                                <!-- Submit Button Starts -->
                                <div class="col-sm-6 submit-form">
                                    <button id="form-submit" name="submit" type="submit" value="submit" class="custom-button" title="Send">Send Message</button>
                                </div>
                                <!-- Submit Button Ends -->
                                <!-- Form Submit Message Starts -->
                                <div class="col-sm-12 text-center output_message_holder">
                                    <p class="output_message"></p>
                                </div>
                                <!-- Form Submit Message Ends -->
                            </div>
                        </form>
                        <!-- Contact Form Ends -->
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Logos Section Ends -->
     <?php include ("footer.php") ?>