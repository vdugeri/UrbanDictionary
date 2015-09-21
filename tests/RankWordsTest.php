<?php
/**
 * @author : Verem Dugeri.
 * Date: 9/7/15
 * Time: 4:43 PM
 */

namespace Dictionary\Test;

use Dictionary\Dictionary;
use Dictionary\ModifyDictionary;
use Dictionary\RankWords;

class RankWordsTest extends \PHPUnit_Framework_TestCase
{
    protected $dictionary;
    protected $modifier;
    protected $array;

    /**
     * Set up the test data and other dependencies
     */
    protected function setUp()
    {
        $this->dictionary = Dictionary::getDictionary();
        $this->modifier = new ModifyDictionary();
        $this->array = $this->modifier->createEntry("tight",
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
        $this->assertEquals(0, count($this->dictionary));

        $this->assertEquals(2, count($this->array));
        $this->assertEquals('When someone shows approval', $this->array['meaning']);

<<<<<<< master
        $ranked = RankWords::rankWords($this->array['sample-sentence']);
=======
        $ranked = RankWords::rankWords($this->array[1]);
>>>>>>> local

        $this->assertEquals(2, $ranked['Prosper']);
        $this->assertEquals(2, $ranked['Andrei']);
        $this->assertEquals(3, $ranked['Tight']);
        $this->assertNotEquals(3, $ranked['Prosper']);
    }
}
