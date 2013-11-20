<?
$string = $_GET['string'];

$segments = explode('/', $string);
// prepare vars
$w = (int) $segments[0];
$h = (int) $segments[1];
$section = $segments[2];
$file = $segments[3];

if($file == '') {
    $file = 'icon-blank.png';
    $section = '';
}



// load php thumb
include_once('../thumb/phpthumb.class.php');

$phpThumb = new phpthumb();
$phpThumb->setSourceFilename("../assets/{$section}/{$file}");

if($w > 0) {
    $phpThumb->setParameter('w', $w);
}
if($h > 0) {
    $phpThumb->setParameter('h', $h);
}
if($h > 0 && $w > 0) {
    $phpThumb->setParameter('zc', 1);
}
if($h > 100 && $w > 100) {
    $phpThumb->setParameter('f', 'jpg');
    $phpThumb->setParameter('q', 100);
} else {
    $phpThumb->setParameter('f', 'png');
}
$phpThumb->GenerateThumbnail();
$phpThumb->RenderToFile("../assets/{$w}/{$h}/{$section}/{$file}");

$phpThumb->OutputThumbnail();