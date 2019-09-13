<?php
$text = "Я приобрел бронестранспортер вчера";
$max = 6;
$new_text = preg_replace('~\\b([a-zа-яё]{' . $max. '})[a-zа-яё]+\\b~iu', '$1*', $text);
echo $new_text;