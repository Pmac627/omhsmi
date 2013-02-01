<?php
/** download_orderform_pdf.php **/

// required for IE, otherwise Content-Disposition may be ignored
if(ini_get('zlib.output_compression'))
  ini_set('zlib.output_compression', 'Off');

// It will be called SMI-OMH Order Form.pdf
header('Content-Disposition: attachment; filename="SMI-OMH Orderform.pdf"');

// The PDF source is in orderform.pdf
readfile('docs/orderform.pdf');
?>