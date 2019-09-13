<?php
function get_files($dirpath) {
    $result = array();
    $cdir = scandir($dirpath); 
    foreach ($cdir as $value) {
            if (!in_array($value,array(".", "..")) 
            && !is_dir($dirpath . DIRECTORY_SEPARATOR . $value) 
            && preg_match('#.txt$#', $value)) {
            $result[] = $value;
         }
    } 
    return $result;
  }
  $file_arr = get_files('D:\OpenServer\OSPanel\domains\localhost');
  
  foreach($file_arr as $file){
    file_put_contents("new.txt",file_get_contents($file),FILE_APPEND); 
  }
  
  