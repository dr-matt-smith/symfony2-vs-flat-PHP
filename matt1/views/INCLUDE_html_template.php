<?php

//$htmlHeaderPath = "$templatePath/INCLUDE_html_header.php";
//$htmlNavPath = "$templatePath/INCLUDE_html_nav.php";
//$htmlFooterPath = "$templatePath/INCLUDE_html_footer.php";

$htmlHeaderPath = "INCLUDE_html_header.php";
$htmlNavPath = "INCLUDE_html_nav.php";
$htmlFooterPath = "INCLUDE_html_footer.php";


include($htmlHeaderPath);
include($htmlNavPath);
echo "$bodyHTML";
include($htmlFooterPath);