```php
function increment_array_values(array &$arr): void {
  foreach ($arr as &$value) {
    $value++;
  }
}

$arr = [1, 2, 3];
increment_array_values($arr);
print_r($arr); // Output: Array ( [0] => 2 [1] => 3 [2] => 4 )

$arr = ['a' => 1, 'b' => 2, 'c' => 3];
increment_array_values($arr);
print_r($arr); //Output: Array ( [a] => 2 [b] => 3 [c] => 4 )

//Unexpected behavior
$arr = [1, 2, [3, 4]];
increment_array_values($arr);
print_r($arr); // Output: Array ( [0] => 2 [1] => 3 [2] => Array ( [0] => 3 [1] => 4 ) )

// Expected behavior
$arr = [1, 2, [3, 4]];
increment_array_values($arr);
print_r($arr); //Output: Array ( [0] => 2 [1] => 3 [2] => Array ( [0] => 4 [1] => 5 ) )
```