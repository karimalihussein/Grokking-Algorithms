- Grokking Algorithms


In that Book you have 11 Chapters, the first three chapters of this book lay the foundations
* Chapter one :
You'll learn your first Practical Algorithm: Binary Search you also learn to analyze the speed of an 
Algorithm useing big o notation, big o Notation is used throghout the book to analyze how slow or fast 
and algorithm is.

* Chapter two :
You'll learn about two fundamental data Structures arrays and linked lists these data structures
are used throughout the book and they're used to make more advanced data structures like hash tables

* Chapter three :
You'll learn about recusion , a handy technique used by many algorithms such as quicksort 
covered in chapter four.

Big O notation and recusion are challenging topic for beginners so we slowed down 
in the explantion in order to understand them well.

- Problem Solving Techniques:
Coverd in Chapters 4,8,9 if you come across a problem and aren't sure how to solve it 
Efficiently try divide and conquer (Chapter four) or dynamic programming (Chapter 9)
or you my realize there's no efficient solution and get and approxtimate answer useing a greedy algorithm instead (Chapter 8)


- Hash Tables 

Covered in chapter 5 a hash table is a very useful data structure, it 
contains sets of key and value pairs like a 
person's name and their email address or a username and the assoclated password
it's hard to overstate hash tables usefulness when i want to solve a problem the two plans of attack i start with are "can i use a hash table" and "can i model this as a graph"


- Graph Algorithms:

Covered in chapters 6 and 7 , Graph are a way to model a network a social network
or a network or roads or neurone or any other set of connections, breadh-first 
search (Shapter 6) and Dijkstra's algorithm (Chapter 7 ) are ways to find the shortest dlstance between two points in a network:you can use this approach to calculate the degrees
of separation btween two people or the shortest route to a destination.

- K-Nearest neighbors (KNN)
Covered in chapter 10 this is a simple machine-learing algorithm you can use KNN to build 
a recommendations system and OCR engine a system to predict stock values anything that
involves predicting a value 
We Think Adit will rate this move 4 stars 
Classifying an object  that letter is a Q

Next steps:

Chapter 11 gose over 10 algorithms that would make good further reading


How to use this book

1 - Read the Chapters in order. they build on each other.
2 - i Strongly Recommend executing the code for examples yourself
3 - a also recommend doing the exerciess in this book

Who Should Read This Book?

THis book is aimed at anyone who knows the basics of coding and wants to understand algorithms

* Hobbyist Coders
* Coding Boot camp students
* Computer Scince grads looking for a Refsher
* Physices/Math/Other grads who are intersted in programming 


1. Introduction to Algorithms #

is this chapter :

1 - You get a foundation for the rest of the book
2 - you write your first search algorithm binary search 
3 - you learn how to talk about running time of and algorithm (big O notation)

What is an algorithm ? An algorithm is a set of instructions for accomplishing a task.

For Example 

makeTea(){
    GetCup();
    GetKattle();
    GetTea();
    GetSugar();
    FillKattleWithWater();
    SwitchKattleOn();
    WaitUntilWaterBoils();
    PutTeaAndSugarInCup();
    PutBoilWaterInCup();
    MixThem();
echo "your tea is ready!";
}
every method inside that function is a instructure

all of them is [set of instructions]


What is Binary Search:

Binary Search is an algorithm it's input is a sorted list of elements if an element you're
Looking for is in that list Binary search returns the position where it's located otherwise
binary search returns null



This is our first algorthm here's how many numbers you can eliminate every time
100 -> 50 -> 25 -> 13 -> 7 -> 4 -> 2 -> 1 = 7 steps
Whatever number you are thining of you can guess in maximum of seven guesses because you eliminate so many numbers with every guess


Suppose you're looking for a word in the dictionary the dictionary has 240,000 words
in the worst case how many steps do you think each search will take?

   - Simple Search:
      Simple Search could take 240,000 steps if the word you're looking for is the very last one in the book
   


   - Binary Search:
     240K -> 120K -> 60K -> 30K -> 15K -> 7.5K -> 3750 -> 1857 -> 938 -> 469 -> 235 -> 118
     -> 59 -> 30 -> 15 -> 8 -> 4 -> 2 -> 1
     18 stpes
     For any list of n binary search will rake (log2 n)
     steps to run in the worst case

     whereas Simple Search will take n steps



Low  = O
High = len(list) -1

Each Time you check the middle elment:
mid = (low + high) / 2
guess = list[mid]

if the guess is to low you update low accrdingly

