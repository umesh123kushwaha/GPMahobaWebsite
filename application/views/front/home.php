<?php $this->load->view('front/header'); ?>

<!--start wrapper-->
 <style>
    .card-img{
        overflow: hidden;
        position: center;

    }
    .card-title{
        position: relative;
        background-color: #0c5460;
    }
    .card-img img{
        transition: 2s all ease-in-out;
    }
    .card-img:hover img{
        transform: scale(1.5);
    }
    *{
        box-sizing: border-box;
    }

    .dept{
        position: relative;
        width:100% ;
        overflow: hidden;
        margin: 5px;
        float: left;



    }
    .deptimages{
         display: block;
        width: 100% ;
        height: auto;
        transition: 1.5s all ease-in-out;


    }
    .overlay{
         position: absolute;
          bottom: 0;
          background: rgb(0, 0, 0);
          background: rgba(0, 0, 0, 0.5); /* Black see-through */
          width: 100%;

          opacity:0;
          color: white;
          font-size: 15px;
          padding: 20px;
          text-align: center;
        opacity: 1;
    }
    .dept:hover img{
       transform: scale(1.5);
    }
    #call-to-action-2 {
    background-color: #141e96;
    padding: 30px 0;
}
#call-to-action-2 p {
    color: #fff;
    font-size: 15px;
    line-height: 30px;
}
#circle-shape-example .curve {
    width: 33%;
    height: auto;
    min-width: 150px;
    float: left;
    margin-right: 2rem;
    border-radius: 50%;
    -webkit-shape-outside: circle();
    shape-outside: circle();
}
#circle-shape-example {
    font-family: Open Sans, sans-serif;
    margin: 0rem;
}
.well {
    min-height: 20px;
    padding:15px;

    /*margin-bottom: 10px;*/
    background-color: #f5f5f5;
    border: 1px solid #e3e3e3;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgb(0 0 0 / 5%);
    box-shadow: inset 0 1px 1px rgb(0 0 0 / 5%);
}
    </style>
<section class="wrapper">
    <div class="slider-wrapper">
        <div class="slider">
            

             <div class="slide slide1">
                 <img src="<?php echo base_url('assests/front/')?>images/fraction-slider/gpm4.jpg" width="1920" height="auto" data-in="fade" data-out="fade" />

               
               

                <p class="slide-heading text-white" data-position="100,600" data-in="top" data-out="bottom" data-delay="500"><span> Welcome to Government Polytechnic Mahoba</span></p>
               
            </div>

            <div class="slide slide2">

                <img src="<?php echo base_url('assests/front/')?>images/fraction-slider/gpm2.jpg" width="1920" height="auto" data-in="fade" data-out="fade" />
<!-- 
                <img src="<?php echo base_url('assests/front/')?>images/fraction-slider/slider-boy.png" width="500" height="auto" data-position="47,1200" data-in="bottomLeft" data-out="fade" style="width:auto; height:auto" data-delay="500">

                <p class="slide-heading" data-position="130,380" data-in="top"  data-out="left" data-ease-in="easeOutBounce" data-delay="700">Dreamz is our theme</p>

                <p class="sub-line" data-position="220,380" data-in="right" data-out="left" data-delay="1500">Dolore Magnam Aliquam Quaerat Voluptatem  </p>

                <a href="<?php echo base_url('assests/front/')?>"  class="btn btn-default btn-lg" data-position="315,380" data-in="bottom" data-out="bottom" data-delay="2000">Download Now</a> -->
            </div>

            <div class="slide slide3">
                <img src="<?php echo base_url('assests/front/')?>images/fraction-slider/gpm1.jpg"  width="1920" height="auto" data-in="fade" data-out="fade" />

               <!--  <img src="<?php echo base_url('assests/front/')?>images/fraction-slider/gadgets/ipad.png" width="220" height="270" data-position="90,580" data-in="right" data-0ut="right" data-delay="700" >
                <img src="<?php echo base_url('assests/front/')?>images/fraction-slider/gadgets/smartphone.png" width="90" height="180" data-position="180,430" data-in="right" data-0ut="right" data-delay="1200" data-ease-in="easeOutBounce" transition="all 0.5s ease-in-out 0s">

                <p class="slide-heading" data-position="80,950" data-in="top" data-out="fade" data-delay="3300" data-ease-in="easeOutBounce">fully responsive layout </p>
                <p class="sub-line" data-position="160,950" data-in="left" data-out="left" data-delay="4400">creating by bootstarp </p>
                <p class="slide-text" data-position="200,950" data-in="left" data-out="left" data-delay="4600">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A hic ipsam nostrum temporibus.<br> Lorem ipsum dolor sit amet, consectetur adipisicing. </p>

                <a href="<?php echo base_url('assests/front/')?>"  class="btn btn-default btn-lg" data-position="311,950" data-in="bottom" data-out="bottom" data-ease-in="easeOutBounce" data-delay="4800">Download Now</a> -->
            </div>
        </div>
    </div>
