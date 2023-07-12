<?php $this->load->view('front/header'); ?>
        <style>



    /* Style the tab */
    .tab {
      float: left;
      border: 1px solid #ccc;
      background-color: #f1f1f1;
      width: 30%;
      height: 500px;
    }

    /* Style the buttons inside the tab */
    .tab button {
      display: block;
      background-color: inherit;
      color: black;
      padding: 22px 16px;
      width: 100%;
      border: none;
      outline: none;
      text-align: center;
      cursor: pointer;
      transition: 0.3s;
      font-size: 17px;
    }

    /* Change background color of buttons on hover */
    .tab button:hover {
      background-color: #ddd;
    }

    /* Create an active/current "tab button" class */
    .tab button.active {
      background-color: #ccc;
    }

    /* Style the tab content */
    .tabcontent {
      float: left;
      padding: 0px 12px;
      border: 1px solid #ccc;
      width: 70%;
      border-left: none;
      height: 500px;
      text-align:justify;
    }
    </style>
<section class="wrapper">
    <section class="page_head">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <nav id="breadcrumbs">
                        <ul>
                            <li>You are here:</li>
                            <li><a href="index.html">Home</a></li>
                            <li>department</li>
                        </ul>
                    </nav>

                    <div class="page_title">
                        <h2>Department</h2>
                        <!--<span class="sub_heading">We are here for you 24/7</span>-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="row text-center">
        <div class="col-md-5 my-3 border-bottom-0 border-secondary mx-auto"><h3  class="border-bottom"><?php echo $department['department_name'] ?></h3>
        </div>
    </div>
    <div class="row my-2">
        <div class="col-md">
            <div class="tab">
              <button class="tablinks" onclick="openCity(event, 'Profile')" id="defaultOpen">Labs</button>
              <button class="tablinks" onclick="openCity(event, 'Labs')">Profile</button>
              <button class="tablinks" onclick="openCity(event, 'Faculty')">Faculty</button>
            </div>

            <div id="Profile" class="tabcontent overflow-auto">
                <figure class="post_img">
                                    <!-- Post Image Slider -->
                                    <div id="slider" class="swipe">
                                        <ul class="swipe-wrap">
                                            <?php foreach ($department_slider as $slider): ?>
                                                 <li><img src="<?php echo base_url('assests/uploads/department/slider/'.$slider['slider_img']) ?>" alt="Government Polytechnic Mahoba Lab"  height="500"></li>
                                            <?php endforeach ?>
                                           
                                          
                                        </ul>
                                        <div class="swipe-navi">
                                          <div class="swipe-left" onclick="mySwipe.prev()"><i class="fa fa-chevron-left"></i></div> 
                                          <div class="swipe-right" onclick="mySwipe.next()"><i class="fa fa-chevron-right"></i></div>
                                        </div>
                                    </div>
                                </figure>
            </div>
            <div id="Labs" class="tabcontent overflow-auto">
                <h3 style="color:darkred">Department Profile</h3>
                    <p><?php echo $department['about'] ?></p>
                 <div class="border-bottom">
                    <h3 style="color:darkred">Vision</h3>
                 </div>
               <p><?php echo $department['vision'] ?></p>
                <div class="border-bottom">
                    <h3 style="color:darkred">Mission</h3>
                </div>
               <p><?php echo $department['mission'] ?></p> 
            </div>
            <div id="Faculty" class="tabcontent overflow-auto ">
                <div class="row">
                    <div class="col-md">
                        <div class="row bg-secondary text-center  p-1">
                            <div class="col-md"><h5 class="text-white">Faculty Of Department</h5></div>
                        </div>
                        <div class="row text-center">
                             <?php foreach ($staff_in_department as $staff): ?>
                                <?php if ($staff['staff_type']=='hod'): ?>
                                    <div class="col-md-3 mx-auto ">
                                        <img src="<?php echo base_url('assests/uploads/staff/'.$staff['staff_pic']) ?>"   width="100px" height="100px" class=" img-circle"  alt="{{ i.Faculty_Name }}">
                                         <h5><?php echo $staff['staff_name'] ?></h5>
                                         <h6></h6>
                                         <p>HOD</p>
                                     </div>
                                <?php endif ?>
                                
                            <?php endforeach ?>
                            
                        </div>
                        <div class="row text-center">
                             <?php foreach ($staff_in_department as $staff): ?>
                                <?php if ($staff['staff_type']=='lecturer'): ?>
                                    <div class="col-md-3 mx-auto ">
                                        <img src="<?php echo base_url('assests/uploads/staff/'.$staff['staff_pic']) ?>"   width="100px" height="100px" class=" img-circle"  alt="{{ i.Faculty_Name }}">
                                         <h5><?php echo $staff['staff_name'] ?></h5>
                                         <h6></h6>
                                         <p>Lecturer</p>
                                     </div>
                                <?php endif ?>
                                
                            <?php endforeach ?>
                            
                        </div>
                        <div class="row text-center">
                             <?php foreach ($staff_in_department as $staff): ?>
                                <?php if ($staff['staff_type']=='guest faculty'): ?>
                                    <div class="col-md-3 mx-auto ">
                                        <img src="<?php echo base_url('assests/uploads/staff/'.$staff['staff_pic']) ?>"   width="100px" height="100px" class=" img-circle"  alt="{{ i.Faculty_Name }}">
                                         <h5><?php echo $staff['staff_name'] ?></h5>
                                         <h6></h6>
                                         <p>Guest Faculty</p>
                                     </div>
                                <?php endif ?>
                                
                            <?php endforeach ?>
                            
                        </div>
                        
                    </div>
                </div>
            </div>

        </div>
    </div>

    </div>
    </div>
   
    <section>

    </section>

   
</section>
<?php $this->load->view('front/footer'); ?>
<script>
            $(document).ready(function(){
               
                $("#li0,#slider1").addClass('active');
                


            });
        function openCity(evt, cityName) {
          var i, tabcontent, tablinks;
          tabcontent = document.getElementsByClassName("tabcontent");
          for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
          }
          tablinks = document.getElementsByClassName("tablinks");
          for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
          }
          document.getElementById(cityName).style.display = "block";
          evt.currentTarget.className += " active";
        }

        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
        </script>