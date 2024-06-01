<?php

namespace DocVerter;

use Dompdf\Dompdf;
use Dompdf\Options;

class HTML2PDFConverter
{
    protected $htmlContent;
    protected $pdfFilePath;

    public function __construct($htmlContent, $pdfFilePath)
    {
        $this->htmlContent = $htmlContent;
        $this->pdfFilePath = $pdfFilePath;
    }

    public function convert()
    {
        $dompdf = new Dompdf($this->getDompdfOptions());
        $dompdf->loadHtml($this->htmlContent);
        $dompdf->render();

        file_put_contents($this->pdfFilePath, $dompdf->output());

        return "HTML to PDF conversion completed successfully.";
    }

    protected function getDompdfOptions()
    {
        $options = new Options();
        // Add any customization options here if needed
        return $options;
    }
}
