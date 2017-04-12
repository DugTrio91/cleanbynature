<?php require_once( 'admin/cms.php' ); ?>
    <cms:template title='Contact Us' />
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/normalize.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Lato:300,100' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/main.css" />
        <meta name="description" content="We offer a high quality services across a variety of sectors operating in Co Durham, Yorkshire and Teeside areas. You will receive a reliable, trusted cost effective service tailored to your needs. Fully insured for peace of mind. Professionally vetted and reliable. No hidden charges. No minimum Contract" />
        <meta name="keywords" content="apartment cleaners, apartment cleaning, apartment cleaning service, apartment cleaner, apartment cleaning, apartment cleaning in Newcastle, apartment cleaning service, maid, maids, maid services, maid service in Newcastle, maid services in Newcastle, maid cleaning service, maid cleaning services, home cleaning, home cleaning company, home cleaning service, home cleaning, home cleaning company, home cleaning in Newcastle, home cleaning service, home cleaning service in Newcastle, home cleaning services in Newcastle, house cleaning, green cleaning, green home cleaning, green apartment cleaning, green cleaning services, green cleaning service, green house cleaning, green janitorial service, green cleaning company, green maid, services, green maid service, house cleaners, house cleaning, house cleaning services, house cleaning in Newcastle, best house cleaner, housecleaning, housecleaning in Newcastle, house keeper, housekeeping agency, housekeeper, house keepers, housekeeping, house keeping, cleaning person, cleaning person in Newcastle, cleaning company in Newcastle, cleaning company, cleaning service, cleaning services, cleaning service in Newcastle, cleaning services in Newcastle, cleaning maid service" />
        <meta name="author" content="James Hornby" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <title>Clean by Nature</title>

        <script>
            $(document).ready(function () {
                $(".button").click(function () {
                    $(this).parent().find($(".dropdown-content")).slideToggle();
                });
            });
        </script>

        <script>
            $(document).ready(function () {
                $(".servicesbut").click(function () {
                    $(this).parent().find($(".services-content")).slideToggle();
                });
            });
        </script>

    </head>

    <body>
        <div class="header">
            <div class="logo" onclick="location.href='index.html';" style="cursor: pointer;"></div>
            <div class="bigmenu">
                <a href="index.html">HOME</a>
                <button class="servicesbut">SERVICES</button>
                <div class="services-content">
                    <a href="index.html#regularclean">REGULAR CLEANING</a>
                    <br/>
                    <a href="#officeclean">OFFICE &amp; SHOWROOM CLEANING</a>
                    <br/>
                    <a href="index.html#tenancyclean">END OF TENANCY CLEANING</a>
                    <br/>
                    <a href="index.html#buildingclean">POST BUILDING CLEAN</a>
                    <br/>
                    <a href="index.html#partyclean">AFTER PARTY CLEAN UP</a>
                    <br/>
                    <a href="index.html#carpetclean">CARPET &amp; UPHOLSTERY CLEANING</a>
                    <br/>
                    <a href="index.html#ironing">HOME OR DELIVERY IRONING SERVICE</a>
                </div>
                <a href="testimonials.php">TESTIMONIALS</a>
                <a href="contact.php">CONTACT</a>
                <a class="telno" style="color:white;" href="tel:07714346060">07714 346 060</a>
            </div>
            <div class="dropdown-menu">
                <button class="button"><i style="font-size: 45px;" class="fa fa-bars"></i></button>
                <div class="dropdown-content">
                    <a href="index.html">HOME</a>
                    <a href="index.html#regularclean">SERVICES</a>
                    <a href="testimonials.php">TESTIMONIALS</a>
                    <a href="contact.php">CONTACT</a>
                </div>
            </div>
        </div>
        <div class="containerA">
            <div class="headers">
                <h1>WE'D LOVE TO HEAR FROM YOU</h1>
                <p>Tell us what you need and we will get back to you as soon as we can.</p>
            </div>
            <br />

            <!-- CONTACT FORM (BOX A)-->
            <div class="contactform">
                <cms:form action='' method='post' id='contact_form'>
                    <ul>
                        <!-- NAME -->
                        <li>
                            <label for="name">Name</label>
                            <cms:input type='text' name='name' id='name' required='1' />
                            <div class="clear"></div>
                            <cms:if k_error_name>
                                <p id='name_error' class='error' style="display:block"><i class="fa fa-times"></i> Insert a Name!</p>
                            </cms:if>
                        </li>
                        <!-- EMAIL ADDRESS -->
                        <li>
                            <label for="email">Email </label>
                            <cms:input type='text' name='email' id='email' required='1' validator='email' />
                            <div class="clear"></div>
                            <cms:if k_error_email>
                                <p id='email_error' class='error' style="display:block"><i class="fa fa-times"></i> Enter a valid email address!</p>
                            </cms:if>
                        </li>
                        <!-- SUBJECT -->
                        <li>
                            <label for="subject">Subject</label>
                            <cms:input type='text' name='subject' id='subject' required='1' />
                            <div class="clear"></div>
                            <cms:if k_error_subject>
                                <p id='subject_error' class='error' style="display:block"><i class="fa fa-times"></i> Enter a message subject!</p>
                            </cms:if>
                        </li>
                        <!-- MESSAGE -->
                        <li>
                            <label for="message">Message</label>
                            <cms:input type='textarea' name='message' id='message' required='1' rows="30" cols="30"></cms:input>
                            <div class="clear"></div>
                            <cms:if k_error_message>
                                <p id='message_error' class='error' style="display:block"><i class="fa fa-times"></i> Enter a message!</p>
                            </cms:if>
                        </li>
                        <li>
                            <!-- IF THE FORM VALIDATION IS PASSED -->
                            <cms:if k_success>
                                <p id='mail_success' class='success' style="display:block; color:white"><i class="fa fa-check"></i> Thank you. we'll get back to you soon</p>
                                <!-- MESSAGE DELIVERED TO THE OWNER -->
                                <cms:send_mail from=k_email_from to=k_email_to subject='Enquiry from your site'>
                                    You have received the following message from a customer:
                                    <cms:show k_success />
                                </cms:send_mail>
                            </cms:if>
                            <!-- SUBMIT BUTTON -->
                            <div id="button">
                                <input type='submit' id='send_message' class="button" value='Submit' />
                            </div>
                        </li>
                    </ul>
                </cms:form>
            </div>

            <div class="footer">
                <div class="footerlogo footercontainer"></div>
                <div class="footeraddress footercontainer">
                    <p>34 Ravendale Road</p>
                    <p>Darlington</p>
                    <p>DL3 8EA</p>
                </div>
                <div class="footercontact footercontainer">
                    <p><a href="mailto:callcleanbynature@gmail.com">callcleanbynature@gmail.com</a></p>
                    <p><a href="tel:07714346060"><i class="fa fa-phone"></i> 07714 346 060</a></p>
                </div>
                <div class="footersocial footercontainer">
                    <a href="#"><i class="fa fa-facebook-square fa-4x"></i></a>
                    <a href="#"><i class="fa fa-twitter-square fa-4x"></i></a>
                    <p style="font-size:8px">Powered by CouchCMS</p>
                </div>
            </div>

        </div>
    </body>

    </html>
    <?php COUCH::invoke(); ?>