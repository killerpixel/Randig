<?

function generate_content(){

	global $layout_type;
	switch($layout_type){
		case 'sections':	generate_sections(); break;
		case 'pages':		generate_page(); break;
		default:			error(no_layout_type); break;
	}

}

function generate_page(){

	/*get target*/
	$target = $_GET["page"];
	global $basedir;
	global $subdir;

	/*select target directory*/
	if (empty($target)) {
		$subdir = first_dir('./'.$basedir);
	}else{
		$subdir = $basedir.'/'.full_dirname($target);
	}

	/*parse modules*/
	$modules = array_diff(scandir('./'.$subdir), array('..', '.'));
	parse_modules(sort_names($modules));

}


function generate_sections(){

	/*gather sections*/
	global $basedir;
	$sections = array_diff(scandir('./'.$basedir), array('..', '.'));

	foreach (sort_names($sections) as $section) {
		if(substr($branch,0,1) != '.'){

			/*print section box*/
			echo '<div class="'.strip_numbering($section).'">';

			/*create section anchor*/
			echo '<a name="'.strip_numbering($section).'"></a>';

			/*gather requested blocks*/
			global $basedir;
			$subdirs = $basedir.'/'.$section;
			$modules = array_diff(scandir('./'.$subdirs), array('..', '.'));

			/*provide subdir path*/
			global $subdir;
			$subdir = $subdirs;

			/*parse modules*/
			parse_modules(sort_names($modules));

			/*close section box*/
			echo '<div class="'.strip_numbering($section).'">';

		}

	}

}

?>