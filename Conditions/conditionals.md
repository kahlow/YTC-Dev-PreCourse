#Conditional Statements

Conditional statements are the bread and butter of software development. They’re used everywhere! Conditional statements is a fancy way to say decisions. In logic, it’s very common to represent a decision by saying “If this, then that” That’s exactly how you do it in programming too! Neat!

Let’s take a look using pseudo code:

    a = 3

    if a = 3 then 
        print “The variable ‘a’ equals 3!”

Wasn’t that easy?! That’s a conditional statement. Let’s tie in some of those variable types and we can make a sweet program that makes decisions. Don’t worry, this program won’t create Skynet.

    WeShould = True
    a = 0

    if WeShould = True then
        a = 2

    print a

Output

    2

We used a conditional statement based on the variable ‘WeShould’ to change the value of ‘a.’ Woah. Now we’re cooking!

Let’s complicate conditional statements since you’re so smart. There are negative conditions too. Let’s check that same program out again.

    WeShould = True
    a = 0

    if WeShould = True then
        a = 2
        else
        a = 3

    print a

Output

    2

Because ‘WeShould’ is true, the first condition is 2 and the “else” is never evaluated. Let’s reverse that.

    WeShould = False
    a = 0

    if WeShould = True then
        a = 2
        else
        a = 3

    print a

Output

    3

Because ‘WeShould’ was false, the ‘else’ condition was met and the variable ‘a’ was set to 3. 

##Nesting

You can nest if statements. Isn't that cool?

    if 2 = 2 then
        if 3 = 3 then
            if 4 = 4 then
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


