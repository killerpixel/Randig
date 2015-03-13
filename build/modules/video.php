<?php

/*handle file contents*/
foreach ($files as $file) {

	/*skip .ds store*/
	if(substr($file,0,1) != '.'){

		/*get filetype*/
		$type = pathinfo($file, PATHINFO_EXTENSION);
		switch ($type){

			/*handle filetypes*/
			case 'mp4':		$mp4 = $content.'/'.$file;		break;
			case 'ogg':		$ogg = $content.'/'.$file;		break;
			case 'jpg':		$jpg = $content.'/'.$file;		break;

		}

	}

}

/*print*/
echo '
	<video controls poster="'.$jpg.'">
		<source src="'.$mp4.'" type="video/mp4">
		<source src="'.$ogg.'" type="video/mp4">
	</video>
';

?>
