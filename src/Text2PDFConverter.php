<?php

namespace DocVerter;

use Dompdf\Dompdf;
use Dompdf\Options;

class Text2PDFConverter
{
    protected $textContent;
    protected $pdfFilePath;

    public function __construct($textContent, $pdfFilePath)
    {
        $this->textContent = $textContent;
        $this->pdfFilePath = $pdfFilePath;
    }

    public function convert()
    {
        $dompdf = new Dompdf($this->getDompdfOptions());
        $dompdf->loadHtml($this->textContent);
        $dompdf->render();

        file_put_contents($this->pdfFilePath, $dompdf->output());

        return "Text to PDF conversion completed successfully.";
    }

    protected function getDompdfOptions()
    {
        $options = new Options();
        // Add any customization options here if needed
        return $options;
    }
}
