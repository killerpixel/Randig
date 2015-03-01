<?php

/*handle file contents*/
foreach ($files as $file) {

	/*skip .ds store*/
	if(substr($file,0,1) != '.'){

		/*get filetype*/
		$type = pathinfo($file, PATHINFO_EXTENSION);

		/*handle image*/
		if ($type == 'jpg'){

			/*get file data*/
			$filename = $content.'/'.$file;

			/*print*/
			echo '<img src="'.$filename.'" />';

		}

		/*handle text*/
		if ($type == 'txt'){

			/*get text data*/
			$filename = $content.'/'.$file;
			$file_open = fopen($filename, 'r');
			$text = fread($file_open,filesize($filename));
			fclose($file_open);

			/*print*/
			echo $text;

		}

	}

}

?>