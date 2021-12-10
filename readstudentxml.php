<?php
  $simple_xml = simplexml_load_file('student.xml');

  foreach( $simple_xml->result as $result){
    echo 'Reg No.: ' . $result['regno'] . 
      ' Student ' . $result->name .
      ' Course ' . $result->course .
      ' CGPA ' . $result->cgpa . "";
  }
?>