Write a PHP Calculator class which will accept two values as arguments, then add them, subtract them, 
multiply them together, or divide them on request.

Provide an opportunity to make calculation by chain.

For example:
```
$mycalc = new MyCalculator(12, 6);
echo $mycalc->add(); // Displays 18
echo $mycalc->multiply(); // Displays 72

// Calculation by chain
echo $mycalc->add()->divideBy(9); // Displays 2 ( (12+6)/9=2 )
```

_Your solution:_

should contain PHP class with solution. Use type hinting and return type declaration with strict mode enabled;

should contain PHPUnit test. Test should complete successfully;

should have no warnings or errors.
