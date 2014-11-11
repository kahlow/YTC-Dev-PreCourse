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
