<?php $this->load->view('front/header'); ?>
<style type="text/css" media="screen">
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
</style>
<section class="page_head">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <nav id="breadcrumbs">
                        <ul>
                            <li>You are here:</li>
                            <li><a href="index.html">Home</a></li>
                            <li>Pages</li>
                        </ul>
                    </nav>

                    <div class="page_title">
                        <h2>about us</h2>
                        <!--<span class="sub_heading">We are here for you 24/7</span>-->

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
<?php $this->load->view('front/footer'); ?>