<!--End Slider-->
    <section id="call-to-action-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-7 text-white col-sm-12" id="circle-shape-example">
                    <h2 class="text-white text-center">Principal's Message</h2>
                    <img src="<?php echo base_url('assests/uploads/principal/'.$principal['principal_pic']) ?>" alt="Principal" style="padding: 0px; width: 50%;" class="curve">

                    <p class=" text-justify">TestingLorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident, doloribus omnis minus temporibus perferendis nesciunt quam repellendus nulla nemo ipsum odit corrupti. Lorem ipsum dolor sit ametLorem ipsum dolor sit amet Lorem ipsum dolor sit ametLorem ipsum dolor sit amet Lorem ipsum dolor sit ametLorem ipsum dolor sit amet Lorem ipsum dolor sit ametLorem ipsum dolor sit amet Lorem ips .. <br /><a style="float: right;" href="javascript:void(0)">Read More</a>
                    </p>
                    <p class="text-center">
                         <h4  class="text-white font-weight-bold">Principal <br>Er.<?php echo $principal['principal_name'] ?></h4>Government Polytechnic Mahoba
                    </p>

                </div>
                           

                <div class="col-lg-5 col-md-5 col-sm-12 well" >
                    <div class="messageBlog"><h2 style="margin-left: 100px;">Online Notice</h2>
                                <!-- Accordion starts -->
                                <div class="panel-group" id="">
                                 <!-- Panel. Use "panel-XXX" class for different colors. Replace "XXX" with color. -->
                                  <div class="panel">   
                                        <!-- Panel heading -->
                                         <div class="panel-heading">
                                                <h4 class="panel-title">
                                                  <a data-toggle="collapse" data-parent="#2" href="#2">
                                                        <i class="fa fa-angle-right"></i> Heading Notice #1
                                                  </a>
                                                </h4>
                                         </div>
                                         <div id=2 class="panel-collapse collapse">
                                                <!-- Panel body -->
                                                <div class="panel-body">
                                                   Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas<a href= https://gpmahoba.org/download.php?file=2.jpg download > Click here to download file
                                                   </a></div>
                                         </div>
                                  </div>
                                 <!-- Panel. Use "panel-XXX" class for different colors. Replace "XXX" with color. -->
                                  <div class="panel">   
                                        <!-- Panel heading -->
                                         <div class="panel-heading">
                                                <h4 class="panel-title">
                                                  <a data-toggle="collapse" data-parent="#3" href="#3">
                                                        <i class="fa fa-angle-right"></i> Heading Notice #2
                                                  </a>
                                                </h4>
                                         </div>
                                         <div id=3 class="panel-collapse collapse">
                                                <!-- Panel body -->
                                                <div class="panel-body">
                                                  This is second line<a href= https://gpmahoba.org/download.php?file=1.jpg download > Click here to download file
                                                   </a></div>
                                         </div>
                                  </div>
                                 <!-- Panel. Use "panel-XXX" class for different colors. Replace "XXX" with color. -->
                                  <div class="panel">   
                                        <!-- Panel heading -->
                                         <div class="panel-heading">
                                                <h4 class="panel-title">
                                                  <a data-toggle="collapse" data-parent="#4" href="#4">
                                                        <i class="fa fa-angle-right"></i> Heading Notice #4
                                                  </a>
                                                </h4>
                                         </div>
                                         <div id=4 class="panel-collapse collapse">
                                                <!-- Panel body -->
                                                <div class="panel-body">
                                                  This is third line text.<a href= https://gpmahoba.org/download.php?file=3.jpg download > Click here to download file
                                                   </a></div>
                                         </div>
                                  </div>
                              </div>
                    </div>
                </div>            
            </div>
        </div>
    </section>

        <section class="content about">
            <div class="container">
                <div class="row sub_content">
                    <div class="who">
                        <div class="col-lg-12 col-md-12 col-sm-12 text-justify">
                            <div class="dividerHeading">
                                <h4><span>About Us</span></h4>
                            </div>
                                <img class="left_img img-thumbnail" src="<?php echo base_url('assests/front/') ?>images/about/main_gpm.jpg" alt="about img" width="500px">
                            <p>Government Polytechnic College  located at  Infornt of St. Joseph School, Mahoba Station Road  Mahoba Uttar Pradesh .This collage is one of the popular colleges in India.
                           
                          </p>
                            <p> Government Polytechnic Mahoba is one of the prestigious institute for education located at Mahoba.This Collage Approved by Board Of Technical  Education  Lucknow Uttar Pradesh.</p>
                            <p> It was established in 1978.They are offering many facilities for students overall growth like fully Wi-fi campus, hostel facility, personality development classes, etc.</p>
                            <p>  The college
                            has five branches - Information Technology, Computer Science and Engineering Electrical Engineering, Electronic Engineering and Mechanical Engineering. </p>
                            
                        </div>
                        
                       
                    </div>
                </div>
                
                <div class="row sub_content text-justify">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="dividerHeading">
                            <h4><span>Our Vision</span></h4>

                        </div>
                        <div>
                             <p>
                    Government Polytechnic Mahoba provides students with quality educational experiences and support services that lead to the successful completion of degrees, transfer, certificates, career/technical education and basic skills proficiency. The college fosters academic and career success through the development of critical thinking, effective communication, creativity, and cultural awareness in a safe, accessible and affordable learning environment. In meeting the needs of our demographically diverse student population, we embrace equity and accountability through measurable learning outcomes, ethical data-driven decisions and student achievement.
                </p>
                        </div>
                        
                    </div>
                    
                    <!-- TESTIMONIALS -->
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="dividerHeading">
                            <h4><span>Our Mission</span></h4>

                        </div>
                        <div>
                            <p>
                   And Our Mission is driven to provide excellent educational opportunities that are responsive to the needs of our students, and empower them to meet and exceed challenges as active participants in shaping the future of our world.
                </p> 
                        </div>
                       
                    </div><!-- TESTIMONIALS END -->
                </div>
            
               

                
            </div>
        </section>

