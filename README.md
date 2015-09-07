#Urban Dictionary
The urban dictionary is a compilation of city
slangs. It is a simple project that demonstrates
the use of simple and basic programming concepts.

#Design
*classes
 - Dictionary: The main dictionary
 -ModifyDictionary: The data access layer, responsible for
  performin CRUD operations on the dictionary.
 -RankWords: Returns a word count in descending order of
   words used in sample sentences in the dictionary

 *UML
 -----------------------
|  Dictionary          |
 -----------------------
| dictionary: array    |
------------------------
| getDictionary():array|
------------------------


-------------------------------------------------
|    ModifyDictionary                           |
-------------------------------------------------
| dictionary: array                             |
-------------------------------------------------
| __construct()                                 |
| createEntry(word, meaning, sentence):array    |
| deleteEntry(word):string                      |
| editEntry(word, newMeaning, newSentence):array|
| findEntry($word):array                        |
-------------------------------------------------


 --------------------
 |   RankWords      |
 --------------------
 |                  |
 --------------------
 |                  |
 --------------------


 #Testning
 The phpunit framework for testing is used to perform
 unit test on the classes. The TDD principle has been
 employed to make the application robust



