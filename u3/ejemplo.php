<?php
 $paper[] = "Copier";
 $paper[] = "Inkjet";
 $paper[] = "Laser";
 $paper[] = "Photo";

 print_r($paper);
 echo("<br>");
 var_dump($paper); // contenido y tipo de variable

echo("<br>");

 $paper['copier'] = "Copier & Multipurpose";
 $paper['inkjet'] = "Inkjet Printer";
 $paper['laser'] = "Laser Printer";
 $paper['photo'] = "Photographic Paper";
 echo $paper['laser'];
 echo("<br>");
 var_dump($paper['photo']);
?> 
 