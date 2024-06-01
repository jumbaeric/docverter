# Docverter

Docverter is a versatile PHP package for document conversion between various formats. Whether you need to convert RTF, PDF, HTML, Text, Image, Markdown, Excel, or Word documents, this package provides seamless functionality using industry-standard libraries.

## Installation

You can install the package via Composer:

```bash
composer require jumbaeric/docverter
```

## Usage

### RTF to PDF Conversion

```php
use DocVerter\RTF2PDFConverter;

$rtfContent = file_get_contents('example.rtf');
$pdfFilePath = 'output.pdf';

$converter = new RTF2PDFConverter($rtfContent, $pdfFilePath);
$converter->convert();
```

### PDF to RTF Conversion

```php
use DocVerter\PDF2RTFConverter;

$pdfFilePath = 'example.pdf';
$rtfFilePath = 'output.rtf';

$converter = new PDF2RTFConverter($pdfFilePath, $rtfFilePath);
$converter->convert();
```

### HTML to PDF Conversion

```php

use DocVerter\HTML2PDFConverter;

$htmlContent = file_get_contents('example.html');
$pdfFilePath = 'output.pdf';

$converter = new HTML2PDFConverter($htmlContent, $pdfFilePath);
$converter->convert();
```

### PDF to HTML Conversion

```php
use DocVerter\PDF2HTMLConverter;

$pdfFilePath = 'example.pdf';
$htmlFilePath = 'output.html';

$converter = new PDF2HTMLConverter($pdfFilePath, $htmlFilePath);
$converter->convert();

```

### Text to PDF Conversion

```php
use DocVerter\Text2PDFConverter;

$textContent = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.';
$pdfFilePath = 'output.pdf';

$converter = new Text2PDFConverter($textContent, $pdfFilePath);
$converter->convert();
```

### PDF to Text Conversion

``` php
use DocVerter\PDF2TextConverter;

$pdfFilePath = 'example.pdf';
$textFilePath = 'output.txt';

$converter = new PDF2TextConverter($pdfFilePath, $textFilePath);
$converter->convert();
```

### Image to PDF Conversion

```php
use DocVerter\Image2PDFConverter;

$imagePath = 'example.jpg';
$pdfFilePath = 'output.pdf';

$converter = new Image2PDFConverter($imagePath, $pdfFilePath);
$converter->convert();
```

### PDF to Image Conversion

```php
use DocVerter\PDF2ImageConverter;

$pdfFilePath = 'example.pdf';
$imageFolderPath = 'output/';

$converter = new PDF2ImageConverter($pdfFilePath, $imageFolderPath);
$converter->convert();
```

### Markdown to PDF Conversion

```php
use DocVerter\Markdown2PDFConverter;

$markdownContent = file_get_contents('example.md');
$pdfFilePath = 'output.pdf';

$converter = new Markdown2PDFConverter($markdownContent, $pdfFilePath);
$converter->convert();
```

### PDF to Markdown Conversion

```php
use DocVerter\PDF2MarkdownConverter;

$pdfFilePath = 'example.pdf';
$markdownFilePath = 'output.md';

$converter = new PDF2MarkdownConverter($pdfFilePath, $markdownFilePath);
$converter->convert();
```

### Excel to PDF Conversion

```php
use DocVerter\Excel2PDFConverter;

$excelFilePath = 'example.xlsx';
$pdfFilePath = 'output.pdf';

$converter = new Excel2PDFConverter($excelFilePath, $pdfFilePath);
$converter->convert();
```

### PDF to Excel Conversion

```php
use DocVerter\PDF2ExcelConverter;

$pdfFilePath = 'example.pdf';
$excelFilePath = 'output.xlsx';

$converter = new PDF2ExcelConverter($pdfFilePath, $excelFilePath);
$converter->convert();
```

### Word to PDF Conversion

```php
use DocVerter\Word2PDFConverter;

$wordFilePath = 'example.docx';
$pdfFilePath = 'output.pdf';

$converter = new Word2PDFConverter($wordFilePath, $pdfFilePath);
$converter->convert();
```

### PDF to Word Conversion

```php
use DocVerter\PDF2WordConverter;

$pdfFilePath = 'example.pdf';
$wordFilePath = 'output.docx';

$converter = new PDF2WordConverter($pdfFilePath, $wordFilePath);
$converter->convert();
```

## Features

- Versatile Conversion: Convert between RTF, PDF, and HTML formats seamlessly.
- Powered by Industry-standard Libraries: Utilizes Dompdf, PHPRtfLite, PhpSpreadsheet, PhpWord, and other libraries for reliable conversion.
- Simple Integration: Easily integrate into your PHP projects with Composer.
- Customizable Options: Easily customize PDF generation options as needed.

## Keywords and Tags
- Docverter
- PHP RTF to PDF
- Rich Text Format to PDF
- HTML to PDF
- PDF to HTML
- Dompdf
- PHPRtfLite
- RTF Converter
- HTML Converter
- PDF Generation
- PHP Package
- Composer Package
- Document Conversion

## Credits
<a href="https://github.com/dompdf/dompdf">Dompdf</a> - PDF generation library.
<a href="https://github.com/phprtflite/phprtflite">PHPRtfLite</a> - RTF generation library.
<a target="_new" rel="noreferrer" href="https://github.com/PHPOffice/phpspreadsheet">PhpSpreadsheet</a> - Excel generation library.
<a target="_new" rel="noreferrer" href="https://github.com/PHPOffice/PHPWord">PhpWord</a> - Word generation library.