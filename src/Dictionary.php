<?php
/**
 * Class Dictionary: Object that contains an arrray
 * of words, descriptions and sample sentences.
 * @property $dictionary array, a static class
 * property, the array of words.
 *
 *
 * @author: Verem Dugeri.
 * Date: 9/7/15
 * Time: 2:39 PM
 */

namespace Dictionary;


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

}