 <option value="">-------Select Subjects -----------------</option>
                        <?php   if (!empty($subjects))
                         {
                          
                          foreach ($subjects as $subject)
                           {
                            ?>
                             <option <?php echo   set_select('subject',$subject['id'],false);?> value="<?php echo $subject['id'] ?>"><?php echo $subject['subject_name'] ?></option>




                            <?php                           
                          }
                        } ?>