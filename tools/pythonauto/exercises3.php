<?php

$EXERCISES =
Array(
"hello" => Array (
"qtext" => "Napisz program, który korzysta z funkcji <b>print()</b> by 
wyświetlić 'witaj świecie', tak jak pokazano w sekcji 'Oczekiwany wynik'.",
"desired" => "witaj świecie",
"code" => '# poniższy kod prawie działa
prinq("witaj świecie")',
"checks" => Array(
"print" => "Musisz w swoim kodzie użyć funkcji print()."
)),

"loop" => Array (
"qtext" => "Write a program that uses a <b>for</b> loop and the built-in function
<b>range</b> to write out three numbers as shown in 'Desired Output'.",
"desired" => "0
1
2",
"code" => 'print(range(3))',
"checks" => Array(
"for" => "You must produce the numbers using a for loop.",
"print" => "You must use a print statement within the loop.",
"range" => "You should use the range function to generate the list of numbers on the for statement.",
":" => "Your for statement should end with a colon (:) and the following line should be indented"
)),

"2.2" => Array (
"qtext" => "<b>2.2</b> Write a program that uses <b>input</b>
to prompt a user for their name and then
welcomes them.  Note that <b>input</b> will pop up a dialog box.
Enter <b>Sarah</b> in the pop-up box when you are prompted so your
output will match the desired output.",
"desired" => "Hello Sarah",
"code" => '# The code below almost works

name = input("Enter your name")
print("Howdy")',
"checks" => Array(
"input" => "You must prompt for the user's name using the input() function.",
"!Sarah" => "You must actually prompt for the user's name",
"print" => "You must use the print statement to print the line of output."
)),

"2.3" => Array(
"qtext" => "<b>2.3</b> Napisz program, który będzie prosił użytkownika o podanie
liczby godzin oraz stawkę za godzinę i używając danych wejściowych obliczy 
stosowne wynagrodzenie. Do przetestowania programu wykorzystaj następujące 
wartości: 35 godzin, 2.75 za godzinę (wynagrodzenie powinno wynosić 96.25). 
Powinieneś użyć <b>input()</b> aby odczytać ciąg znaków oraz <b>float()</b> aby
przekonwertować go na liczbę. Nie musisz martwić się o sprawdzanie błędów lub 
niepoprawne dane wprowadzane przez użytkownika.",
"desired" => "Wynagrodzenie: 96.25",
"code" => '# Udostępniliśmy Tobie pierwszą linię kodu

hrs = input("Podaj liczbę godzin: ")',
"checks" => Array(
"input" => "Musisz poprosić o wprowadzenie liczby godzin i stawki godzinowej przy pomocy funkcji input().",
"print" => "Musisz użyć funkcji print() aby wyświetlić wynik.",
"float" => "Powinieneś użyć funkcji wbudowanej float() aby przekonwertować ciąg znaków na liczbę zmiennoprzecinkową.",
"*" => "Aby przemnożyć liczbę godzin przez stawkę godzinową użyj operatora '*'.",
"!35" => "Nie powinieneś umieszczać danych wejściowych w kodzie źródłowym programu. Musisz odczytać wartości liczby godzin i stawi godzinowej za pomocą funkcji input().",
"!2.75" => "Nie powinieneś umieszczać danych wejściowych w kodzie źródłowym programu. Musisz odczytać wartości liczby godzin i stawi godzinowej za pomocą funkcji input().",
"!96.25" => "Musisz obliczyć wynagrodzenie.")),


"3.1" => Array(
"qtext" => "<b>3.1</b> Napisz program, który poprosi użytkownika o podanie liczby godzin oraz stawkę za godzinę pracy, a następnie używając danych wejściowych program obliczy wynagrodzenie. Zapłać normalną stawkę godzinową za maksymalnie 40 godzin i 1,5-krotność stawki godzinowej za wszystkie godziny przepracowane powyżej 40 godzin. Do przetestowania programu wykorzystaj dane wejściowe: 45 godzin, stawka 10,50 za godzinę (wynagrodzenie powinno wynosić 498,75). Powinieneś użyć <b>input()</b> aby odczytać wprowadzane dane oraz <b>float()</b>, aby przekonwertować wprowadzony ciąg znaków na liczbę. Nie przejmuj się sprawdzaniem błędów przy wprowadzaniu danych przez użytkownika - załóż, że użytkownik wpisuje liczby prawidłowo.
",
"desired" => "498.75",
"desired2" => "Wynagrodzenie: 498.75",
"code" => 'hrs = input("Podaj liczbę godzin: ")
h = float(hrs)',
"checks" => Array(
"input" => "Musisz poprosić o wprowadzenie liczby godzin i stawki godzinowej przy pomocy funkcji input().",
"print" => "Musisz użyć funkcji print() aby wyświetlić wynik.",
"if" => "Powinieneś użyć instrukcji if, tak aby zdecydować czy wykonać obliczenia dotyczące godzin nadliczbowych.",
"float" => "Powinieneś użyć funkcji wbudowanej float() aby przekonwertować ciąg znaków na liczbę zmiennoprzecinkową.",
"!45" => "Musisz odczytać dane wejściowe przy pomocy input(), a następnie je przekonwertować. Liczba '45' nie powinna pojawić się w Twoim programie.",
"!10.5" => "Musisz odczytać dane wejściowe przy pomocy input(), a następnie je przekonwertować.",
"!498" => "Musisz obliczyć wynagrodzenie.")),

"3.3" => Array(
"qtext" => "<b>3.3</b> Napisz program, który poprosi użytkownika o wartość pomiędzy 0.0 a 1.0. Jeśli wartość jest poza zakresem, wypisz komunikat o błędzie. Jeśli wartość jest między 0.0 a 1.0, wypisz ocenę, korzystając z poniższej tabeli:<br/>
Wartość   Ocena<br/>
>= 0.9     5,0<br/>
>= 0.8     4,5<br/>
>= 0.7     4,0<br/>
>= 0.6     3,5<br/>
>= 0.5     3,0<br/>
 < 0.5     2,0<br/>
Jeśli użytkownik wprowadzi wartość spoza zakresu, wypisz odpowiedni komunikat o błędzie i zakończ działanie programu.
Do przetestowania działania wprowadź wartość 0.75.
",
"desired" => "4,0",
"code" => 'score = input("Podaj wartość: ")',
"checks" => Array(
"input" => "Musisz poprosić o podanie wartości przy pomocy funkcji input().",
"float" => "Powinieneś użyć funkcji wbudowanej float() aby przekonwertować ciąg znaków na liczbę zmiennoprzecinkową.",
"print" => "Musisz użyć funkcji print() aby wyświetlić wynik.",
"if" => "Powinieneś użyć instrukcji if aby sprawdzić jaka powinna być ocena na podstawie wprowadzonej wartości.",
"elif" => "Jednym z celów tego zadania jest nauczenie użycia instrukcji elif podczas podejmowania decyzji o ocenie na podstawie wprowadzonej wartości.")
),

"4.6" => Array(
"qtext" => "<b>4.6</b> Napisz program, który poprosi użytkownika o podanie liczby godzin oraz stawkę za godzinę pracy, a następnie używając danych wejściowych program obliczy wynagrodzenie. Zapłać normalną stawkę godzinową za maksymalnie 40 godzin i 1,5-krotność stawki godzinowej za wszystkie godziny przepracowane powyżej 40 godzin.
Umieść logikę obliczenia wynagrodzenia w funkcji o nazwie <b>computepay()</b>, a następnie użyj tej funkcji. Funkcja powinna zwrócić wartość.
Do przetestowania programu wykorzystaj dane wejściowe: 45 godzin, stawka 10,50 za godzinę (wynagrodzenie powinno wynosić 498,75). Powinieneś użyć <b>input()</b> aby odczytać wprowadzane dane oraz <b>float()</b>, aby przekonwertować wprowadzony ciąg znaków na liczbę. Nie przejmuj się sprawdzaniem błędów przy wprowadzaniu danych przez użytkownika - załóż, że użytkownik wpisuje liczby prawidłowo.
Nie nazywaj swojej zmiennej sum ani nie używaj funkcji sum().
",
"desired" => "Wynagrodzenie: 498.75",
"code" => 'def computepay(h,r):
    return 42.37

hrs = input("Podaj liczbę godzin: ")
p = computepay(10, 20)
print("Wynagrodzenie:", p)',
"checks" => Array(
"input" => "Musisz poprosić o wprowadzenie liczby godzin i stawki godzinowej przy pomocy funkcji input().",
"print" => "Musisz użyć funkcji print() aby wyświetlić wynik.",
"!45" => "Musisz poprosić użytkownika o wprowadzenie danych.",
"!10.5" => "Musisz poprosić użytkownika o wprowadzenie danych.",
"if" => "Powinieneś użyć instrukcji if, tak aby zdecydować czy wykonać obliczenia dotyczące godzin nadliczbowych.",
"float" => "Powinieneś użyć funkcji wbudowanej float() aby przekonwertować ciąg znaków na liczbę zmiennoprzecinkową.",
"def" => "Musisz użyć funkcji o nazwie computepay do wykonania obliczeń.",
"!sum(" => "Nie nazywaj swojej zmiennej sum ani nie używaj funkcji sum().",
"return" => "Musisz użyć instrukcji return, tak aby przekazać obliczone wynagrodzenie do głównego kodu.",
"computepay" => "Musisz użyć funkcji o nazwie computepay do wykonania obliczeń.",
"!498" => "Musisz obliczyć wynagrodzenie.")
),

"5.2" => Array(
"qtext" => "<b>5.2</b> Napisz program, który odczytuje liczby całkowite tak długo, aż użytkownik wprowadzi \"gotowe\". Po wpisaniu \"gotowe\" wypisz największą i najmniejszą z wprowadzonych liczb. Jeśli użytkownik wprowadzi coś innego niż liczbę, obsłuż to przy pomocy try/catch, wypisz odpowiedni komunikat i zignoruj wprowadzoną wartość. Wprowadź 7, 2, bob, 10 i 4 i dopasuj swój wynik do oczekiwanego wyniku.
",
"desired" => "Nieprawidłowe wejście
Największa: 10
Najmniejsza: 2",
"code" => 'largest = None
smallest = None
while True:
    num = input("Wprowadź liczbę: ")
    if num == "gotowe" : break
    print(num)

print("Największa:", largest)',
"checks" => Array(
"input" => "Musisz poprosić o wprowadzenie liczby przy pomocy funkcji input().",
"print" => "Musisz użyć funkcji print() aby wyświetlić wyniki.",
"while" => "Powinieneś użyć instrukcji while do odczytania liczb.",
"int" => "Powinieneś użyć funkcji int() aby przekonwertować ciąg znaków na liczbę całkowitą.",
"! 2" => "Powinieneś obliczyć największą i najmniejszą liczbę.",
"!=2" => "Powinieneś obliczyć największą i najmniejszą liczbę.",
"! 10" => "Powinieneś obliczyć największą i najmniejszą liczbę.",
"!=10" => "Powinieneś obliczyć największą i najmniejszą liczbę.",
"try" => "Powinieneś obsłużyć przypadek wprowadzenia niepoprawnych liczb przy pomocy try/except.",
"except" => "Powinieneś obsłużyć przypadek wprowadzenia niepoprawnych liczb przy pomocy try/except.")
),

"6.5" => Array(
"qtext" => "<b>6.5</b> Napisz kod wykorzystujący funkcję find() i wycinki ciągów znaków (patrz: sekcja 6.10. w książce), tak aby wyodrębnić liczbę znajdującą się na końcu poniższego wiersza. Przekonwertuj wyodrębnioną wartość na liczbę zmiennoprzecinkową i wypisz ją.",
"desired" => "0.8475",
"code" => 'text = "X-DSPAM-Confidence: 0.8475"',
"checks" => Array(
"find" => "Powinieneś użyć funkcji find() do uzyskania pozycji dwukropka w ciągu znaków.",
":" => "Powinieneś użyć wycinków ciągów znaków [n:m] do wyciągnięcia danych z ciągu znaków.",
"float" => "Powinieneś użyć funkcji float() do konwersji ciągu znaków na liczbę zmiennoprzecinkową.",
'!"0.8475"' =>  "Musisz wyciągnąć dane z ciągu znaków.")
),

"fopen" => Array(
"qtext" => 'This Python program opens the file
"mbox-short.txt" and counts the number of lines in the file.',
"desired" => "1910 Lines",
"code" => 'fh = open("mbox-short.txt", "r")

count = 0
for line in fh:
   count = count + 1

print(count,"Lines")
'
),

"7.1" => Array(
"qtext" => "<b>7.1</b> Write a program that prompts for a file name, then opens that file
and reads through the file, and print the contents of the file in upper case.  Use
the file <b>words.txt</b> to produce the output below.".
'<p>
You can download the sample data at
<a href="http://www.py4e.com/code3/words.txt" target="_blank">
http://www.py4e.com/code3/words.txt</a>',
"desired" => "WRITING PROGRAMS OR PROGRAMMING IS A VERY CREATIVE
AND REWARDING ACTIVITY  YOU CAN WRITE PROGRAMS FOR
MANY REASONS RANGING FROM MAKING YOUR LIVING TO SOLVING
A DIFFICULT DATA ANALYSIS PROBLEM TO HAVING FUN TO HELPING
SOMEONE ELSE SOLVE A PROBLEM  THIS BOOK ASSUMES THAT
{\EM EVERYONE} NEEDS TO KNOW HOW TO PROGRAM AND THAT ONCE
YOU KNOW HOW TO PROGRAM, YOU WILL FIGURE OUT WHAT YOU WANT
TO DO WITH YOUR NEWFOUND SKILLS

WE ARE SURROUNDED IN OUR DAILY LIVES WITH COMPUTERS RANGING
FROM LAPTOPS TO CELL PHONES  WE CAN THINK OF THESE COMPUTERS
AS OUR PERSONAL ASSISTANTS WHO CAN TAKE CARE OF MANY THINGS
ON OUR BEHALF  THE HARDWARE IN OUR CURRENT-DAY COMPUTERS
IS ESSENTIALLY BUILT TO CONTINUOUSLY AS US THE QUESTION
WHAT WOULD YOU LIKE ME TO DO NEXT

OUR COMPUTERS ARE FAST AND HAVE VASTS AMOUNTS OF MEMORY AND
COULD BE VERY HELPFUL TO US IF WE ONLY KNEW THE LANGUAGE TO
SPEAK TO EXPLAIN TO THE COMPUTER WHAT WE WOULD LIKE IT TO
DO NEXT IF WE KNEW THIS LANGUAGE WE COULD TELL THE
COMPUTER TO DO TASKS ON OUR BEHALF THAT WERE REPTITIVE
INTERESTINGLY, THE KINDS OF THINGS COMPUTERS CAN DO BEST
ARE OFTEN THE KINDS OF THINGS THAT WE HUMANS FIND BORING
AND MIND-NUMBING",
"code" => '# Use words.txt as the file name
fname = input("Enter file name: ")
fh = open(fname)
',
"xcode" => '# Use words.txt as the file name
fname = input("Enter file name: ")
fh = open(fname)
text = fh.read().strip()
print(text.upper())
',
"checks" => Array(
"input" => "You must prompt for the file name using the input() function.",
"open" => "You need to use open() to open the file.",
"print" => "You must use the print statement to print the lines.",
"strip" => "You should use strip() or rstrip() to avoid double newlines.  You may need to scroll down to see a mis-match of the output.",
"upper" => "You should use the upper() function to convert the lines to upper case.")
),

"7.2" => Array(
"qtext" => '<b>7.2</b> Write a program that prompts for a file name, then opens that file
and reads through the file, looking for lines of the form:
<pre>
X-DSPAM-Confidence:    0.8475
</pre>
Count these lines and extract the floating point values from each
of the lines and compute the average of those values and produce an output
as shown below.  Do not use the sum() function or a variable named sum in your solution.
<p>
You can download the sample data at
<a href="http://www.py4e.com/code3/mbox-short.txt" target="_blank">
http://www.py4e.com/code3/mbox-short.txt</a> when you are testing
below enter <b>mbox-short.txt</b> as the file name.',
"desired" => "Average spam confidence: 0.750718518519",
"code" => '# Use the file name mbox-short.txt as the file name
fname = input("Enter file name: ")
fh = open(fname)
for line in fh:
    if not line.startswith("X-DSPAM-Confidence:") : continue
    print(line)
print("Done")
',
"xcode" => '# Use the file name mbox-short.txt as the file name
fname = input("Enter file name: ")
fh = open(fname)
tot = 0.0
count = 0
for line in fh:
    if not line.startswith("X-DSPAM-Confidence:") : continue
    words = line.split()
    tot = tot + float(words[1])
    count = count + 1
print("Average spam confidence:", tot/count)
',
"checks" => Array(
"input" => "You must prompt for the file name using the input() function.",
"open" => "You need to use open() to open the file.",
"!sum" => "You should not use the sum() function and avoid using sum as a variable.",
"float" => "You should use the float() function to convert from a string to an integer.",
'!18518' =>  "You must actually pull the data from the strings and convert it.",
"/" => "Average is usually a total / count.")
),

"8.4" => Array(
"qtext" => '<b>8.4</b> Open the file <b>romeo.txt</b> and read it line by
line.  For each line, split the line into a list of words using the <b>split()</b>
method.   The program should build a list of words.  For each word on each line
check to see if the word is already in the list and if not append it to the list.
When the program completes, sort and print the resulting words in alphabetical order.
<p>
You can download the sample data at
<a href="http://www.py4e.com/code3/romeo.txt" target="_blank">
http://www.py4e.com/code3/romeo.txt</a>',
"desired" => "['Arise', 'But', 'It', 'Juliet', 'Who', 'already', 'and', 'breaks', 'east', 'envious', 'fair', 'grief', 'is', 'kill', 'light', 'moon', 'pale', 'sick', 'soft', 'sun', 'the', 'through', 'what', 'window', 'with', 'yonder']",
"code" => 'fname = input("Enter file name: ")
fh = open(fname)
lst = list()
for line in fh:
print(line.rstrip())
',
"xcode" => 'fname = input("Enter file name: ")
fh = open(fname)
lst = list()
for line in fh:
    words = line.split()
    for word in words:
        if word in lst: continue
        lst.append(word)
lst.sort()
print(lst)
',
"checks" => Array(
"split" => "You should use split() to break each line into words.",
"append" => "You should use append() to add the word to the list if it is not there.",
"!extend" => "You should not use extend() in this assignment.",
"open" => "You need to use open() to open the file.",
"sort" => "You need to use sort() to sort the list before you print it out.",
"!'yonder'" => "You should not put the output data in strings",
"!.remove(" => "You should not need to use the remove() method",
"!.set(" => "You should not need to use the set() method",
"for" => "You need two for loops. One for the lines and one for the words on each line.")
),

"8.5" => Array(
"qtext" => "<b>8.5</b> Open the file <b>mbox-short.txt</b> and read it line by
line.  When you find a line that starts with 'From ' like the following line:
<pre>
From stephen.marquard@uct.ac.za Sat Jan  5 09:14:16 2008
</pre>
You will parse the From line using split() and print out the second word in the line
(i.e. the entire address of the person who sent the message).  Then print out
a count at the end.
<p>
<b>Hint:</b> make sure not to include the lines that start with 'From:'.".
'<p>
You can download the sample data at
<a href="http://www.py4e.com/code3/mbox-short.txt" target="_blank">
http://www.py4e.com/code3/mbox-short.txt</a>',
"desired" => "stephen.marquard@uct.ac.za
louis@media.berkeley.edu
zqian@umich.edu
rjlowe@iupui.edu
zqian@umich.edu
rjlowe@iupui.edu
cwen@iupui.edu
cwen@iupui.edu
gsilver@umich.edu
gsilver@umich.edu
zqian@umich.edu
gsilver@umich.edu
wagnermr@iupui.edu
zqian@umich.edu
antranig@caret.cam.ac.uk
gopal.ramasammycook@gmail.com
david.horwitz@uct.ac.za
david.horwitz@uct.ac.za
david.horwitz@uct.ac.za
david.horwitz@uct.ac.za
stephen.marquard@uct.ac.za
louis@media.berkeley.edu
louis@media.berkeley.edu
ray@media.berkeley.edu
cwen@iupui.edu
cwen@iupui.edu
cwen@iupui.edu
There were 27 lines in the file with From as the first word",
"code" => 'fname = input("Enter file name: ")
if len(fname) < 1 : fname = "mbox-short.txt"

fh = open(fname)
count = 0

print("There were", count, "lines in the file with From as the first word")
',
"xcode" => 'fname = input("Enter file name: ")
if len(fname) < 1 : fname = "mbox-short.txt"

fh = open(fname)
count = 0
for line in fh:
    wds = line.split()
    if len(wds) < 2 : continue
    if wds[0] != "From" : continue
    print(wds[1])
    count = count + 1
print("There were", count, "lines in the file with From as the first word")
',
"checks" => Array(
"for" => "You need a for loop to read the lines in the file.",
"split" => "You should use split() to break each line into words.",
"if" => "You need to use one or more if statements to skip the lines that do not start with 'From '.",
"open" => "You need to use open() to open the file.")
),

"9.4" => Array(
"qtext" => "<b>9.4</b> Write a program to read through the <b>mbox-short.txt</b> and figure
out who has sent the greatest number of mail messages.  The program looks
for 'From ' lines and takes the second
word of those lines as the person who sent the mail.  The program creates a Python
dictionary that maps the sender's mail address to a count of the number of times
they appear in the file.  After the dictionary is produced, the program reads through
the dictionary using a maximum loop to find the most prolific committer.",
"desired" => "cwen@iupui.edu 5",
"code" => 'name = input("Enter file:")
if len(name) < 1 : name = "mbox-short.txt"
handle = open(name)
',
"xcode" => 'name = input("Enter file:")
if len(name) < 1 : name = "mbox-short.txt"
handle = open(name)
counts = dict()
for line in handle:
    wds = line.split()
    if len(wds) < 2 : continue
    if wds[0] != "From" : continue
    email = wds[1]
    counts[email] = counts.get(email,0) + 1

bigcount = None
bigname = None
for name,count in counts.items():
    if bigname is None or count > bigcount:
        bigname = name
        bigcount = count

print(bigname, bigcount)
',
"checks" => Array(
"for" => "You need a for loop to read the lines in the file.",
"split" => "You should use split() to break each line into words.",
"!cwen@iupui.edu" => "You need a for loop to read the data in the file.",
"if" => "You need to use one or more if statements to skip the lines that do not start with 'From '.",
"open" => "You need to use open() to open the file.")
),

"10.2" => Array(
"qtext" => "<b>10.2</b> Write a program to read through the <b>mbox-short.txt</b> and figure
out the distribution by hour of the day for each of the messages.  You can pull the hour
out from the 'From ' line by finding the time and then splitting the string a second time
using a colon.
<pre>
From stephen.marquard@uct.ac.za Sat Jan  5 <b>09</b>:14:16 2008
</pre>
Once you have accumulated the counts for each hour, print out the counts, sorted by hour
as shown below.",
"desired" => "04 3
06 1
07 1
09 2
10 3
11 6
14 1
15 2
16 4
17 2
18 1
19 1",
"code" => 'name = input("Enter file:")
if len(name) < 1 : name = "mbox-short.txt"
handle = open(name)
',
"xcode" => 'name = input("Enter file:")
if len(name) < 1 : name = "mbox-short.txt"
handle = open(name)
counts = dict()
for line in handle:
    wds = line.split()
    if len(wds) < 5 : continue
    if wds[0] != "From" : continue
    when = wds[5]
    tics = when.split(":")
    if len(tics) != 3 : continue
    hour = tics[0]
    counts[hour] = counts.get(hour,0) + 1

lst = counts.items()
lst.sort()

for key, val in lst :
    print(key, val)
',
"checks" => Array(
"for" => "You need a for loop to read the lines in the file.",
"sort" => "You need to use list sort() method to sort the list of times.")
),

"11.1" => Array (
"qtext" => '<b>11.1</b> Sadly, the autograder does not support the regular expression library.
So please write a program that computes the
<b>Answer to the Ultimate Question of Life, the Universe, and Everything</b>
[<a href="http://www.youtube.com/watch?v=aboZctrHfK8" target="_blank">more detail</a>].
Sample output is below.',
"desired" => "42",
"code" => '',
"checks" => Array(
"print" => "By now you should know that a print statement would be helpful here.",
"*" => "I think that multiplication is involved..."
)),

"11.9" => Array(
"qtext" => "<b>11.9</b> Write a program to prompt the user for a regular expression
and read through the <b>mbox-short.txt</b> and count the number of lines that match
the regular expression using re.search().",
"desired" => "04 3
19 1",
"code" => 'import re

string = input("Enter a regular expression:")
if len(name) < 1 : name = "mbox-short.txt"
handle = open("mbox-short.txt")
count = 0
for line in handle:
    if re.search(string) : count = count + 1
print("mbox-short.txt had ", count, "lines that matched", string)

',
"xcode" => 'name = input("Enter file:")
if len(name) < 1 : name = "mbox-short.txt"
handle = open(name)
counts = dict()
for line in handle:
    wds = line.split()
    if len(wds) < 5 : continue
    if wds[0] != "From" : continue
    when = wds[5]
    tics = when.split(":")
    if len(tics) != 3 : continue
    hour = tics[0]
    counts[hour] = counts.get(hour,0) + 1

lst = counts.items()
lst.sort()

for key, val in lst :
    print(key, val)
',
"checks" => Array(
"for" => "You need a for loop to read the lines in the file.",
"sort" => "You need to use list sort() method to sort the list of times.")
)


);
