<?php
/**
 * @author: verem Dugeri
 * Date: 9/7/15
 * Time: 2:51 PM
 */

namespace Dictionary\Test;


use Dictionary\Dictionary;
use Dictionary\ModifyDictionary;

class ModifyDictionaryTest extends \PHPUnit_Framework_TestCase {

  protected $dictionary;
	protected $modifier;

	protected function setUp()
	{
		$this->dictionary = Dictionary::getDictionary();
		$this->modifier = new ModifyDictionary();

	}

	public function testCreateEntry()
	{
		$this->assertEquals(0, count($this->dictionary));
		$array = $this->modifier->createEntry('slang','word alias', 'rosco is the slang for a shot gun');
		$this->assertEquals(['meaning'=>'word alias','sample-sentence'=> 'rosco is the slang for a shot gun'],
				$array);

		$this->assertEquals(2, count($array));
	}

	public function testFindEntry()
	{

		$this->modifier->createEntry('slang', 'word alias', 'rosco is a slang for shot gun');
		$word = $this->modifier->findEntry('slang');
		$this->assertEquals([
			'meaning' => 'word alias',
			'sample-sentence' => 'rosco is a slang for shot gun'
		], $word);
	}

	public function testDeleteEntry()
	{

		$array = $this->modifier->createEntry('tight', 'Approval', 'tight, tight, tight');
		$this->modifier->deleteEntry('tight');
		$this->assertNotContains('tight', $array);
	}

	public function testEditEntry()
	{

		$this->modifier->createEntry('tight', 'Approval', 'tight, tight, tight');
		$array = $this->modifier->editEntry('tight', 'Satisfaction', 'That is tight');
		$this->assertEquals([
				'meaning'=> 'Satisfaction',
				'sample-sentence' => 'That is tight'],
				$array);
		$this->assertNotEquals([
				'meaning'=> 'Approval',
				'sample-sentence'=>'tight, tight, tight'],
				$array);
	}

}
