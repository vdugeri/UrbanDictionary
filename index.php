<?php
/**
 * Created by PhpStorm.
 * User: andela
 * Date: 9/17/15
 * Time: 11:03 AM
 */


include("src/Dictionary.php");
include("src/DictionaryManager.php");
include("src/RankWords.php");
include("src/IndexNotFoundException.php");


use Verem\Dictionary\DictionaryManager;
use Verem\Dictionary\RankWords;
use Verem\Dictionary\Dictionary;

class TestDictionary
{

	private $dictionaryManager;
	private $rank;

	public function __construct(DictionaryManager $manager, RankWords $rank)
	{
		$this->dictionaryManager = $manager;
		$this->rank = $rank;
	}

	public function run()
	{

		//populate dictionary
		Dictionary::populateDictionary();
		//get the populated dictionary
		print "Populating the dictionary <br/>";
		$dictionary = Dictionary::getDictionary();
		var_export($dictionary);
		print "<br/>";
		//create a word
		print "Creating a word<br/>";
		$word = $this->dictionaryManager->createEntry('Excitement', 'A state of agitation or happiness', 'He was very excited at the thought of dinner with the Whites this night.');
		var_export($word);
		print "<br/>";

		//find a word
		print "Finding a word<br/>";
		$foundWord = $this->dictionaryManager->findEntry('Excitement');
		var_export($foundWord);
		print "<br/>";

		//edit a word
		print "Editing a word<br/>";
		$edited = $this->dictionaryManager->editEntry("Excitement", "Extreme happiness","He wasn't very excited this morning. this.");
		var_export($edited);
		print "<br/>";

		//rank word
		print "Ranking words<br/>";
		try{
			$ranked = $this->rank->rankWords($this->dictionaryManager->findEntry('Excitement'));
			var_export($ranked);
			print "<br/>";
		} catch (InvalidArgumentException $e){
			echo $e->getMessage() ."<br/>";
		}


		//delete a word
		print "Deleting a word<br/>";
		$dictionary = $this->dictionaryManager->deleteEntry('Excitement');
		var_export($dictionary);

	}

}

$test = new TestDictionary(new DictionaryManager(), new RankWords());
$test->run();