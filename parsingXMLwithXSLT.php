<?php
$pr=xslt_create();
$res=xslt_process($pr,'simple_xml_create.xml','simple_xml_create.xsl');
echo '$res';
?>