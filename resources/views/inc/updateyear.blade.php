<?php
  $fromYear = 2012; 
  $thisYear = (int)date('Y'); 
  echo $fromYear . (($fromYear != $thisYear) ? '-' . $thisYear : '');