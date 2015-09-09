<?php
/**
 * class IndexNotFoundException
 * @extends Exception
 *
 * Throws an error if the index for
 * the key is not found in the
 * array
 *
 * @author : Verem Dugeri.
 * Date: 9/9/15
 * Time: 10:11 AM
 */

namespace Dictionary;



class IndexNotFoundException extends \Exception {


	private $message;
	public function __construct($message)
	{
		$this->message = $message;
	}

	/*
	 * @method getErrorMessage
	 * @return $message string :
	 * returns an error message to the calling
	 * method. Most appropriately done
	 * in the catch clause of the
	 * try-catch block.
	 *
	 * usage $e->getErrorMessage();
	 */
	public function getErrorMessage()
	{
		return $this->message;
	}
}