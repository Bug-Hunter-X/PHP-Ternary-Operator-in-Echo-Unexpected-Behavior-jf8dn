# PHP Ternary Operator in Echo Unexpected Behavior
This repository demonstrates a subtle bug in PHP related to the use of the ternary operator within an echo statement. The problem occurs when you omit parentheses around the ternary expression, causing unexpected output behavior. The bug.php file contains the erroneous code, while bugSolution.php offers the correct solution.

## Bug Description
When using the ternary operator inside an echo statement, without parentheses around the ternary expression, PHP interprets it in such a way that only one part of the result is echoed. If the condition is false the false part is returned, otherwise the whole expression is evaluated as true. 

## Solution
The solution involves adding parentheses to explicitly define the precedence and ensure the entire ternary expression is evaluated correctly before being passed to the echo statement.