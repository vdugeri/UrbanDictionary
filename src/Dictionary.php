<?php
/**
 * Class Dictionary: Object that contains an arrray
 * of words, descriptions and sample sentences.
 * @property $dictionary array, a static class
 * property, the array of words.
 *
 *
 * @author : Verem Dugeri.
 * Date: 9/7/15
 * Time: 2:39 PM
 */

namespace Dictionary;


use Faker\Factory;

class Dictionary {

	private static $dictionary;


 /*
  * @method getDictionary
  * class method that returns the dictionary.
  * auto generated: do not edit. All changes
  * will be undone.
  */
	public static function getDictionary()
	{
		self::$dictionary = array();
		return self::$dictionary;
	}


	/*
	 * @method populateDictionary
	 * This method populates the dictionary
	 * with a list of words, meanings and
	 * sample sentences.
	 *
	 *The words,meanings ans sample sentences
	 *are adapted from http://www.cram.com/flashcards
	 *
	 * @return $dictionary array.
	 */
	public static function populateDictionary()
	{

		$dictionary = [
			'Accessible'=>[
				'meaning'=>'Easy to reach or to approach',
				'sample-sentence' => 'The introduction to the complex novel was, thankfully, written in clear accessible language'
			],
			'Accommodate' => [
				'meaning' => 'To give consideration to',
				'sample-sentence' => 'The hospitable couple was happy to accommodate the needs of their finicky guest.'
			],
			'Advantageous' =>[
				'meaning' => 'Giving an advantage',
				'sample-sentence' => 'The house\'s location in the best school district was advantageous to the seller.'
			],
			'Adversary' => [
				'meaning' => 'One who opposes or resists',
				'sample-sentence' => 'Prosper hoped to defeat his adversary in the afternoon\'s tennis match.'
			],
			'Absolve' => [
				'meaning' => 'To forgive; to free from guilt',
				'sample-sentence' => 'Marta felt greatly relieved after her mother absolved her for breaking the vase.'
			],
			'Accentuate' => [
				'meaning' => 'To emphasize',
				'sample-sentence' => 'Carla used red ribbons to accentuate the coppery tones in her hair.'
			],
			'Aerate' => [
				'meaning' => 'To supply with air',
				'sample-sentence' => 'Every spring, Solomon used his tiller to aerate the compact soil.'
			],
			'Anthology'=> [
				'meaning' => 'A collection of selected literary pieces',
				'sample-sentence' => 'The writer was thrilled when his story was included in an anthology of American masterpieces.'
			],
			'Antidote' => [
				'meaning' => 'Something that relieves or counteracts',
				'sample-sentence' => 'Veronique found that listening to French music was an antidote for her homesickness.'
			],
			'Belated' => [
				'meaning' => 'Past the normal or proper time',
				'sample-sentence' => 'Even though I forgot his birthday, I hoe my father accepts my belated card'
			],
			'Benefactor' => [
				'meaning' => 'One who offers financial help',
				'sample-sentence' => 'Michael\'s aunt and benefactor paid his college tuition.'
			],
			'Brandish' => [
				'meaning' => 'To shake or wave menacingly',
				'sample-sentence' => 'The baseball player was fined for brandishing his bat at the opposing pitcher'
			],
			'Buffer' => [
				'meaning' => 'Protective barrier',
				'sample-sentence' => 'The dense trees acted as a buffer against the heavy rain.'
			],
			'Camaraderie' => [
				'meaning' => 'Spirit of friendship',
				'sample-sentence' => 'The manager hoped the retreat would increase the camaraderie among the feuding workers.'
			],
			'Defiant' => [
				'meaning' => 'Showing bold resistance',
				'sample-sentence' => 'The defiant toddler refused to leave the park.'
			],
			'Drab' => [
				'meaning' => 'Dull, monotonous',
				'sample-sentence' => 'The drab winter scene made Keisha long for the vibrant colors of spring'
			],
			'Entangle' => [
				'meaning' => 'To involve in trouble',
				'sample-sentence' => 'Jonah regretted entangling Parker in his legal difficulties'
			],
			'Eloquent' => [
				'meaning' => 'Fluent, expressive',
				'sample-sentence' => 'Kim, an eloquent speaker, was the best choice to make the presentation for the group'
			],
			'Ecstatic' => [
				'meaning' => 'Overwhelmingly emotional',
				'sample-sentence' => 'They were ecstatic when their team won the championship game in the last second.'
			],
			'Elusive' => [
				'meaning' => 'Hard to grasp',
				'sample-sentence' => 'The words to the song are elusive, as the singer tends to mumble.'
			]
		];

		self::$dictionary = $dictionary;
		return self::$dictionary;
	}

}