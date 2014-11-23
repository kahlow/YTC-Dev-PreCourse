#Functions

What is a function? A function is a named set of instructions that may or may not take parameters. You can define a function in your program and use built in functions included with your language of choice.

    function addTwoNumbers(int num1, int num2)
        return num1 + num2

Functions usually have the following things:
* Name (Not always, anonymous functions are used in many languages. This is an advanced topic not covered here.)
* Parameters
* Return type

###Function Names
A function name is some descriptive word or words to describe what your function will do. A function that returns the phrase "Hello World" could be named HelloWord.

###Parameters

Parameters are passed into functions to be used by said function. Parameters are specified when you declare a function. Not all functions require parameters. For example, if you're using a function to hide some functionality that always returns a value, you can conceivably not use parameters.

###Return Types
A return type can be many things. You can return nothing, normally called void, or you can return a variable like a number or string. Let's say you have a math variable that adds two numbers. You'll want to return the sum of those numbers so your return type would be a number.

##User created functions

Functions are a great way to keep your code clean and organized. 

Let's look at some examples of why you would want to create a function.

If you're writing a calculator program that adds two numbers together, you could write a function that takes two numbers and returns their sum.

    function doSomeMath(int num1, int num2)
        return num1 + num2

    print "This is my calculator"
    print doSomeMath(2,2)
    print doSomeMath(4,4)

You might be thinking, why can't I just print 2 + 2 and 4 + 4. Well, you can but what happens when your crazy professor says that the program is now supposed to subtract two numbers. You would have to search for all of your 2 + 2s and 4 + 4s and replace the + sign. What if you wrote 1000 lines of code? That could lead to a lot of mistakes. Instead, you could alter your function and make the change everywhere.


##Built in functions

Built in functions are included in something called a Library. Most programming languages have libraries that contain many useful functions.

For example, math functions are very common.

    print sqrt(4)

sqrt takes a number and returns the square root of that value.