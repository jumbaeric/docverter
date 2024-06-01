<?php

namespace DocVerter;

use PhpOffice\PhpSpreadsheet\IOFactory;
use Dompdf\Dompdf;
use Dompdf\Options;

class Excel2PDFConverter
{
    protected $excelFilePath;
    protected $pdfFilePath;

    public function __construct($excelFilePath, $pdfFilePath)
    {
        $this->excelFilePath = $excelFilePath;
        $this->pdfFilePath = $pdfFilePath;
    }

    public function convert()
    {
        $spreadsheet = IOFactory::load($this->excelFilePath);
        $writer = IOFactory::createWriter($spreadsheet, 'Pdf');
        $writer->save($this->pdfFilePath);

        return "Excel to PDF conversion completed successfully.";
    }
}
