<?php
/**
 * @author: verem Dugeri
 * Date: 9/7/15
 * Time: 2:51 PM
 */

namespace Verem\Dictionary\Test;

use Verem\Dictionary\Dictionary;
use Verem\Dictionary\Dictionarymanager;

class DictionaryManagerTest extends \PHPUnit_Framework_TestCase
{
    protected $dictionary;
    protected $manager;
    protected $populatedDictionary;

    protected function setUp()
    {
        $this->dictionary = Dictionary::getDictionary();
        $this->manager = new DictionaryManager();
        $this->populatedDictionary = Dictionary::populateDictionary();
    }

    public function testCreateEntry()
    {
        $this->assertEquals(0, count($this->dictionary));

        $array = $this->manager->createEntry('slang', 'word alias', 'rosco is the slang for a shot gun');

        $this->assertEquals(1, count($array[0]));
        $this->assertEquals(['meaning'=>'word alias', 'sample-sentence'=> 'rosco is the slang for a shot gun'],
                $array[1]);
    }

	/*
	 * Test to see if an entry can be found
	 * from array
	 */
    public function testFindEntry()
    {
        $this->manager->createEntry('slang', 'word alias', 'rosco is a slang for shot gun');

        $word = $this->manager->findEntry('slang');

        $this->assertEquals([
            'meaning' => 'word alias',
            'sample-sentence' => 'rosco is a slang for shot gun'
        ], $word);

        $this->populatedDictionary;
        $this->assertEquals(20, count($this->dictionary));

        $found = $this->manager->findEntry('Elusive');

        $this->assertEquals([
            'meaning'=> 'Hard to grasp',
            'sample-sentence' => 'The words to the song are elusive, as the singer tends to mumble.'
        ], $found);

        $this->assertContains('Hard to grasp', $found['meaning']);
    }

    /*
     * Test to see if an entry can be deleted.
     */
    public function testDeleteEntry()
    {
        $array = $this->manager->createEntry('tight', 'Approval', 'tight, tight, tight');

        $this->manager->deleteEntry('tight');
        
        $this->assertNotContains('tight', $array[1]);
    }

    public function testEditEntry()
    {
        $this->manager->createEntry('tight', 'Approval', 'tight, tight, tight');
        $array = $this->manager->editEntry('tight', 'Satisfaction', 'That is tight');

        $this->assertEquals(true, $array[0]);
        $this->assertEquals([
                'meaning'=> 'Satisfaction',
                'sample-sentence' => 'That is tight'],
                $array[1]);

        $this->assertNotEquals([
                'meaning'=> 'Approval',
                'sample-sentence'=>'tight, tight, tight'],
                $array[1]);
    }
}
