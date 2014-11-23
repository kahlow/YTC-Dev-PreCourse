#Loops

Loops are a wonderful invention that allow you to perform an action multiple times. 

Let's take a look at why you would want a loop.

###Example:
Let's say you need to display a count down from 10 to 1. You could just do:

    print 10
    print 9
    print 8
    ...
    print 1

That would take forever though wouldn't it? What if you could just print a number and then subtract one. Let's do that here:

    i = 10;
    
    while (i > 0)
      print i
      i = i - 1
    
    
Isn't that so much easier?

There are many variates of loops (explained below) that you can choose from:
 * While
 * Do-While
 * For
 * For-Each


##While

While loops check a condition and then execute the code below.

    while (true)

This look will go on forever because there is nothing to trigger a false condition. You could almost say this is an *infinite-loop*.

Here's another example:

    isNumFive = false
    num = 0

    while (isNumFive)
        num = num + 1

        if (num < 5)
            isNumFive = false

Once `num` = 5, this loop will stop. This is a strangely formatted while loop but it shows you that you can manipulate a value and trigger the while loop to end. 

Ideally you could write it this way:

    num = 0

    while (num < 5)
        num = num + 1

##Do-While

A Do-While loop is different than a While loop because the Do-While loop executes the code at least once. 

Let's look at an example.

    i = 0

    do {
        print i
        i = i + 1
    } while (i < 5)

Output

    0
    1
    2
    3
    4

That's the same as a while loop right? (Check if you don't believe me. I did.)

Let's look at that same loop but change the starting value to 5.

    i = 5

    do {
        print i
        i = i + 1
    } while (i < 5)

Output

    5

The loop executed at least once which returned a value of 5. This can be a handy loop so keep it in your toolbox.

##For

No, this isn't golf. The For loop is a great loop for keeping your code clean.

A For loop is just like a While loop except that it allows you to declare your counter and increment it all in one line! Let's take a look.

    for(int i = 0; i < 5; i++)
        print i
    

Output
    
    0
    1
    2
    3
    4

>Note: Remember i++? It's a really handy piece of code that allows you to write a short-hand version of i = i + 1. You can also do i-- or ++i and --i. The postfix (i++) occurs after the statement is evaluated and the prefix (--i) happens while it's being evaluated. That means if you set `i = 5` and then `print ++i` that would give you `6` while `i++` would give you `5`.

##For-Each

For-Each loops are commonly used with lists or an array of items. Let's say you have 5 numbers in an array and you want to add 10 to each number. You could use a for-each loop to iterate over each number and add 10.

    nums = [1,2,3,4,5]

    foreach(num in nums)
        num = num + 10
