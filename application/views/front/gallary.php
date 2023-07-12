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
                            <li>Gallary</li>
                        </ul>
                    </nav>

                    <div class="page_title">
                        <h2>Gallary</h2>
                        <!--<span class="sub_heading">We are here for you 24/7</span>-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container mt-3">
    
             <div class="row">
              <?php 
              if (!empty($gallarydata)) {
                foreach($gallarydata as $gallary)
                    {?>
                         <div class="col-md-4  p-1">
                                <div class=" m-1 border p-1">
                                    <a href="<?php echo base_url().'assests/uploads/gallary/'.$gallary['image'] ?>"><img src="<?php echo base_url().'assests/uploads/gallary/'.$gallary['image'] ?>" alt="" width="100%" height="400px"></a>
                                    <div class=" text-center p-1 m-1"> <h5><?php echo $gallary['title'] ?></h5> </div>
                                </div>

                                
                            </div>


                         <?php
                    }
              }

               ?>
               
               
             </div>
         </div>
        
    </section>

    
</section>
<?php $this->load->view('front/footer'); ?>