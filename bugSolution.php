```php
function increment_array_values(array &$arr): void {
  foreach ($arr as &$value) {
    if (is_array($value)) {
      increment_array_values($value); // Recursive call for nested arrays
    } else {
      $value++;
    }
  }
}

$arr = [1, 2, [3, 4]];
increment_array_values($arr);
print_r($arr); // Output: Array ( [0] => 2 [1] => 3 [2] => Array ( [0] => 4 [1] => 5 ) )
```