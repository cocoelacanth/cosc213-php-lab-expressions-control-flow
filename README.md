# COSC213 Lab: PHP Expressions and Control Flow
## Running
1. Clone this repository:
    ```bash
    git clone https://github.com/cocoelacanth/cosc213-php-lab-expressions-control-flow
    ```
2. Ensure PHP is installed:
    ```bash
    php -v
    ```
3. Start a PHP server:
    ```bash
    cd cosc213-php-lab-expressions-control-flow
    php -S localhost:8000
    ```
4. Go to localhost:8000/path/to/page.php to view any of the PHP pages.

## Sample runs
#### /lab4/01_expressions.php?score=40
```
sum=13 prod=30 a=15
14
20
Hello Ada
Hello Ada
true
false
Entry allowed
Result: Fail/NoScore
This is some text with 17 added to it.
```

#### /lab4/01_expressions.php?score=70
```
sum=13 prod=30 a=15
14
20
Hello Ada
Hello Ada
true
false
Entry allowed
Result: Pass
This is some text with 17 added to it.
```

#### /lab4/02_branching.php?role=editor&code=401
```
Welcome, editor
Back to work.
Not Authorized
```

#### /lab4/02_branching.php?lang=fr&day=Sat&code=400
```
Bienvenue, admin
Bon week-end !
Mauvaise Demande
```

## `==` vs `===`
`===` should be preferred over `==` when strict equality is required. `==` performs type conversions whenever possible to make the compared values the same type, while `===` does not. For example, `'123' == 123` returns `true`, while `'123' === 123` returns `false.`
