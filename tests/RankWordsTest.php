<?php
/**
 * @author : Verem Dugeri.
 * Date: 9/7/15
 * Time: 4:43 PM
 */

namespace Verem\Dictionary\Test;

use Verem\Dictionary\Dictionary;
use Verem\Dictionary\DictionaryManager;
use Verem\Dictionary\RankWords;

class RankWordsTest extends \PHPUnit_Framework_TestCase
{
    protected $dictionary;
    protected $manager;
    protected $array;

    /**
     * Set up the test data and other dependencies
     */
    protected function setUp()
    {
        $this->dictionary = Dictionary::getDictionary();
        $this->manager = new DictionaryManager();
        $this->array = $this->manager->createEntry("tight",
                "When someone shows approval",
                "Andrei: Prosper, have you completed the curriculum.\nProsper: Yes.\nAndrei: Tight, Tight, Tight!!!.");
    }

    /**
     * Test the ranking of words to see
     * if they appear in descending
     * order of frequency of
     * appearance.
     */
    public function testRankWords()
    {
        $this->assertEquals(20, count($this->dictionary));

        $this->assertEquals(2, count($this->array));
        $this->assertEquals('When someone shows approval', $this->array[1]['meaning']);


        $ranked = RankWords::rankWords($this->array[1]);

        $ranked = RankWords::rankWords($this->array[1]['sample-sentence']);
        $this->assertEquals(2, $ranked['Prosper']);
        $this->assertEquals(2, $ranked['Andrei']);
        $this->assertEquals(3, $ranked['Tight']);
        $this->assertNotEquals(3, $ranked['Prosper']);
    }
}
