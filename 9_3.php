<?php
$text = file_get_contents('taks.txt');
$text_arr = explode(",", $text);
shuffle($text_arr);
$words = implode(",", $text_arr);
echo json_encode($words);