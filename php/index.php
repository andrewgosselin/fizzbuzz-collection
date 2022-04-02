<?php
// If you want this to output in the vscode terminal correctly, replace <br> with \n
// I have it this way because normally this would be output in the browser as html.
for ($i = 1; $i <= 100; $i++) {
    if ($i % 15 == 0) {
        echo 'FizzBuzz<br>';
    } elseif ($i % 3 == 0) {
        echo 'Fizz<br>';
    } elseif ($i % 5 == 0) {
        echo 'Buzz<br>';
    } else {
        echo $i . '<br>';
    }
}