<!--start info service-->
    
<!--end info service-->

<!--Start recent work-->
    

<!-- Parallax with Testimonial -->
    <section class="parallax parallax-1">
        <div class="container">
            <!--<h2 class="center">Testimonials</h2>-->
            <div class="row">
                <div id="parallax-testimonial-carousel" class="parallax-testimonial carousel wow fadeInUp">
                    <div class="carousel-inner">
                        <div class="active item">
                            <div class="parallax-testimonial-item">
                                <blockquote>
                                    <p>Donec convallis, metus nec tempus aliquet, nunc metus adipiscing leo, a lobortis nisi dui ut odio. Nullam ultrices, eros accumsan vulputate faucibus, turpis tortor dictum.</p>
                                </blockquote>
                                <p>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </p>
                                <div class="parallax-testimonial-review">
                                    <img src="<?php echo base_url('assests/front/')?>images/testimonials/1.png" alt="testimonial">
                                    <span>Jonathan Dower</span>
                                    <small>Company Inc.</small>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="parallax-testimonial-item">
                                <blockquote>
                                    <p>Metus aliquet tincidunt metus, sit amet mattis lectus sodales ac. Suspendisse rhoncus dictum eros, ut egestas eros luctus eget. Nam nibh sem, mattis et feugiat ut, porttitor nec risus.</p>
                                </blockquote>
                                <p>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </p>
                                <div class="parallax-testimonial-review">
                                    <img src="<?php echo base_url('assests/front/')?>images/testimonials/2.png" alt="testimonial">
                                    <span>Jonathan Dower</span>
                                    <small>Leopard</small>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="parallax-testimonial-item">
                                <blockquote>
                                    <p>Nunc aliquet tincidunt metus, sit amet mattis lectus sodales ac. Suspendisse rhoncus dictum eros, ut egestas eros luctus eget. Nam nibh sem, mattis et feugiat ut, porttitor nec risus.</p>
                                </blockquote>
                                <p>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </p>
                                <div class="parallax-testimonial-review">
                                    <img src="<?php echo base_url('assests/front/')?>images/testimonials/3.png" alt="testimonial">
                                    <span>Jonathan Dower</span>
                                    <small>Leopard</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ol class="carousel-indicators">
                        <li data-slide-to="0" data-target="#parallax-testimonial-carousel" class=""></li>
                        <li data-slide-to="1" data-target="#parallax-testimonial-carousel" class="active"></li>
                        <li data-slide-to="2" data-target="#parallax-testimonial-carousel" class=""></li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
