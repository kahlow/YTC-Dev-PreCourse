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

Let’s back up a little bit and understand examine that if statement. You can break any if statement down into this formula:

    if (true) then

If the condition after the if is true, then do the thing contained in the if statement. When we were checking if the variable ‘WeShould’ equaled true we were using something called an operator. Here are some examples of operators:

    =
    >
    <
    +
    -
    /
    And
    Or
    Not

Using these operators let’s make a really insane if statement. I’ll break it down and show you what’s really going on later.

    if 1 + 2 = 3 AND 2 + 2 = 4 OR 5 > 2 then
    print “mind blown”

Operators return values or perform actions. For example, the + operator returns the value of the two numbers summed together. 2 + 2 returns the value 4. The = operator used in an if statement returns true or false.  