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

There are many many more operators than the ones listed. To see a list of operators by programming language take a look at the wiki page: [Operator_(computer_programming)](http://en.wikipedia.org/wiki/Operator_(computer_programming)#Operator_features_in_programming_languages)

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
    2 % 3 // 2 I know this is confusing, look up http://en.wikipedia.org/wiki/Modulo_operation


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

##Relational Operators

Relational operators are used when comparing two values or expressions.

* >  | greater than
* <  | less than
* == | equal to
* >= | greater than or equal to
* <= | less than or equal to

These operators return `TRUE` or `FALSE`

Examples

    3 > 1 \\ true
    3 < 1 \\ false
    3 == 1 \\ false
    3 == 3 \\ true
    3 >= 3 \\ true
    3 >= 4 \\ false
    3 <= 4 \\ true

    
##Logic Operators

* AND
* OR
* NOT

These can be clearly defined in truth tables which you will see below. A truth table is used to express every combination of evaluating a logical expression.  

###AND

`AND` is used to group two logical expressions. This means that both expressions need to agree for their results to match their values. 

Let's look at this truth table:

    T  T  |   T
    T  F  |   F
    F  T  |   F
    F  F  |   F
    
You can see that T and T is T and F and F is F. When you mix these values, T and F or F and T, you'll get a negative value returned. In the case of a truth table, the negative returned value is always false.

###OR

`OR` is used to pair two logical expressions but returns the positive if one exists.

Let's look at this:

    T  T  |   T
    T  F  |   T
    F  T  |   T
    F  F  |   F

You can see that if any value is true when grouped by an Or the result is always true.

###NOT

`NOT` is the opposite of the expression. 

Let's look at this:

    T | F
    F | T
    
This is useful when you're wanting to perform an action when something is not true.
    
    if Not(False) then
        print "This was false!"

Output:

    This was false!