The solution to this problem is straightforward: enclose the entire ternary expression in parentheses. This ensures that PHP correctly evaluates the ternary operator and then passes the resulting string to the echo statement. 
```php
<?php
  $variable = false;
  echo ($variable ? 'trueOutput' : 'falseOutput');
?>
```
By adding the parentheses, the output will be consistent regardless of the value of \$variable. If \$variable is true, it will echo 'trueOutput'; if it's false, it will echo 'falseOutput'.  The code will now behave as expected, echoing the whole expression. 