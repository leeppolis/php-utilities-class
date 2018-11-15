<?php
	
/**
 * Slugify.class.php
 * A collection of static method to handle strings containing links
 *
 * @author Simone Lippolis <simone@simonelippolis.com>
 * @version 1.0
 * @package SL
 * @subpackage Utilities
 */
	namespace SL\Utilities;

/**
 * @method string createSlug( string $text )
 */
 	
	Class Slugify {		
	
/**
 * Given a string, returns the corresponding valid string that can be used as a slug in web pages' URL
 *
 * @param string $text
 * @return string 
 *
 */	
			
		public static function createSlug($text) { 
			if (empty($text)) {
				return false;
			}
			if ( class_exists('\Transliterator') ) {
  			$transliterator = \Transliterator::createFromRules(':: Any-Latin; :: Latin-ASCII; :: NFD; :: [:Nonspacing Mark:] Remove; :: NFC;', \Transliterator::FORWARD);
  			$text = $transliterator->transliterate($text);	
			}			
			// replace non letter or digits by -
			$text = preg_replace('~[^\\pL\d]+~u', '-', $text);			
			// trim
			$text = trim($text, '-');			
			// transliterate
			$text = iconv('utf-8', 'ISO-8859-1//TRANSLIT', $text);			
			// lowercase
			$text = strtolower($text);			
			// remove unwanted characters
			$text = preg_replace('~[^-\w]+~', '', $text);
      return $text;
		}
	}
