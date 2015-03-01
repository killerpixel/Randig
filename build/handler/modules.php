<?

function parse_modules($blocks){

	foreach ($blocks as $block) {
		if(substr($block,0,1) != '.'){

			/*read module name*/
			$name = strip_numbering($block);

			/*provide global vars*/
			global $subdir;
			$content = $subdir.'/'.$block;

			/*provide subfiles*/
			$files = array_diff(scandir('./'.$content), array('..', '.'));

			/*create block*/
			echo '<div class="block '.$name.'">'.PHP_EOL;

				/*include module handler*/
				include './build/modules/'.$name.'.php';

			/*close block*/
			echo PHP_EOL.'</div>'.PHP_EOL;

		}

	}

}

?>