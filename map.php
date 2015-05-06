<?php
// Includes the content of connect.php which connects to the database.
include ('connect.php');

function parseToXML($htmlStr) 
{ 
$xmlStr=str_replace('<','&lt;',$htmlStr); 
$xmlStr=str_replace('>','&gt;',$xmlStr); 
$xmlStr=str_replace('"','&quot;',$xmlStr); 
$xmlStr=str_replace("'",'&#39;',$xmlStr); 
$xmlStr=str_replace("&",'&amp;',$xmlStr); 
return $xmlStr; 
} 

// Select all the rows in the markers table
$query = "select * from markers where type LIKE '%e%' and ((0 >= Price and 0 <= Price_Two) or (10000 >= Price and 10000 <= Price_Two) or (0 <= Price and 10000 >= Price)) and (Available = 'yes' or Available = 'no')";
$result = mysql_query($query);
if (!$result) {
  die('Invalid query: ' . mysql_error());
}

header("Content-type: text/xml");

// Start XML file, echo parent node
echo '<markers>';

// Iterate through the rows, printing XML nodes for each
while ($row = @mysql_fetch_assoc($result)){
  //$row items cannot have any null cells in the DB or error, parseToXML may contain null
  // ADD TO XML DOCUMENT NODE
  echo '<marker ';
  echo 'page_id="' . $row['page_id'] . '" ';
  echo 'name="' . parseToXML($row['name']) . '" ';
  echo 'id="' . $row['id'] . '" ';
  echo 'bdrms="' . $row['bdrms'] . '" ';
  echo 'bath="' . parseToXML($row['bath']) . '" ';
  echo 'address="' . parseToXML($row['address']) . '" ';
  echo 'lat="' . $row['lat'] . '" ';
  echo 'lng="' . $row['lng'] . '" ';
  echo 'type="' . $row['type'] . '" ';
  echo 'Price="' . parseToXML($row['Price']) . '" ';
  echo 'Price_Two="' . parseToXML($row['Price_Two']) . '" ';
  echo 'sqft="' . parseToXML($row['sqft']) . '" ';
  echo 'floors="' . parseToXML($row['floors']) . '" ';
  echo 'property_manager="' . parseToXML($row['property_manager']) . '" ';
  echo '/>';
}

// End XML file
echo '</markers>';
?>
