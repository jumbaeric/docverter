<?php

namespace DocVerter;

use Smalot\PdfParser\Parser;

class PDF2TextConverter
{
    protected $pdfFilePath;
    protected $textFilePath;

    public function __construct($pdfFilePath, $textFilePath)
    {
        $this->pdfFilePath = $pdfFilePath;
        $this->textFilePath = $textFilePath;
    }

    public function convert()
    {
        $parser = new Parser();
        $pdf = $parser->parseFile($this->pdfFilePath);
        $text = $pdf->getText();

        file_put_contents($this->textFilePath, $text);

        return "PDF to Text conversion completed successfully.";
    }
}