<!-- end : Parallax with Testimonial -->

    <section class="feature_bottom">
        <div class="container">
            <div class="row sub_content">
                <div class="col-lg-6  wow slideInLeft" data-wow-duration="1s">
                    <div class="dividerHeading">
                        <h4><span>Why Choose Us?</span></h4>
                    </div>
                    <p>Government Polytechnic Mahoba(GPM) has certain unique features such as:</p>
                    <ul class="list_style circle">
                        <li>Excelent Location</li>
                        <li> Pacement Assisment duration of study</li>
                        <li> Facility of Bank and Post Office</li>
                        <li>Use modern information and communication technologies</li>
                        <li> well equipped lab and library</li>
                        <li> Goverment fee structure</li>
                        <li> AICT approved syllabus</li>
                        <li> All Courses as per AICT approved nomenclature</li>
                        <li> Scholarship to needy students</li>
                    </ul>
                </div>

               
                <!-- TESTIMONIALS -->
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="dividerHeading">
                            <h4><span>What Student's Say</span></h4>

                        </div>
                        <div id="testimonial-carousel" class="testimonial carousel slide">
                            <div class="carousel-inner">
                                <div class="active item">
                                    <div class="testimonial-item">
                                        <div class="icon"><i class="fa fa-quote-right"></i></div>
                                        <blockquote>
                                            <p>Donec convallis, metus nec tempus aliquet, nunc metus adipiscing leo, a lobortis nisi dui ut odio. Nullam ultrices, eros accumsan vulputate faucibus, turpis tortor dictum.</p>
                                        </blockquote>
                                        <div class="icon-tr"></div>
                                        <div class="testimonial-review">
                                            <img src="images/testimonials/1.png" alt="testimoni">
                                            <h1>Jonathan Dower,<small>CS (Third year).</small></h1>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="item">
                                    <div class="testimonial-item">
                                        <div class="icon"><i class="fa fa-quote-right"></i></div>
                                        <blockquote>
                                            <p>Nunc aliquet tincidunt metus, sit amet mattis lectus sodales ac. Suspendisse rhoncus dictum eros, ut egestas eros luctus eget. Nam nibh sem, mattis et feugiat ut, porttitor nec risus.</p>
                                        </blockquote>
                                        <div class="icon-tr"></div>
                                        <div class="testimonial-review">
                                            <img src="images/testimonials/2.png" alt="testimoni">
                                            <h1>Jonathan Dower<small>Electrical Engineering (Third Year)</small></h1>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="testimonial-buttons"><a href="#testimonial-carousel" data-slide="prev"><i class="fa fa-chevron-left"></i></a>&#32;
                            <a href="#testimonial-carousel" data-slide="next"><i class="fa fa-chevron-right"></i></a></div>
                        </div>
                    </div><!-- TESTIMONIALS END -->
            </div>
        </div>
    </section>

    <section class="team">
        <div class="container">
            <div class="row  sub_content">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="dividerHeading">
                        <h4><span>Our Staff</span></h4>
                    </div>
                </div>
                

                    <?php 
                    $staffs=$this->Admin_model->getstaffInDepartment();

                    foreach ($staffs as $staff): ?>
                        <div class="col-lg-3 col-md-3 col-sm-6">
                            <div class="dreamz-team">
                                <div class="pic">
                                    <img src="<?php echo base_url('assests/uploads/staff/'.$staff['staff_pic'])?>" alt="profile img">
                                    <div class="social_media_team">
                                        <ul class="team_social">
                                            <li><a class="fb" href="<?php echo base_url('assests/front/')?>#." data-placement="top" data-toggle="tooltip" title="Facbook"><i class="fa fa-facebook"></i></a></li>
                                            <li><a class="twtr" href="<?php echo base_url('assests/front/')?>#." data-placement="top" data-toggle="tooltip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                            <li><a class="gmail" href="<?php echo base_url('assests/front/')?>#." data-placement="top" data-toggle="tooltip" title="Google"><i class="fa fa-google-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="team_prof">
                                    <h3 class="names"><?php echo $staff['staff_name']; ?><small><?php echo $staff['staff_type']; ?></small></h3>
                                    <p class="description">Phasellus ac libero ac tellus pellentesque semper. Sed ac felis. Sed commo, magnase quis lacinia ornare, quam ante aliqua nisi, eu iaculis leo purus venenatis scelerisque. </p>
                                </div>
                        </div>
                     </div>
                    <?php endforeach ?>
                   
               
               
            </div>
        </div>
    </section>

    <section class="clients">
        <div class="container">
            <div class="row sub_content">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="dividerHeading">
                        <h4><span>Our Department</span></h4>

                    </div>

                    <div class="our_clients">
                        <div class="row   ">
            <div class="col-md-12  ">
                <div class="row text-uppercase font-weight-bold   ">
                    <div class="col-md   ">
                        <a href="#">
                            <div class="dept">
                               <img src="<?php echo base_url('assests/front/images/photo/') ?>cs.jpg" class="deptimages" alt="">
                               <div class="overlay"> Computer Science And Engineering</div>
                           </div>
                        </a>
                   </div>
                    <div class="col-md ">
                        <a href="#" class="text-decoration-none">
                            <div class="dept">
                               <img src="<?php echo base_url('assests/front/images/photo/') ?>it.jpg" class="deptimages" alt="">
                               <div class="overlay"> Information Technology</div>
                           </div>
                        </a>
                   </div>
                    <div class="col-md  ">
                        <a href="#" class="text-decoration-none">
                            <div class="dept">
                               <img src="<?php echo base_url('assests/front/images/photo/') ?>ee.jpg" class="deptimages" alt="">
                               <div class="overlay">Electrical Engineering</div>
                           </div>
                        </a>

                   </div>
                    <div class="col-md  ">
                        <a href="#" class="text-decoration-none">
                            <div class="dept">
                               <img src="<?php echo base_url('assests/front/images/photo/') ?>me.jpg" class="deptimages" alt="">
                               <div class="overlay"> Mechenical Engineering</div>
                           </div>
                        </a>

                   </div>
                    <div class="col-md   ">
                        <a href="#"class="text-decoration-none">
                            <div class="dept">
                               <img src="<?php echo base_url('assests/front/images/photo/') ?>ec.jpg" class="deptimages" alt="">
                               <div class="overlay">Electronic Engineering</div>
                           </div>
                        </a>

                   </div>
                </div>
            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!--end wrapper-->
 <section class="contact_3">

        <div class="container">
            <div class="dividerHeading">
        <h4><span>Contact Us</span></h4>

    </div>
        <div class="maps">
            <div class="w-100 p-1">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d804.4818339197749!2d79.85349452764139!3d25.304167624318545!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x27d29ec56b57d43c!2sGovt.%20Polytechnic%20Mahoba%20Campus!5e1!3m2!1sen!2sin!4v1610120630524!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
            <div class="row sub_content">
                <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                    <div class="dividerHeading">
                        <h4><span>Get in Touch</span></h4>
                    </div>
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad blanditiis excepturi ipsum non, sequi soluta. Cupiditate incidunt sunt velit? Accusantium aperiam fugit iure minus optio perferendis praesentium sed sequi voluptatibus. Aenean vulputate eleifend tellus.</p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
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
                                <div class="col-lg-4 ">
                                    <label>Your name (required)</label>
                                    <br>
                                    <input type="text" id="name" name="name" class="form-control" maxlength="100" data-msg-required="Please enter your name." value="" placeholder="" >
                                </div>
                                <div class="col-lg-4 ">
                                    <label>Your Email (required)</label>
                                    <br>
                                    <input type="email" id="email" name="email" class="form-control" maxlength="100" data-msg-email="Please enter a valid email address." data-msg-required="Please enter your email address." value="" placeholder="" >
                                </div>
                                <div class="col-md-4">
                                    <label>Subject</label>
                                    <br>
                                    <input type="text" id="subject" name="subject" class="form-control" maxlength="100" data-msg-required="Please enter the subject." value="" placeholder="">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <label>Your Message :-</label>
                                    <br>
                                    <textarea id="message" class="form-control" name="message" rows="10" cols="50" data-msg-required="Please enter your message." maxlength="5000" placeholder=""></textarea>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
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
                            <ul class="widget_info_contact clearfix">
                                <li class="col-md-4"><i class="fa fa-map-marker"></i><strong>Address</strong> <p> : Infornt of St. Joseph School, Mahoba, Uttar Pradesh 210427</p></li>
                                <li class="col-md-4"><i class="fa fa-envelope"></i> <strong>Email</strong><p> <a href="#">:  mail@example.com</a></p> <p> <a href="#">: mail@example.com</a></p></li>
                                <li class="col-md-4"><i class="fa fa-phone"></i> <strong>Our Phone</strong> <p> : (+91 - 012)  9000 - 12345</p><p>: (+91 - 011)  8000 - 54321</p></li>
                            </ul>
                        </div>

                        <div class="widget_social">
                            <!--<div class="dividerHeading">
                                <h4><span>Get Social</span></h4>
                            </div>-->
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