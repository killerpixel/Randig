<?


/*select navigation type*/
function generate_navigation(){

	global $navigation;
	global $basedir;
	global $layout_type;

	$navigation .= PHP_EOL;
	$navigation .= '<div class="navigation">'.PHP_EOL;
	$navigation .= '<ul>'.PHP_EOL;

	$branches = array_diff(scandir('./'.$basedir), array('..', '.'));
	foreach (sort_names($branches) as $branch) {
		if(substr($branch,0,1) != '.'){

			switch($layout_type){

				case 'sections':
				$navigation .= '<li><a href="#'.plain_name(strip_numbering($branch)).'">'.strip_numbering($branch).'</a></li>'.PHP_EOL;
				break;

				case 'pages':
				$navigation .= '<li><a href="'.plain_name(strip_numbering($branch)).'">'.strip_numbering($branch).'</a></li>'.PHP_EOL;
				break;

				default:
				break;

			}

		}
	}

	$navigation .= '</ul>'.PHP_EOL;
	$navigation .= '</div>'.PHP_EOL;

	/*output*/
	echo $navigation;

}


?>