<?php

/*handle file contents*/
foreach ($files as $file) {

	/*skip .ds store*/
	if(substr($file,0,1) != '.'){

		/*get filetype*/
		$type = pathinfo($file, PATHINFO_EXTENSION);
		switch ($type){

			/*handle text*/
			case 'txt':

				/*get text data*/
				$filename = $content.'/'.$file;
				$file_open = fopen($filename, 'r');
				$text = fread($file_open,filesize($filename));
				fclose($file_open);

				/*print*/
				echo $text;

				break;

			/*handle image*/
			case 'jpg' || 'png' || 'gif':

				/*get file data*/
				$filename = $content.'/'.$file;

				/*print*/
				echo '<img src="'.$filename.'" />';

				break;

			/*handle errors*/
			default:
				error(no_files_matched);
				break;

		}

	}

}

?>