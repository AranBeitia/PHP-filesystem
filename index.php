<?php
/**
 *  magic constants
 */

echo __DIR__ . '<br/>';
echo __FILE__ . '<br/>';

/**
 * create directory
 */

 $path = './test';
 $dir = $path . '/ts/';
 if(!file_exists($dir)) {
	 mkdir($dir);
 }

 /**
	* rename directory
  */

	if(file_exists($dir)) {
		rename($dir, $path . '/my_root');

	}

	/**
	 * read files and folders
	 */

	 $files = scandir('./');
	 echo '<pre>';
	 var_dump($files);
	 echo '</pre>';

	 /**
		* get content of a file
	  */

		echo file_get_contents('text.txt'); 

		/**
		 * modify content
		 */
		file_put_contents('text.txt', 'hi'); // this overwrites the content before

		$content = file_get_contents('text.txt');
		file_put_contents('text.txt', 'Hello kitty'.PHP_EOL . $content);