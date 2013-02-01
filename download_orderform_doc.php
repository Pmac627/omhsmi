<?php
/** download_orderform_doc.php **/

// required for IE, otherwise Content-Disposition may be ignored
if(ini_get('zlib.output_compression'))
  ini_set('zlib.output_compression', 'Off');

// It will be called SMI-OMH Order Form.doc
header('Content-Disposition: attachment; filename="SMI-OMH Order Form.doc"');

// The DOC source is in orderform.doc
readfile('docs/orderform.doc');
?>