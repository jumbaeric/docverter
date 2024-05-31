<?php
use RTF2PDF\RTF2PDFConverter;

$rtfContent = file_get_contents('example.rtf');
$pdfFilePath = 'output.pdf';

$converter = new RTF2PDFConverter($rtfContent, $pdfFilePath);
$converter->convert();
