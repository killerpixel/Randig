<?php

/*handle file contents*/
foreach ($files as $file) {

	/*skip .ds store*/
	if(substr($file,0,1) != '.'){

		/*get filetype*/
		$type = pathinfo($file, PATHINFO_EXTENSION);
		switch ($type){

			/*handle image*/
			case 'mp4':

				/*get file data*/
				$filename = $content.'/'.$file;

				/*print*/
				echo '
					<video controls>
						<source src="'.$filename.'" type="video/mp4">
					</video>
				';

				break;

			/*handle errors*/
			default:
				error(no_files_matched);
				break;

		}

	}

}

?>
