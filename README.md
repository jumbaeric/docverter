# RTF2PDF

RTF2PDF is a versatile PHP package designed for converting RTF (Rich Text Format) documents to PDF format effortlessly. Powered by the robust Dompdf library, this package offers seamless conversion functionality, ensuring high-quality PDF output with ease.

## Installation

Easily integrate RTF2PDF into your project via Composer:

```bash
composer require jumbaeric/rtf2pdf
```

## Usage

```php
use RTF2PDF\RTF2PDFConverter;

$rtfContent = file_get_contents('example.rtf');
$pdfFilePath = 'output.pdf';

$converter = new RTF2PDFConverter($rtfContent, $pdfFilePath);
$converter->convert();
```

## Features

- Effortless Conversion: Convert RTF documents to PDF format effortlessly.
- Powered by Dompdf: Utilizes the powerful Dompdf library for reliable and high-quality PDF generation.
- Simple Integration: Seamlessly integrate RTF2PDF into your PHP projects with Composer.
- Customizable Options: Easily customize PDF generation options as needed.

## Keywords and Tags
- RTF2PDF
- PHP RTF to PDF
- Rich Text Format to PDF
- Dompdf
- RTF Converter
- PDF Generation
- PHP Package
- Composer Package
- Document Conversion

## Credits
<a href="https://github.com/dompdf/dompdf">Dompdf</a> - The underlying PDF generation library.