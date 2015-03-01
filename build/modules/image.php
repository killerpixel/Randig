<?php

/*handle file contents*/
foreach ($files as $file) {

	/*skip .ds store*/
	if(substr($file,0,1) != '.'){

		/*get filetype*/
		$type = pathinfo($file, PATHINFO_EXTENSION);
		if ($type == 'jpg'){

			/*get file data*/
			$filename = $content.'/'.$file;

			/*print*/
			echo '<img src="'.$filename.'" />';

		}

	}

}

?>