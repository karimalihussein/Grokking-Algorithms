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

1 - Correct
2 - Efficient [
   1 - time complexity
   2 - Space Complexity
]
3 - Easy To Implement

Running Time 

The Running time that tells you many opeations an algorithm will execute in proportion
to the size of its input

Big O Notation

Example : suppose you have to draw a grid of 16 boxes

Q1:What's a good algorithm to draw this grid?

- Algorithm 1 :

Draw 16 boxes one at time , Remember Big O Notation 
Counts the number of operations in this example drawing 
one box is one operation you have to draw 16 boxes
it takes 16 steps to draw 16 boxes the running time for this algorithm is O(n)


- Algorithm 2 :
try this algorithm instead foid the paper
in this example foiding the paper once is an operation you just made two boxes with that
operation 

foid the paper again and again and again

After four foids 
it takes 4 steps to draw 16 boxes 
the running time for this algorithm is O(log n)


Worst Case Scenario:
Suppose you're using simple search to look for a person in the phone book you know 
that Simple Search take O(n) time to run which
means in the worst case you'll have to look through every single entry in your phone book


Best-Case Scenario:
if you're looking for adit this guy is the first entry in your phone book so you didn't
have to look at every entry you found it on the first try so it takes O(1).


Some Common Big O run times:
- O(log n) also known as log time example binary search .
- O(n), also known as linear time, exmaple simple search
- O(n * log N ) example: a fast sorting algorithm, like qucksort (coming up in chapter 4)
- O(n2) exmaple : a slow sorting algorithm like selection sort coming  up in chapter 2
- O(n!) Example : a really slow algorithm like the traveling salesperson coming up next


Suppose you're drawing a grid of 16 boxes again 
and you can choose form 5 different algorithms to do so which one will you choose?
what's good algorithm to draw this grid?


The traveling salesperson:
are there a way to run algorithm takes O(n!)?
- there are a problem called travelling sales person

 There are a problem called travelling sales person.
You have a salesperson, salesperson has to go to five
$cities = [
   "BARN"
   "POLAMAY"
   "PALO"
   ALTO
];
wants to hit all five cities while traveling the minimum
distance. Here's one way to do that: look at every
possible order in which he could travel to the cities. And
he has 120 possible way to go through it.
PEACE







In'this chapter :
You learn about arrays and linked lists-two of the most basic data structures. They're used absolutely everywhere. The pros and cons of both so you can decide
which one is right for your algorithm.



Arrays and linked lists:

Sometimes you need to store a list of elements in memory.
Suppose you're writing an app to manage your to-do. You'll
want to store the to-do as a list in memory.


Should you use an array, or a linked list?

Let's store the to-do in an array first, because it's easier to
grasp. Using an array means all your tasks are stored
contiguously (right next to each other) in memory.

Now suppose you want to add a fourth task. But
the next drawer is taken up by someone else's
stuff!

What is the solution?
One easy fix is to "hold seats": even if you have
only 3 items in your task list, you can ask the
computer for 10 slots.

Is this how the problem will be solved?
You may not need the extra slots that you asked for, and
then that memory will be wasted. You aren't using it, but no
one else can use it either.
You may add more than 10 items to your task list and have
to move anyway.


 So it's a good workaround, but it's not a perfect solution.
Linked lists solve this problem of adding items.

  Linked List:
  - With Linked lists your items can be anywhere in memory.
  - Each item stores the address of the next item in the list a bounch of random memory addresses are linked together


   What is the problem with linked List:
   Websites with top-10 lists usea scummy tactic to get more page
   views. Instead of showing you the list on one page, they put one
   item on each page and make you click Next to get to the next
   item in the list. For example, Top 10 Best TV Villains won't show
   you the entire list on one page. Instead, you start at #10
   (Newman), and you have to click Next on each page to reach #1
   (Gustavo Fring). This technique gives the websites 10 whole pages
   on which to show you ads, but it's boring to click Next 9 times to
   get to #1. It would be much better if the whole list was on one
   page and you could click each person's name for more info.


 • Linked lists have a similar problem. Suppose you want to read the
   last item in a linked list. You can't just read it, because you don't
   know what address it's at. Instead, you have to go to item #1 to
   get the address for item#2 Then you have to go to item #2 to get
   the address for item #3. And so on, until you get to the last item.
   Linked lists are great if you're going to read all the items one at a
   time: you can read one item, follow the address to the next item,
   and so on. But if you're going to keepjumping around, linked lists
   are terrible.



 • The position of an element is called its index. So
   instead of saying, "20 is at position 1," the correct
   terminology is, “20 is at index 1.".


Suppose you're building an app to keep track of your finances
1 - Groceries
2 - Movie
3 - SFBC membership

Every Day, you write down everything you spent money on at the and of the month you review your expences
sum up how much you spent so you have review your expenses and sum up  how much 
you spent so you have lots of inserts and a few reads should you use an array or a list.




