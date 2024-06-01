<?php

namespace DocVerter;

use PhpOffice\PhpSpreadsheet\IOFactory;

class PDF2ExcelConverter
{
    protected $pdfFilePath;
    protected $excelFilePath;

    public function __construct($pdfFilePath, $excelFilePath)
    {
        $this->pdfFilePath = $pdfFilePath;
        $this->excelFilePath = $excelFilePath;
    }

    public function convert()
    {
        $spreadsheet = IOFactory::load($this->pdfFilePath);
        $writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
        $writer->save($this->excelFilePath);

        return "PDF to Excel conversion completed successfully.";
    }
}
