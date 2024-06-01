<?php

namespace DocVerter;

use PhpOffice\PhpWord\IOFactory;
use Dompdf\Dompdf;
use Dompdf\Options;

class Word2PDFConverter
{
    protected $wordFilePath;
    protected $pdfFilePath;

    public function __construct($wordFilePath, $pdfFilePath)
    {
        $this->wordFilePath = $wordFilePath;
        $this->pdfFilePath = $pdfFilePath;
    }

    public function convert()
    {
        $phpWord = IOFactory::load($this->wordFilePath);
        $xmlWriter = IOFactory::createWriter($phpWord, 'PDF');
        $xmlWriter->save($this->pdfFilePath);

        return "Word to PDF conversion completed successfully.";
    }
}
