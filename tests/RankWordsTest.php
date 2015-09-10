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

class RankWordsTest extends \PHPUnit_Framework_TestCase {


	protected $dictionary;
	protected $modifier;
	protected $array;
	
	protected  function setUp()
	{
		$this->dictionary = Dictionary::getDictionary();
		$this->modifier = new ModifyDictionary();
		$this->array = $this->modifier->createEntry("tight",
				"When someone shows approval",
				"Andrei: Prosper, have you completed the curriculum.\nProsper: Yes.\nAndrei: Tight, Tight, Tight!!!.");
	}
	public function testRankWords()
	{
		$this->assertEquals(0, count($this->dictionary));

		$this->assertEquals(2, count($this->array));
		$this->assertEquals('When someone shows approval', $this->array['meaning']);

		$ranked = RankWords::rankWords($this->array['sample-sentence']);
  	$this->assertEquals(2, $ranked['Prosper']);
		$this->assertEquals(2, $ranked['Andrei']);
		$this->assertEquals(3, $ranked['Tight']);
		$this->assertNotEquals(3, $ranked['Prosper']);
	}
}
