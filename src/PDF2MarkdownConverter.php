<?php

namespace DocVerter;

use Spatie\PdfToText\Pdf;

class PDF2MarkdownConverter
{
    protected $pdfFilePath;
    protected $markdownFilePath;

    public function __construct($pdfFilePath, $markdownFilePath)
    {
        $this->pdfFilePath = $pdfFilePath;
        $this->markdownFilePath = $markdownFilePath;
    }

    public function convert()
    {
        $pdf = new Pdf($this->pdfFilePath);
        $markdown = $pdf->getText();

        file_put_contents($this->markdownFilePath, $markdown);

        return "PDF to Markdown conversion completed successfully.";
    }
}
