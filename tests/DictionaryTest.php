<?php
/**
 * @author: Verem Dugeri.
 * Date: 9/7/15
 * Time: 5:18 PM
 */

namespace Verem\Dictionary\Test;

use Verem\Dictionary\Dictionary;

class DictionaryTest extends \PHPUnit_Framework_TestCase {

	protected $dictionary;

	protected function setUp()
	{
		$this->dictionary = Dictionary::getDictionary();
	}

	public function testNotEmpty()
	{
		$this->assertFalse(empty($this->dictionary));
	}

	public function testPush()
	{
		$this->populateDictionary();
		$this->assertEquals(22, count($this->dictionary));
		$this->assertContains('foo', $this->dictionary);
		$this->assertContains('bar', $this->dictionary);
	}

	public function testPop()
	{
		$this->populateDictionary();
		$this->assertEquals(22, count($this->dictionary));
		array_pop($this->dictionary);
		$this->assertEquals(21, count($this->dictionary));
		$this->assertNotContains('bar', $this->dictionary);
	}

	public function testPopulateDictionary()
	{
		Dictionary::populateDictionary();
		$this->dictionary = Dictionary::getDictionary();
		$this->assertEquals(20, count($this->dictionary));
		$this->assertNotEquals(21, count($this->dictionary));
	}

	private function populateDictionary()
	{
		array_push($this->dictionary, 'foo');
		array_push($this->dictionary, 'bar');
	}


}
