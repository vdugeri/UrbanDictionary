<?php
/**
 * Created by PhpStorm.
 * User: andela
 * Date: 9/7/15
 * Time: 2:51 PM
 */

namespace Dictionary\Test;


use Dictionary\Dictionary;
use Dictionary\ModifyDictionary;

class ModifyDictionaryTest extends \PHPUnit_Framework_TestCase {



	public function testCreateEntry()
	{
		$modifier = new ModifyDictionary();
		$dictionary = Dictionary::getDictionary();
		$this->assertEquals(0, count($dictionary));
		$array = $modifier->createEntry('slang','word alias', 'rosco is the slang for a shot gun');
		$this->assertEquals(['meaning'=>'word alias','sample-sentence'=> 'rosco is the slang for a shot gun'],
				$array);

		$this->assertEquals(2, count($array));
	}

	public function testFindEntry()
	{
		$modifier = new ModifyDictionary();
		$modifier->createEntry('slang', 'word alias', 'rosco is a slang for shot gun');
		$word = $modifier->findEntry('slang');
		$this->assertEquals([
			'meaning' => 'word alias',
			'sample-sentence' => 'rosco is a slang for shot gun'
		], $word);
	}

	public function testDeleteEntry()
	{
		$modifier = new ModifyDictionary();
		$array = $modifier->createEntry('tight', 'Approval', 'tight, tight, tight');
		$modifier->deleteEntry('tight');
		$this->assertNotContains('tight', $array);
	}


	public function testEditEntry()
	{
		$modifier = new ModifyDictionary();
		$modifier->createEntry('tight', 'Approval', 'tight, tight, tight');
		$array = $modifier->editEntry('tight', 'Satisfaction', 'That is tight');
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
