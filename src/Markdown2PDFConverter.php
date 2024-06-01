<?php

namespace DocVerter;

use Dompdf\Dompdf;
use Dompdf\Options;

class Markdown2PDFConverter
{
    protected $markdownContent;
    protected $pdfFilePath;

    public function __construct($markdownContent, $pdfFilePath)
    {
        $this->markdownContent = $markdownContent;
        $this->pdfFilePath = $pdfFilePath;
    }

    public function convert()
    {
        $dompdf = new Dompdf($this->getDompdfOptions());
        $dompdf->loadHtml($this->markdownContent);
        $dompdf->render();

        file_put_contents($this->pdfFilePath, $dompdf->output());

        return "Markdown to PDF conversion completed successfully.";
    }

    protected function getDompdfOptions()
    {
        $options = new Options();
        // Add any customization options here if needed
        return $options;
    }
}
