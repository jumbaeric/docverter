<?php

namespace DocVerter;

use Spatie\Image\Image;

class Image2PDFConverter
{
    protected $imagePath;
    protected $pdfFilePath;

    public function __construct($imagePath, $pdfFilePath)
    {
        $this->imagePath = $imagePath;
        $this->pdfFilePath = $pdfFilePath;
    }

    public function convert()
    {
        Image::load($this->imagePath)
            ->savePdf($this->pdfFilePath);

        return "Image to PDF conversion completed successfully.";
    }
}
