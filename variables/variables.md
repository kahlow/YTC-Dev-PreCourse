#Variables

 
The current (10/16/2014) wikipedia definition of a variable is this:

>In computer programming, a variable or scalar is a storage location paired with an associated symbolic name (an identifier), which contains some known or unknown quantity or information referred to as a value. The variable name is the usual way to reference the stored value; this separation of name and content allows the name to be used independently of the exact information it represents. The identifier in computer source code can be bound to a value during run time, and the value of the variable may thus change during the course of program execution.


This is a great definition and contains the basic concepts of what a variable is but this can be a little overwhelming so let’s break down what this text says.

"a variable or scalar is a storage location" - Variables are a way for a programmer to store data in the computer’s memory to be used throughout the program. For example, if you as a developer are making a very simple calculator program that adds two numbers together, you’ll want to be able to store the two numbers from your users and add them together. This follows the basic concepts in algebra. Let’s take a look at how you would create a function in algebra that adds two unknown numbers together and then we can use an example using PHP! Woohoo!

Algebra:

    Function: a + b = c
     Given a = 2 and b = 1, find the value of c. We can easily solve this and find that c equals a billion…. I mean 3. The values     ‘a’, ‘b’, and ‘c’ are your variables. Is this starting to make sense? I hope so. Let’s translate this into a program and         you’ll be able to see this in action. You might be surprised how similar this is in code.

Code:

(I’m using something called pseudo code. What that means is I’m using plain text to write down general concepts so that I can extract you, dear student, from having to deal with language syntax. That comes later.)

Simple calculator program:

    a = 2
    b = 1
    c = a + b
    print c

This program prints out the value of ‘c’. Just like in Algebra, ‘a’, ‘b’ and ‘c’ are your variables. 

Wasn’t that easy? Let’s mix it up a bit. I’m going to you show you that same program but make it a little longer and more complicated. Don’t worry, you’ll be able to figure it out.

Let’s start with the original program and then kick it up a notch. 

    a = 2
    b = 1
    c = a + b
    print c
    a = 4
    c = a + b
    print c

Can you guess what the computer would print to the screen after running this program? You would get something like this: 

    3
    5

Wha’ happened? I’ll tell you wha’ happened: we’ve been working with the second part of that first wikipedia sentence and the last part of the same block of wikipedia knowledge. “paired with an associated symbolic name (an identifier),” and “and the value of the variable may thus change during the course of program execution.”  ‘a’ is a symbol or name for your variable. You’ve been doing this without even thinking about it. You can assign any value to ‘a’, ‘b’ and ‘c’ at any time during your program. The characters you’re using to represent the numbers are called identifiers. Let’s take a look at that again:

    a = 2

‘a’ is your variable name and 2 is the value you’re assigning to your variable. You could name it anything you want. Here’s the calculator program with some pizzaz:

    a = 2

‘a’ is your variable name and 2 is the value you’re assigning to your variable. You could name it anything you want. Here’s the calculator program with some pizzaz:

    Mr = 2
    Bojangles = 1
    MyCat = Mr + Bojangles
    print MyCat
    Mr = 4
    MyCat = Mr + Bojangles

Output
    
    3
    5


Variables are just containers for your data. You can change their contents whenever you want. This is a very valuable function of programming. You’ll use it in every program.

Now that we have a general understanding of what a variable is and how it is used, let’s make it more complicated. Bring it, right?! You can handle it.

Let’s look at that calculator program again:

    num1 = 2
    num2 = “Frosted Flakes”
    sum = num1 + num2
    print sum

Output:

    <EXPLOSIONS>

Wait a minute, you can’t add 2 + frosted flakes! That doesn’t make sense! 
It’s easy to see that you can’t add text to a number but what you don’t realize is that we’re already beginning to understand the concept of Types.! In a lot of programming languages variables have types. Types restrict what type of content you can put into your variables. For a calculator that adds numbers, you’ll only want numbers in your variables. Let’s look at some different Types.

Most languages contains these types:

* Integer - Whole numbers (no decimal)
* Real Number - all numbers (with decimals and negatives)
* String - Text
* Boolean - True/False
* Objects - We’ll deal with this much much later

There are more types out there but they mostly all boil down to those 4 above. We’ll see examples of these Types in your exercises after this section. Trust me, it’ll be fun.

Quick note:

>Let’s talk about storage. Variables are actually stored in your computer’s RAM. Your computer is smart enough to create storage spaces in your RAM to keep these variables. If you create a million variables you could possibly fill up your RAM and slow your computer down. Be mindful of how you work with variables locally so you don’t impact performance of your application. This isn’t something you’ll need to worry about now, but it’s something you should store in the back of your mind.