<?php

namespace RTF2PDF;

use Dompdf\Dompdf;
use Dompdf\Options;

class RTF2PDFConverter
{
    protected $rtfContent;
    protected $pdfFilePath;

    public function __construct($rtfContent, $pdfFilePath)
    {
        $this->rtfContent = $rtfContent;
        $this->pdfFilePath = $pdfFilePath;
    }

    public function convert()
    {
        $dompdf = new Dompdf($this->getDompdfOptions());
        $dompdf->loadHtml($this->rtfContent);
        $dompdf->render();

        file_put_contents($this->pdfFilePath, $dompdf->output());

        return "RTF to PDF conversion completed successfully.";
    }

    protected function getDompdfOptions()
    {
        $options = new Options();
        // Add any customization options here if needed
        return $options;
    }
}
