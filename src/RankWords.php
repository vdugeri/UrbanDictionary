<?php

namespace Verem\Dictionary;
use Doctrine\Instantiator\Exception\InvalidArgumentException;

/**
 * class RankWords
 * This class creates an array of words and
 * ranks them according to the number of
 * occurrences of each word in
 * descending order of
 * magnitude.
 *
 * @author : Verem Dugeri
 * Date: 9/7/15
 * Time: 9:38 AM
 */




class RankWords
{
    /**
     * @method rankWords
     *
     * This method takes in a string and returns
     * the ranking in frequency of the
     * individual words
     *
     * Sadly,it makes heavy use of the php standard
     * library string and array functions. I have
     * to trust them against my will.
     *
     * The function takes the imputed array of
     * words and maps them into an array of
     * $word => 1 key value pair for each
     * element.
     *
     * It then proceeds to reduce the words
     * using the array_count_values function
     * into an array of distinct words and
     * frequency of occurrence.
     *
     * @param $input
     * @return array
     */

    public static function rankWords(array $input)
    {
		if(! is_array($input))
		{
			throw new \InvalidArgumentException('The input arguments should be an array');
		}

		$result = static::getSampleSentence($input);
        $wordMap = str_word_count($result, 1);
        $ranked = array_count_values($wordMap);
        arsort($ranked);
        
        return $ranked;
    }
	private function getSampleSentence(array $array)
	{
		return $array['sample-sentence'];
	}
}
