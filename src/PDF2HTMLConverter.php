<?php

namespace DocVerter;

use Dompdf\Dompdf;
use Dompdf\Options;

class PDF2HTMLConverter
{
    protected $pdfFilePath;
    protected $htmlFilePath;

    public function __construct($pdfFilePath, $htmlFilePath)
    {
        $this->pdfFilePath = $pdfFilePath;
        $this->htmlFilePath = $htmlFilePath;
    }

    public function convert()
    {
        $dompdf = new Dompdf();
        $dompdf->loadHtmlFile($this->pdfFilePath);
        $htmlContent = $dompdf->output();

        file_put_contents($this->htmlFilePath, $htmlContent);

        return "PDF to HTML conversion completed successfully.";
    }
}
