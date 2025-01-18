# PHP Pass by Reference Issue with Nested Arrays

This repository demonstrates an unexpected behavior of PHP's pass by reference when dealing with nested arrays within a function.

The `increment_array_values` function aims to increment each value within an array. While it works correctly for simple arrays, it behaves unexpectedly when encountering nested arrays.

The `bug.php` file shows the problematic behavior. The `bugSolution.php` file offers a solution to resolve this issue.

## How to Reproduce

1. Clone this repository.
2. Run `bug.php` using a PHP interpreter.
3. Observe the unexpected output for the nested array.

## Solution

The solution involves recursively traversing the array to handle nested arrays properly. This ensures that all values are incremented as expected, regardless of their nesting level. Refer to `bugSolution.php` for the corrected implementation.
