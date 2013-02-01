<?php
/** download_catalog_doc.php **/

// required for IE, otherwise Content-Disposition may be ignored
if(ini_get('zlib.output_compression'))
  ini_set('zlib.output_compression', 'Off');

// It will be called SMI-OMH Catalog.doc
header('Content-Disposition: attachment; filename="SMI-OMH Cataloge.doc"');

// The DOC source is in catalog.doc
readfile('docs/catalog.doc');
?>