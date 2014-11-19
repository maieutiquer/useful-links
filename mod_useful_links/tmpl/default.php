<?php defined( '_JEXEC' ) or die( 'Restricted access' );

$markup = '
<div class="list-table useful-links">';

if ($cols < 1) {
  $cols = 1;
}

for ($i = 0; $i < $cols; $i++) {
  $markup .= '<ul class="list-table-column cols-'.$cols.'">';
  for ($j = 0; $j < ceil(count($titles) / $cols); $j++) {
    $current = ceil(count($titles) / $cols) * $i + $j;
    if (isset($titles[$current])) {
      $markup .= '<li>';
      $title = $titles[$current];
      $url = "#";
      if (isset($urls[$current])) {
        $url = $urls[$current];
        $markup .= '<a href="'.$url.'" target="_blank" rel="nofollow">'.$title.'</a>';
      } else {
        $markup .= $title;
      }
      $markup .= '</li>';
    }
  }
  $markup .= '</ul>';
}

$markup .= '</div>
';

echo $markup;
