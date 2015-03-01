<?

function parse_modules($boxes){

	foreach ($boxes as $box) {
		if(substr($box,0,1) != '.'){

			/*read module name*/
			$name = strip_numbering($box);

			/*provide global vars*/
			global $subdir;
			$content = $subdir.'/'.$box;

			/*provide subfiles*/
			$files = array_diff(scandir('./'.$content), array('..', '.'));

			/*create block*/
			echo '<div class="box '.$name.'">'.PHP_EOL;

				/*include module handler*/
				include './build/modules/'.$name.'.php';

			/*close block*/
			echo PHP_EOL.'</div>'.PHP_EOL;

		}

	}

}

?>