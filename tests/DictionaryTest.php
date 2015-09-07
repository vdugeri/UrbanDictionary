<?php
/**
 * Created by PhpStorm.
 * User: andela
 * Date: 9/7/15
 * Time: 5:18 PM
 */

namespace Dictionary\Test;


use Dictionary\Dictionary;

class DictionaryTest extends \PHPUnit_Framework_TestCase {


	public function testPush()
	{
		$dictionary = Dictionary::getDictionary();
		$this->assertEquals(0, count($dictionary));
		array_push($dictionary, 'foo');
		array_push($dictionary, 'bar');
		$this->assertEquals(2, count($dictionary));
		$this->assertContains('foo', $dictionary);
		$this->assertContains('bar', $dictionary);
	}

	public function testPop()
	{
		$dictionary = Dictionary::getDictionary();
		$this->assertEquals(0, count($dictionary));
		array_push($dictionary, 'foo');
		array_push($dictionary, 'bar');
		$this->assertEquals(2, count($dictionary));
		array_pop($dictionary);
		$this->assertEquals(1, count($dictionary));
		$this->assertNotContains('bar', $dictionary);
	}

}
