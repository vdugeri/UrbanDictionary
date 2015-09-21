<?php
/**
 * Class ModifyDictionary: The data access object.
 * This class performs the basic CRUD operations
 * on the dictionary object returned by
 * a static call to the getDictionary
 * method.
 *
 * @property $dictionary array;
 *
 * @author : Verem Dugeri
 * Date: 9/7/15
 * Time: 2:46 PM
 */

namespace Verem\Dictionary;

class DictionaryManager
{
    /**
     * @var array
     */
    private $dictionary;


    public function __construct()
    {
        $this->dictionary = Dictionary::getDictionary();
    }


	/**
	 *  @method createEntry
	 *
	 * This method takes three parameters, creates
	 * an associative array and inserts the same
	 * into the dictionary
	 *
	 * @param $word
	 * @return array
	 * @throws IndexNotFoundException
	 */

    public function deleteEntry($word)
    {

        if ($this->findEntry($word)) {
            unset($this->dictionary[$word]);
			return $this->dictionary;
        } else {
            throw new IndexNotFoundException('element {$word} not found');
        }
    }


    /**
     * @method findEntry
     *
     * This method accepts a string parameter as key
     * and searches the dictionary for the presence
     * or otherwise of the key.
     *
     * @param $word
     * @return mixed
     * @throws IndexNotFoundException
     */
    public function findEntry($word)
    {
        $found = $this->dictionary[$word];
        if ($found) {
            return $found;
        } else {
            throw new IndexNotFoundException('The word {$word} does not exist in the dictionary');
        }
    }

    /**
     *  @method deleteEntry
     *
     * This method accepts a string as parameter
     * and searches the array for the presence
     * of the key. If the key is found, it
     * is deleted from the dictionary.
     * An error message is thrown if
     * the key is not found.
     *
     * @param $word
     * @param $newMeaning
     * @param $newSentence
     * @return mixed
     * @throws IndexNotFoundException
     */
    public function editEntry($word, $newMeaning, $newSentence)
    {
        if ($this->findEntry($word)) {
            $array = ['meaning' => $newMeaning, 'sample-sentence' => $newSentence];
            $this->dictionary[$word] = $array;
        } else {
            $this->createEntry($word, $newMeaning, $newSentence);
        }

        return ($this->dictionary[$word]) ?
          [true, $this->dictionary[$word]] :[false,'The word can not be created or edited. An error occurred during the process. Please try again'];
    }


    /**
     * @method createEntry
     * Creates an entry in the dictionary array
     * Each entry consists of a word, its meaning
     * and the sample sentence containing the usage
     * example of the word.
     *
     * @param $word
     * @param $meaning
     * @param $sampleSentence
     * @return mixed
     */
    public function createEntry($word, $meaning, $sampleSentence)
    {
        $this->dictionary[$word] = [
                'meaning' => $meaning,
                'sample-sentence' => $sampleSentence];

        return ($this->dictionary[$word])?
          [true, $this->dictionary[$word]] : [false, 'The word can not be created. An error occurred during the process. Please try again'];
    }
}
