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

namespace Verem\Dictionary;

class IndexNotFoundException extends \Exception {


	/**
	 * @var string
	 */

	private $message;

	/**
	 * @param string $message
	 */

	public function __construct($message)
	{
		$this->message = $message;
	}


	/**
	 * @method getErrorMessage
	 *
	 * returns an error message to the calling
	 * method. Most appropriately done
	 * in the catch clause of the
	 * try-catch block.
	 *
	 * usage $e->getErrorMessage();
	 *
	 * @return string
	 */
	public function getErrorMessage()
	{
		return $this->message;
	}
}