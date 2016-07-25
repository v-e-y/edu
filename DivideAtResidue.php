<?php

while ($int <= 100) {
  if ($int % 3 == 0) {
      echo $int . "\n";
      $int += 1;
  } else {
      $int += 1;
      continue;
  }
}

// TODO: Пошукати як можливо позбавитись повторювання коду.

?>
