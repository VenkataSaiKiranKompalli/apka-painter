<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pdf extends CI_Controller {
function index ()
{
    use C:\Program Files\wkhtmltopdf\bin\wkhtmltopdf;

// You can pass a filename, a HTML string or an URL to the constructor
$pdf = new Pdf('https://github.com/mikehaertl/phpwkhtmltopdf');

// On some systems you may have to set the path to the wkhtmltopdf executable
// $pdf->binary = 'C:\...';

if (!$pdf->saveAs('C:\Users\lenovo\Desktop\project\w3\page.pdf')) {
    echo $pdf->getError();
}
}

?>