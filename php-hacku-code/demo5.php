<ul>
<?php
$lampstack = array(
  'Operating System' => 'Linux',
  'Server' => 'Apache',
  'Database' => 'MySQL',
  'Language' => 'PHP'
);
$length = sizeof($lampstack);
$keys = array_keys($lampstack);
for( $i = 0;$i < $length;$i++ ){
  echo '<li>' . $keys[$i] . ':' . $lampstack[$keys[$i]] . '</li>';
}
?>
</ul>

