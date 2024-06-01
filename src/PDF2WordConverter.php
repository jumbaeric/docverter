<?php

namespace DocVerter;

use PhpOffice\PhpWord\IOFactory;

class PDF2WordConverter
{
    protected $pdfFilePath;
    protected $wordFilePath;

    public function __construct($pdfFilePath, $wordFilePath)
    {
        $this->pdfFilePath = $pdfFilePath;
        $this->wordFilePath = $wordFilePath;
    }

    public function convert()
    {
        $phpWord = IOFactory::load($this->pdfFilePath);
        $xmlWriter = IOFactory::createWriter($phpWord, 'Word2007');
        $xmlWriter->save($this->wordFilePath);

        return "PDF to Word conversion completed successfully.";
    }
}
