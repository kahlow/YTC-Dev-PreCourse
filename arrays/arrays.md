#Array

##Definition

An array is a collection of items, typically of the same Type, in order. In computer science this is called a data structure.

Items in an array are accessed using an index. An index is a zero-based integer.

Syntax example

	int array = [1, 1, 2, 3, 5, 8]

Let's say I want the 3rd item said array. I can do this using an index!

	array[2]

Output

	2

Wait a minute! I wanted the 3rd item in the array, not the 2nd! I would say to you, dear reader, good eye!

Arrays are *zero-based* indexing. This means the first element of the array is indexed at 0.

Let's print that original array out using each of its indices (plural of index in a mathematical context, but you knew that).

	print array[0]
	print array[1]
	...
	print array[5]

Output

	1
	1
	2
	3
	5
	8

Isn't that cool?

##Loops

What if you wanted an easier way to access items in an array. You could use loops! 

	int array = [1, 1, 2, 3, 5, 8]

	// 5 being the array length
	for(int i = 0; i <= 5; i++)
		print array[i]

This is all starting to come together isn't it? 

##Multidimensional arrays

You can have an array of arrays. Did I just blow your mind?

Example

	int array = [[1,1,2,3], [1,1,2,3], [1,1,2,3]]

How would you get to all of those values? Nested loops!

	for(int i = 0; i <= 2; i++)
		for(int j = 0; j <= 3; i++)
			print array[i][j]

###Clean code tip

You can get crazy with your dimensions but just remember, a clean code advocate will always reduce complexity.

##Example program

	string names = ["Danny Tanner", "Joey Gladstone", "Jesse Katsopolis"]

	int arrayLength = 2 // 0,1,2
	int index = 0

	while(index <= arrayLength)
		switch (names[i])
		case "Danny Tanner":
			print "Dad!"
			break
		case "Joey Gladstone":
			print "Uncle Joey!"
			break
		case "Jesse Katsopolis":
			print "Uncle Jesse!"
			break
		default
			print "How rude!"
