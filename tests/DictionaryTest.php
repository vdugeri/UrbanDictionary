<?php
/**
 * @author: verem Dugeri.
 * Date: 9/7/15
 * Time: 5:18 PM
 */

namespace Dictionary\Test;

use Dictionary\Dictionary;

class DictionaryTest extends \PHPUnit_Framework_TestCase {

	protected $dictionary;

	protected function setUp()
	{
		$this->dictionary = Dictionary::getDictionary();
	}

	public function testEmpty()
	{
		$this->assertTrue(empty($this->dictionary));
	}

	public function testPush()
	{
		$this->populateDictionary();
		$this->assertEquals(2, count($this->dictionary));
		$this->assertContains('foo', $this->dictionary);
		$this->assertContains('bar', $this->dictionary);
	}

	public function testPop()
	{
		$this->populateDictionary();
		$this->assertEquals(2, count($this->dictionary));
		array_pop($this->dictionary);
		$this->assertEquals(1, count($this->dictionary));
		$this->assertNotContains('bar', $this->dictionary);
	}

	public function testPopulateDictionary()
	{
		$this->dictionary = Dictionary::populateDictionary();
		$this->assertEquals(20, count($this->dictionary));
		$this->assertNotEquals(21, count($this->dictionary));
	}

	private function populateDictionary()
	{
		array_push($this->dictionary, 'foo');
		array_push($this->dictionary, 'bar');
	}


}
