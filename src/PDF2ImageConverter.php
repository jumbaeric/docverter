<?php

namespace DocVerter;

use Spatie\PdfToImage\Pdf;

class PDF2ImageConverter
{
    protected $pdfFilePath;
    protected $imageFolderPath;

    public function __construct($pdfFilePath, $imageFolderPath)
    {
        $this->pdfFilePath = $pdfFilePath;
        $this->imageFolderPath = $imageFolderPath;
    }

    public function convert()
    {
        $pdf = new Pdf($this->pdfFilePath);
        $pdf->saveImage($this->imageFolderPath);

        return "PDF to Image conversion completed successfully.";
    }
}
