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
			echo '<div class="block">';

				/*include module handler*/
				include './build/modules/'.$name.'.php';

			/*close block*/
			echo '</div>'.PHP_EOL;

		}

	}

}

?>