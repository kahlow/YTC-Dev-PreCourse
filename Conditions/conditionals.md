#Conditional Statements

Conditional statements are the bread and butter of software development. They’re used everywhere! The phrase *conditional statements* is a fancy way to say decisions. In logic, it’s very common to represent a decision by saying “If this, then that” That is exactly how you do it in programming too! Neat!

Let’s take a look using pseudo code:

    a = 3

    if a == 3 then 
        print “The variable ‘a’ equals 3!”

Wasn’t that easy?! That is a conditional statement. 


##If Statements

An *if statement* is a way to express a conditional statement. 

The structure of an if statement normally looks like this:

    if <condition> then
        <code executed if condition is true>


###Else

*If statements have a negative condition too. This is expressed as an *Else*


    if <condition> then
        <code executed if condition is true>
    else
        <code executed if condition is false>

###Else-if

There is another scenario in conditional statements that allows the developer to make a new decision if the condition evaluated is false by using *else-if*.


    if <condition> then
        <code executed if condition is true>
    else if <new condition>
        <code executed if new condition is true>


###All together now

Let's put all of that together with a real world example. This program checks the variables to see if they are equal or if `a` is greater than `b`. If none of those things are true it prints a default message.

    a = 3
    b = 4

    if a == b then
        print "a equals b"
    else if a > b then
        print "a is greater than b"
    else
        print "these values are weird"

####Note
> You'll notice that I used == to represent "equals." This is a convention used in most programming languages. Double equals (==) is used to compare two values or expressions. We covered this in the operators section but I just want you to be aware of it. Like my momma always said: "If you want to teach someone about the double equals operator, don't worry about repeating yourself."

##Nesting

You can nest if statements. Isn't that cool?

    if 2 == 2 then
        if 3 == 3 then
            if 4 == 4 then
                ......

Let's get crazy with it and see if you can figure out what's going on.

    if true then
        if true then
            if true then
                if false then
                    print 'HERE?....Nope'
                else
                    print 'This is it!'
    else
        if true then
            print 'HERE?....Nope'


##Conditional Logic Examples

Let’s tie in some of those variable types and we can make a sweet program that makes decisions. Don’t worry, this program won’t create Skynet.

    weShould = True
    a = 0

    if weShould == True then
        a = 2

    print a

Output

    2

We used a conditional statement based on the variable ‘weShould’ to change the value of `a`. Whoa. Now we’re cooking!

Let’s complicate conditional statements since you’re so smart. There are negative conditions too. Let’s check that same program out again.

    weShould = True
    a = 0

    if weShould == True then
        a = 2
    else
        a = 3

    print a

Output

    2

Because `weShould` is true, the first condition is 2 and the 'else' is never evaluated. Let’s reverse that.

    weShould = False
    a = 0

    if weShould == True then
        a = 2
    else
        a = 3

    print a

Output

    3

Because `WeShould` was false, the `else` condition was met and the variable `a` was set to 3. 

##Kicking it up a notch

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

## Switch

There is another conditional statement format that we can use. It's called a switch statement. Let's look at an example.

    i = 2
    
    switch (i)
    case 0:
        print "i equals 0"
        break
    case 1:
        print "i equals 1"
        break
    case 2:
        print "i equals 2"
        break
    default:
        print "i doesn't equal none of those things"
        break

You'll notice a few things. One being that there is the word "break" at the end of each case. That's a feature of switch statements. If you don't include the break, the next line will execute as well. I'll show you an example.

    i = 2

    switch(i)
    case 2:
        print "i equals 2"
    case 3:
        print "i equals 3"
        break
    case 4: 
        print "i equals 4"
        break

Output
    
    i equals 2
    i equals 3


You'll also notice the default case. That's is automatically used if none of your cases are triggered.

    i = 2

    switch(i)
    case 3:
        print "i equals 3"
        break
    default:
        print "i doesn't equals any of these things"
        break