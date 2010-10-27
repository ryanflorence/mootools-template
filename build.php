<?
include(dirname(__FILE__) . "/lib/packager/packager.php");
header('Content-type: text/javascript');

$packages = array();
$dir = "javascripts";
if ($dh = opendir($dir)) {
	while (($file = readdir($dh)) !== false) {
		if ($file != "." && $file != "..") $packages[] = $dir . '/' . $file;
	}
	closedir($dh);
}
//print_r($packages); exit;
$pkg = new Packager($packages);
if (isset($_GET['path'])) {
	$pkg->write_from_components($_GET['path'], explode(',', $_GET['scripts']));
	echo "// built file to " . $_GET['path'];
} else {
	echo $pkg->build_from_components(explode(',', $_GET['scripts']));
}
?>
