<?php
namespace Dictionary;
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




class RankWords {


	/*
	 *@method rankWords
	 * @param $input string.
	 * This method takes in a string and returns
	 * the ranking of the individual words
	 *
	 * Sadly,it makes heavy us of the php standard
	 * library string and array functions. I have
	 * to trust them against my will here.
	 *
	 * @return $ranked array.
	 */
	public static function rankWords($input)
	{
		$ranked = array_count_values(str_word_count($input,1));
		arsort($ranked);
		return $ranked;
	}


}