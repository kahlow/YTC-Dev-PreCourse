#Operators

An operator is a special character that can be used to return a value or perform an action. You'll see what we mean by 'value' and 'action' below.

First, there are three types of operators.
* Arithmetic
* Relational
* Logical

Let's take a look at some examples of operators and you'll see that it's an easy concept to learn.

    =
    >
    <
    +
    -
    *
    /
    \
    ()
    % (modulus)
    And
    Or
    Not
    ==

Note:
>In our pseudo code we've been using the equals sign '=' to assign or compare values. Normally you'll see the use of a double equals == to compare values.

There are many many more operators than the ones listed. To see a list of operators by programming langauge take a look at the wiki page: [Operator_(computer_programming)](http://en.wikipedia.org/wiki/Operator_(computer_programming)#Operator_features_in_programming_languages)

##Arithmetic Operators

Arithmetic operators take numerical values as their operands and return a single numerical value. For example, When doing addition, you'll use an operator that looks like this: `+`. See, that's so easy!

Some of the arithmetic operators:

    + | addition
    - | subtraction
    / | real division (keeps remainder)
    \ | integer division (drops remainder)
    % | modulus (just the remainder from using division)
    * | multiplication

Examples

    2 + 2 // 4
    2 - 2 // 0
    2 / 3 // 0.6666666667
    2 \ 3 // 0
    2 % 3 // 2 I know this is confusing, look up [wiki](http://en.wikipedia.org/wiki/Modulo_operation)


Another arithmetic operator that you can use is the double ++ or double --. These can be translated into `value = value + value` or `value = value - value`.

* If used as a postfix (x++), then it returns the value before incrementing.
* If used as a prefix (++x), then it returns the value after incrementing. 


Example

    i = 3
    x = 1
    print ++i
    print x++

Output

    4
    1

    
##Logical

Logical operators normally return a `True` or `False` value.

    And
    Or
    Not
    ==
    >
    <

