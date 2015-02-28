<?php


/*include handles*/
foreach (glob("build/handler/*.php") as $handle)
{
	include $handle;
}


/*detect layout type*/
$branches = array_diff(scandir('./'), array('..', '.'));
$layout_type;
$basedir;

foreach ($branches as $branch) {

	$pos = stripos($branch, 'content.');
	if ($pos !== false) {
		$layout_type = substr($branch, $pos+8);
		/*set main dir*/
		$basedir = $branch;
	}

}


/*include head*/
include('build/layout/head.php');


/*generate navigation*/
generate_navigation();


/*rail*/
echo '<div class="content rail">';


/*generate content*/
generate_content();


/*/rail*/
echo '</div>';


/*include foot*/
include('build/layout/foot.php');


?>