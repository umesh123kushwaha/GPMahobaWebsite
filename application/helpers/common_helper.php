<?php

        // Resize Image Function  helper.
	 function resize($source_path, $new_path, $width, $height)
        {
        	$CI =& get_instance();
                $config['image_library'] = 'gd2';
                $config['source_image'] = $source_path;
                $config['new_image'] = $new_path;
                $config['create_thumb'] = FALSE;
                $config['maintain_ratio'] = TRUE;
                $config['width']         = $width;
                $config['height']       = $height;
                $config['thumb_marker']       = '';

                $CI->load->library('image_lib', $config);

                $CI->image_lib->resize();
                if ( ! $CI->image_lib->resize())
                {
                        echo $source_path;
                        echo $CI->image_lib->display_errors();exit;
                }
                echo  $config['new_image'];


                $CI->image_lib->clear();


        }


?>