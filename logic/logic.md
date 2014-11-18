#Logic

Logic is the heart of programming. Logic is problem solving using variables and concepts to make decisions. When I say "concepts to make decisions", I mean that you have a goal or problem you're trying to solve and you create a set of ideas and instructions to complete that task.

The wikipedia entry on programming logic gives a great definition

>A program written in a logic programming language is a set of sentences in logical form, expressing facts and rules about some problem domain.

There are a few *operators* that are the building blocks of logic.
* AND
* OR
* NOT

These can be clearly defined in truth tables which you will see below.    

##AND

`AND` is used to group two logical expressions. This means that both expressions need to agree for their results to match their values. 

Let's look at this truth table:

    T  T  |   T
    T  F  |   F
    F  T  |   F
    F  F  |   F
    
You can see that T and T is T and F and F is F. When you mix these values, T and F or F and T, you'll get a negative value returned. In the case of a truth table, the negative returned value is always false.

##OR

`OR` is used to pair two logical expressions but returns the positive if one exists.

Let's look at this:

    T  T  |   T
    T  F  |   T
    F  T  |   T
    F  F  |   F

You can see that if any value is true when grouped by an Or the result is always true.

##NOT

`NOT` is the opposite of the expression. 

Let's look at this:

    T | F
    F | T
    
This is useful when you're wanting to perform an action when something is not true.
    
    if Not(False) then
        print "This was false!"

Output:

    This was false!

##Conditional Statements
We've seen conditional statements before (if statements).

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
