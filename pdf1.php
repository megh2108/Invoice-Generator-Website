<?php 

$html = "<h1>G</h1>";

header("Content-Type: application/pdf");

// It will be called downloaded.pdf
header("Content-Disposition:inline;filename=downloaded.pdf");

// The PDF source is in original.pdf
echo $html;

?>