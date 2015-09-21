#Urban Dictionary
The urban dictionary is a compilation of city
slangs. It is a simple project that demonstrates
the use of simple and basic programming concepts.

#Design

Classes
 - Dictionary: The main dictionary
 - DictionaryManager: The data access layer, responsible for
   performing CRUD operations on the dictionary.
 - RankWords: Returns a word count in descending order of
   words used in sample sentences in the dictionary


#Testing
 The phpunit framework for testing is used to perform
 unit test on the classes. The TDD principle has been
 employed to make the application robust
 
 Run this on bash to execute the tests
 ```````bash
 /vendor/bin/phpunit
`````````

#Install

- To install this package, PHP 5.5+ and Composer are required

````bash
composer require Verem/UrbanDictionary
``````

#usage

- Populating the dictionary with sample words

````````
Dictionary::populateDictionary();
`````````
- Create a manager instance

``````
$manager = new DictionaryManager();
``````
- Create an entry - Returns mixed

``````
$array =  $manager->createEntry($word, $meaning, $sampleSentence);
``````
- Edit an entry - Returns mixed

````````
$array = $manager->editEntry($word);
````````

- DeleteEntry - Returns an array

```````
$dictionary = $manager->deleteEntry($word)
``````

- Find an entry - Returns mixed

``````
$word = findEntry($word);
``````

- Get the dictionary

``````
$dictionary = Dictionary::getDictionary();
```````



