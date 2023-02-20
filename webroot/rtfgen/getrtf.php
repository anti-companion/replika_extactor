<?php
// Example use
include("class_rtf.php");

$rtf = new rtf("rtf_config.php");
$rtf->setPaperSize(5);
$rtf->setPaperOrientation(1);
$rtf->setDefaultFontFace(0);
$rtf->setDefaultFontSize(24);
$rtf->setAuthor("noginn");
$rtf->setOperator("me@noginn.com");
$rtf->setTitle("RTF Document");
$rtf->addColour("#000000");
$rtf->addText("<p>This is a test</p>");
$rtf->addColour("#0000FF");
$rtf->addText("<p>This is a test</p>");
$rtf->addColour("#FF0000");
$rtf->addText("<p>This is a test</p>");
$rtf->getDocument();
?>