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

			/*include module handler*/
			include './build/modules/'.$name.'.php';

			/*break*/
			echo '<br/>'.PHP_EOL;

		}

	}

}

?>