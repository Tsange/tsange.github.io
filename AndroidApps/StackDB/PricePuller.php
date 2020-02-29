
<?php
//header('Content-type: text/plain');
$dom = new DOMDocument;
error_reporting(0);

// disable errors on invalid html
libxml_use_internal_errors(true);

$dom->loadHTMLFile('https://www.bullionbypost.co.uk/gold-price/gold-price-today/');

$tables = $dom->getElementsByTagName('table');

 //get all rows from the table
  $rows = $tables->item(0)->getElementsByTagName('tr'); 

  
  // loop over the table rows
  foreach ($rows as $row) 
  { 
   // get each column by tag name
      $cols = $row->getElementsByTagName('td'); 
   // echo the values  
      echo $cols->item(0)->nodeValue.'<br />'; 
      echo $cols->item(1)->nodeValue.'<br />'; 
      echo $cols->item(2)->nodeValue.'<br />'; 
    } 



?>



