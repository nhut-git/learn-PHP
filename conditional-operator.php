<html>
<head><title>Conditional Operator</title></head>
<body>
  <?php
    $a = 10;
    $b = 20;

    /* If condition is true then assign a to result otherwise b */
    $result = ($a > $b) ? $a : $b;
    echo "TEST1 : Value of result is $result<br/>";
    /* If condition is true then assign a to result otherwise b */
    $result = ($a < $b) ? $a : $b;
    echo "TEST2 : Value of result is $result<br/>";
   ?>
</body>
</html>
