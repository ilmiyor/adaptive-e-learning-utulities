<?php

if ($testContent->variant1!=='') {
  $variant[$testContent->variant1] = $testContent->answer;
}
if ($testContent->variant2!=='') {
  $variant[$testContent->variant2] = $testContent->answer;
}
if ($testContent->variant3!=='') {
  $variant[$testContent->variant3] = $testContent->answer;
}
if ($testContent->variant4!=='') {
  $variant[$testContent->variant4] = $testContent->answer;
}

$now = date('Y-m-d H:i:s');
?>
