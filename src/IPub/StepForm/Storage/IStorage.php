<?php
/**
 * IStorage.php
 *
 * @copyright      More in license.md
 * @license        http://www.ipublikuj.eu
 * @author         Adam Kadlec http://www.ipublikuj.eu
 * @package        iPublikuj:StepForm!
 * @subpackage     Storage
 * @since          1.0.0
 *
 * @date           04.02.17
 */

declare(strict_types = 1);

namespace IPub\StepForm\Storage;

use Nette;
use Nette\Http;

/**
 * Step form storage interface
 *
 * @package        iPublikuj:StepForm!
 * @subpackage     Storage
 *
 * @author         Adam Kadlec <adam.kadlec@ipublikuj.eu>
 */
interface IStorage
{
	/**
	 * Stores the given ($key, $value) pair, so that future calls to
	 * get($key) return $value. This call may be in another request.
	 *
	 * @param string $key
	 * @param mixed $value
	 *
	 * @return void
	 */
	function set(string $key, $value);

	/**
	 * Get the data for $key
	 *
	 * @param string $key    The key of the data to retrieve
	 * @param mixed $default The default value to return if $key is not found
	 *
	 * @return mixed
	 */
	function get(string $key, $default = FALSE);

	/**
	 * Clear the data with $key from the persistent storage
	 *
	 * @param string $key
	 *
	 * @return void
	 */
	function clear(string $key);

	/**
	 * Clear all data from the persistent storage
	 *
	 * @return void
	 */
	function clearAll();
}
