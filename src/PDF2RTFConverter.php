<?php

namespace DocVerter;

use PHPRtfLite;

class PDF2RTFConverter
{
    protected $pdfFilePath;
    protected $rtfFilePath;

    public function __construct($pdfFilePath, $rtfFilePath)
    {
        $this->pdfFilePath = $pdfFilePath;
        $this->rtfFilePath = $rtfFilePath;
    }

    public function convert()
    {
        $rtf = new PHPRtfLite();
        $rtf->loadRtfFile($this->pdfFilePath);
        $rtfContent = $rtf->getRtf();

        file_put_contents($this->rtfFilePath, $rtfContent);

        return "PDF to RTF conversion completed successfully.";
    }
}
