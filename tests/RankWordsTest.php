<?php
/**
 * Created by PhpStorm.
 * User: andela
 * Date: 9/7/15
 * Time: 4:43 PM
 */

namespace Dictionary\Test;


use Dictionary\Dictionary;
use Dictionary\ModifyDictionary;
use Dictionary\RankWords;

class RankWordsTest extends \PHPUnit_Framework_TestCase {


	public function testTrue()
	{
		$dictionary = Dictionary::getDictionary();
		$modifier = new ModifyDictionary();

		$this->assertEquals(0, count($dictionary));
		$array = $modifier->createEntry("tight",
				"When someone shows approval",
				"Andrei: Prosper, have you completed the curriculum.\nProsper: Yes.\nAndrei: Tight, Tight, Tight!!!.");
		$this->assertEquals(2, count($array));
		$this->assertEquals('When someone shows approval', $array['meaning']);

		$ranked = RankWords::rankWords($array['sample-sentence']);
  	$this->assertEquals(2, $ranked['Prosper']);
		$this->assertEquals(2, $ranked['Andrei']);
		$this->assertEquals(3, $ranked['Tight']);
		$this->assertNotEquals(3, $ranked['Prosper']);
	}
}
