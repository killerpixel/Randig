<?php

/*handle file contents*/
foreach ($files as $file) {

	/*get only txt*/
	$type = pathinfo($file, PATHINFO_EXTENSION);
	if ($type == 'txt'){

		/*get txt data*/
		$filename = $content.'/'.$file;
		$file_open = fopen($filename, 'r');
		$input = fread($file_open,filesize($filename));
		fclose($file_open);

		/*handle code input*/
		if(strpos($input, '?v=') !== false){
			/*full url delivered*/
			$code = substr(strrchr($input, "="), 1);
		}else{
			/*video code delivered*/
			$code = $input;
		}

		/*print*/
		echo '
			<div class="video">
				<img class="spacer" src="build/images/ratio_16-9.png" />
				<iframe width="1280" height="720" src="//www.youtube.com/embed/'.$code.'?rel=0" frameborder="0" allowfullscreen></iframe>
			</div>
		';

	}

}

?>
