<?php
$rows = $_POST['rows']; 
$cols = $_POST['cols']; 

$data = array( 
    "rows" => $rows, 
    "cols" => $cols,
);
echo json_encode($data);

?>