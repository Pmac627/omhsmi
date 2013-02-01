<?php
/** download_catalog_pdf.php **/

// required for IE, otherwise Content-Disposition may be ignored
if(ini_get('zlib.output_compression'))
  ini_set('zlib.output_compression', 'Off');

// It will be called SMI-OMH Catalog.pdf
header('Content-Disposition: attachment; filename="SMI-OMH Cataloge.pdf"');

// The PDF source is in catalog.pdf
readfile('docs/catalog.pdf');
?>