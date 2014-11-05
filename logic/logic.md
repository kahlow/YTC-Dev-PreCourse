#Logic

##AND

'And' is used to group two logical expressions. This means that both expressions need to agree for their results to match their values. 

Let's look at this truth table:

    T  T  |   T
    T  F  |   F
    F  T  |   F
    F  F  |   F
    
You can see that T and T is T and F and F is F. When you mix these values, T and F or F and T, you'll get a negative value returned. In the case of a truth table, the negative returned value is always false.

##OR

'Or' is used to pair two logical expressions but returns the positive if one exists.

Let's look at this:

    T  T  |   T
    T  F  |   T
    F  T  |   T
    F  F  |   F

You can see that if any value is true when grouped by an Or the result is always true.

##NOT

'Not' is the opposite of the expression. 

Let's look at this:

    T | F
    F | T
    
This is useful when you're wanting to perform an action when something is not true.
    
    if Not(False) then
        print "This was false!"

Output:

    This was false!

##Conditional Statements
We've seen conditonal statements before (if statements).

Let's look at the following expression and I want you to think about what in the world the answer could be.

    1 + 2 == 3 AND 2 + 2 == 4 OR 5 > (2 + 3)

Think really hard before you glance down at the answer! 

Let's take the above statement and break it into pieces. 

I like to throw in parenthesis to make things clearer. (I hope you know your order of operations! If not, google it!)

    (1 + 2 == 3) AND (2 + 2 == 4) OR (5 > (2 + 3))

Using arithmetic and logical operators this newly grouped statement can become this:

    True AND True OR False
    
And finally this will look like this:

    True OR False
    
Output

    True
