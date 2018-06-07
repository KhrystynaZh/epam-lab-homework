## Basic / Control flow
### Main tasks
* Basics\mainTask1  
  * Створити змінні $text1='Hello' и $text2='World'. 
За допомогою цих змінних і операції складання рядків вивести на екран фразу «Hello world».
* Basics\mainTask2  
  * Створити змінну $var і призначити їй значення 'hello'. 
Звертаючись до окремих символів цього рядка – вивести на екран символ 'h', символ 'e', символ 'o'.
* Basics\mainTask3  
  * Якщо змінна $a більша нуля и менша 5-ти, то вивести 'Вірно', інакше вивести 'Невірно'. 
Перевірте роботу скрипта при $a, зі значеннями - 5, 0, -3, 2
* Basics\mainTask4  
  * Змінна $min має число від 0 до 59. Визначити в яку чверть години потрапляє число, 
відповідно вивести на екран одне з значень: «перша», «друга», «третя»б «четверта».
* Basics\mainTask5  
  * В змінній $year збігається рік. Визначте чи є він високосним. 
Рік буде високосним в двох випадках: або він ділиться на 4, але при цьому не ділиться на 100, або ділиться на 400.
* Basics\mainTask6  
  * Є рядок з 6-ти чисел (наприклад: 385934). Перевірте, чи сума перших трьох чисел дорівнює сумі других трьох чисел. 
Якщо це так – виведіть 'так' інакше – 'ні'.
### Bonus tasks
* Basics\bonusTask1  
  * Compare two strings by comparing the sum of their values (ASCII character code). For comparing treat all letters as UpperCase.
Null-Strings should be treated as if they are empty strings. 
If the string contains other characters than letters, treat the whole string as it would be empty.

  * Examples:  
  "AD","BC" -> equal  
  "AD","DD" -> not equal  
  "gf","FG" -> equal  
  "zz1","" -> equal  
  "ZzZz", "ffPFF" -> equal  
  "kl", "lz" -> not equal  
  null, "" -> equal  

  * Your method should return true, if the strings are equal and false if they are not equal.

## Functions / Strings / Regex
### Main tasks
* Strings\mainTask1  
  * Перетворити рядок 'var_test_text' в 'varTestText'.
* Strings\mainTask2  
  * Є рядок наступного вигляду: 4 літери, потім пробіл, потім ще 4 літери. 
Наприклад, такий рядок 'ФЫВА олдж'. Треба перетворити на наступний рядок 'АВЫФ ждло'. !!!! UTF-8
* Strings\mainTask3  
  * Є масив $a = [342, 55, 33, 123, 66, 63, 9]; - потрібно вивести на екран тільки ті числа в яких є '3'
* Strings\mainTask4  
  * Є масив $a = [342, 55, 33, 123, 66, 63, 9]; - треба порахувати – скільки всього трійок зустрічається в масиві
### Bonus tasks
* Strings\bonusTask1  
  * My friend wants a new band name for her band. 
She likes bands that use the formula: 'The' + a noun with first letter capitalized. 
However, when a noun STARTS and ENDS with the same letter, she likes to repeat the noun twice and 
connect them together with the first and last letter, combined into one word like so (WITHOUT a 'The' in front):  
dolphin -> The Dolphin  
alaska -> Alaskalaska  
europe -> Europeurope  
* Strings\bonusTask2  
  * We have chars mapping: A => T, C => G. You need to create a converter for strings with the results:  
"ATTGC" -> returns "TAACG",   
"GTAT" -> returns "CATA"

## Arrays
### Main tasks
* Arrays\mainTask1  
  * Strings\mainTask1Є масив з довільними числами. Зробіть так, щоб елемент повторився в масиві таку кількість разів яка відповідає його числу.   
Приклад: [1, 3, 2, 4] перетворюється в [1, 3, 3, 3, 2, 2, 4, 4, 4, 4].
* Є масив: 
$temperatures = array(33, 15, 17, 20, 23, 23, 28, 40, 21, 19, 31, 18, 30, 31, 28, 23, 19, 28, 27, 30, 39, 17, 17, 20, 
19, 23, 28, 30, 34, 28); 
Знайти три найменших значення, три найбільших і три середніх.
* Arrays\mainTask2  
  * Є масив:  

      $books = [
      
          [   'name' => 'Learning php, mysql & JavaScript',
              'author' => 'Robin Nixon',
              'price' => 30,
              'tags' => ['php', 'javascript', 'mysql']
          ],

          [
              'name' => 'Php for the Web: Visual QuickStart Guide',
              'author' => 'Larry Ullman',
              'price' => 25,
              'tags' => ['php']
          ],

          [
              'name' => 'pHp and MySqL for Dynamic Web Sites',
              'author' => 'Larry Ullman',
              'price' => 14.39,
              'tags' => ['php', 'mysql']
          ],

          [
              'name' => 'Modern PhP: New Features and Good Practices',
              'author' => 'Josh Lockhart',
              'price' => 24,
              'tags' => ['php']
          ],

          [
              'name' => 'JavaScript and JQuery: Interactive Front-End Web Development',
              'author' => 'Jon Duckett',
              'price' => 20,
              'tags' => ['javascript', 'jquery']
          ],

          [
              'name' => 'Miss Peregrine\'s Home for Peculiar Children',
              'author' => 'Ransom Riggs',
              'price' => 8.18
          ]
      ];  
  
  1. Отримати масив відсортований за ціною книжок  
  2. Отиамати відфільтрований массив книжок у яких є тег ‘php’

### Bonus tasks
* Arrays\bonusTask1  
  * You are going to be given an array of integers. 
Your job is to take that array and find an index N where the sum of the integers to the left of N is equal to the sum of the integers to the right of N. If there is no index that would make this happen, return -1.
  
  For example:   
  * Let's say you are given the array [1,2,3,4,3,2,1] - 
Your function will return the index 3, because at the 3rd position of the array, the sum of left side of the index ([1,2,3]) 
and the sum of the right side of the index ([3,2,1]) both equal 6.   
  * [1,100,50,-51,1,1] - 
Your function will return the index 1, because at the 1st position of the array, 
the sum of left side of the index ([1]) and the sum of the right side of the index ([50,-51,1,1]) both equal 1.  
  
  You need to test the solution on the next arrays: [20,10,-80,10,10,15,35] [10,-80,10,10,15,35]

* Arrays\bonusTask2
  * You need to find out a unique value in array, you are given arrays:  
[ 1, 1, 1, 2, 1, 1 ] => 2  
[ 0, 0, 0.55, 0, 0 ] => 0.55  
[3,1,5,3,7,4,1,5,7] => 4

## Objects and Classes

* FlowerStore 
  * Моделюємо роботу магазину квітів і сувенірів.  
* FlowerStoreWithDecoratorAndStrategyPattern 
  * Доповнюємо магазин можливістю вибору форми оплати та доставки (strategy) 
та додатковими сервісами (decorator).
* TaskWithStatePattern  
  * Моделюємо зміну статусу завдання (state).  
  
