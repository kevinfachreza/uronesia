<?php

function slugify($text)
{
  // replace non letter or digits by -
  $text = preg_replace('~[^\pL\d]+~u', '-', $text);

  // transliterate
  $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

  // remove unwanted characters
  $text = preg_replace('~[^-\w]+~', '', $text);

  // trim
  $text = trim($text, '-');

  // remove duplicate -
  $text = preg_replace('~-+~', '-', $text);

  // lowercase
  $text = strtolower($text);

  if (empty($text)) {
    return 'n-a';
  }

  return $text;
}


function unslugify($text)
{
  // replace non letter or digits by -
  $text = str_replace('-', ' ', $text);

  // capitalize
  $text = ucfirst($text);

  return $text;
}


function viewAttrYesNo($variable)
{
  $text = $variable == 1 ? 'Yes' : 'No';

  return $text;
}

?>