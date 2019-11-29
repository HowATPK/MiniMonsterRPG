<!DOCTYPE html>
<html>
<body>
    <?php
      $s = "To JEST \"przykładowy\" <b>ciąg 'tekstowy'</b>";
      echo "\n 1 " . $s ;
      echo "\n 2 " . addslashes($s);
      echo "\n 3 " . crc32($s) ;
      echo "\n 4 " . explode(" ", $s) ;
      echo "\n 5 " . htmlspecialchars($s) ;
      echo "\n 6 " . htmlspecialchars_decode (htmlspecialchars($s)) ;
      echo "\n 7 " . implode (" ", explode(" ", $s)) ;
      echo "\n 8 " . md5($s) ;
      echo "\n 9 " . sha1($s) ;
       
    ?>
</body>
</html>