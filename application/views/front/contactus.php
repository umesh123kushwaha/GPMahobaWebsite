<?php $this->load->view('front/header'); ?>
<section class="wrapper">
    <section class="page_head">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <nav id="breadcrumbs">
                        <ul>
                            <li>You are here:</li>
                            <li><a href="index.html">Home</a></li>
                            <li>contactus</li>
                        </ul>
                    </nav>

                    <div class="page_title">
                        <h2>Contact Us</h2>
                        <!--<span class="sub_heading">We are here for you 24/7</span>-->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact_2">
        <div class="maps p-2">
            <div  class="p-1">
            	 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d804.4818339197749!2d79.85349452764139!3d25.304167624318545!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x27d29ec56b57d43c!2sGovt.%20Polytechnic%20Mahoba%20Campus!5e1!3m2!1sen!2sin!4v1610120630524!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
        <div class="container">
            <div class="row sub_content">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="dividerHeading">
                        <h4><span>Get in Touch</span></h4>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet deleniti ducimus fuga quidem quisquam ut!</p>

                    <div class="alert alert-success hidden alert-dismissable" id="contactSuccess">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <strong>Success!</strong> Your message has been sent to us.
                    </div>

                    <div class="alert alert-error hidden" id="contactError">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <strong>Error!</strong> There was an error sending your message.
                    </div>

                    <form id="contactForm" action="" novalidate="novalidate">
                        <div class="row">
                            <div class="form-group">
                                <div class="col-lg-6 ">
                                    <input type="text" id="name" name="name" class="form-control" maxlength="100" data-msg-required="Please enter your name." value="" placeholder="Your Name" >
                                </div>
                                <div class="col-lg-6 ">
                                    <input type="email" id="email" name="email" class="form-control" maxlength="100" data-msg-email="Please enter a valid email address." data-msg-required="Please enter your email address." value="" placeholder="Your E-mail" >
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-6">
                                    <input type="text" id="company" name="company" class="form-control" maxlength="100" data-msg-required="Please enter the subject." value="" placeholder="Company">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" id="subject" name="subject" class="form-control" maxlength="100" data-msg-required="Please enter the subject." value="" placeholder="Subject">
                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <textarea id="message" class="form-control" name="message" rows="10" cols="50" data-msg-required="Please enter your message." maxlength="5000" placeholder="Message"></textarea>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 text-right">
                                <input type="submit" data-loading-text="Loading..." class="btn btn-default btn-lg" value="Send Message">
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="sidebar">
                        <div class="widget_info">
                            <div class="dividerHeading">
                                <h4><span>Contact Info</span></h4>
                            </div>
                            <p>Government Polytechnic College  located at  Infornt of St. Joseph School, Mahoba Station Road  Mahoba Uttar Pradesh .This collage is one of the popular colleges in India.</p>
                            <ul class="widget_info_contact">
                                <li><i class="fa fa-map-marker"></i><strong>Address</strong> <p>: Infornt of St. Joseph School, Mahoba, Uttar Pradesh 210427</p></li>
                                <li><i class="fa fa-envelope"></i><strong>Email</strong> <p>: <a href="#">mail@example.com</a></p> <p>: <a href="#">mail@example.com</a></p></li>
                                <li><i class="fa fa-phone"></i><strong>Our Phone</strong> <p>: (+91) 9000-12345</p><p>: (+91) 8000-54321</p></li>
                            </ul>
                        </div>

                        <div class="widget_social">
                            <ul class="widget_social">
                                <li><a class="fb" href="#." data-placement="bottom" data-toggle="tooltip" title="Facbook"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="twtr" href="#." data-placement="bottom" data-toggle="tooltip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                <li><a class="gmail" href="#." data-placement="bottom" data-toggle="tooltip" title="Google"><i class="fa fa-google-plus"></i></a></li>
                                <li><a class="dribbble" href="#." data-placement="bottom" data-toggle="tooltip" title="Dribbble"><i class="fa fa-dribbble"></i></a></li>
                                <li><a class="skype" href="#." data-placement="bottom" data-toggle="tooltip" title="Skype"><i class="fa fa-skype"></i></a></li>
                                <li><a class="pinterest" href="#." data-placement="bottom" data-toggle="tooltip" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
                                <li><a class="instagram" href="#." data-placement="bottom" data-toggle="tooltip" title="Instagram"><i class="fa fa-instagram"></i></a></li>
                                <li><a class="youtube" href="#." data-placement="bottom" data-toggle="tooltip" title="Youtube"><i class="fa fa-youtube"></i></a></li>
                                <li><a class="linkedin" href="#." data-placement="bottom" data-toggle="tooltip" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                                <li><a class="flickrs" href="#." data-placement="bottom" data-toggle="tooltip" title="Flickr"><i class="fa fa-flickr"></i></a></li>
                                <li><a class="rss" href="#." data-placement="bottom" data-toggle="tooltip" title="RSS"><i class="fa fa-rss"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</section>
<?php $this->load->view('front/footer'); ?>