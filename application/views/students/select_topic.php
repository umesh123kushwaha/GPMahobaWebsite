<option  value="">---Select topic---</option>
	<?php if (!empty($topics))
	 {
	 	foreach ($topics as $topic)
	 	 {?>
	 	 	<option value="<?php echo $topic['topic'] ?>"><?php echo $topic['topic']; ?></option>

	 	 	<?php
	 		# code...
	 	}
		# code...
	} ?>
