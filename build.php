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
echo $pkg->build_from_components(explode(',', $_GET['scripts']));
?>