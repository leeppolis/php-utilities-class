# php-utilities-class

A collection of PHP Classes that help taking care of simple tasks.
The list of available methods will grow depending on my future needs.

## What's in the package

This repository contains 3 classes with a total of 7 static methods.

* Http::httpCode
* Http::contentType
* Http::redirect
* Linkify::twitterLinks
* Linkify::hasLinks
* Linkify::returnLinks
* Slugify::createSlug
 
### Http::httpCode

    @method void \SL\Utilities\Http::httpCode( [ int $code ] )

Given an HTTP code, sends the appropriate HTTP Header to the client. Defaults to `302`.

### Http::contentType

	@method void \SL\Utilities\Http::contentType( [ string $type ] )

Given an content type string, sends the appropriate HTTP Header to the client.
Accepts one of the following:

* `download`
* `text`
* `html`
* `json`
 
 Defaults to `json`.
 
### Http::redirect
 
 	@method mixed \SL\Utilities\Http::redirect( string $url [ , int $code, bool $die ] )
 	
Given a url and an HTTP code, sends the Redirect Header to the client. `$code` and `$die` defaults respectively to `302` and `true`.

* `$url` The URL of the destination page
* `$code` The HTTP code (usually 302 or 301), defaults to 302
* `$die` A boolean indicating if the current execution should end soon after the redirect, defaults to true
 
### Linkify::TwitterLinks
 
 	@method string \SL\Utilities\Linkify::twitterLinks( string $text )
 	
Given a the body of a tweet (or any other string), returns a string with all the entity converted to the appropriate HTML link.
 
* `http[s]://` strings are converted to links to external pages
* `@mentions` are converted to links to the appropriate Twitter profile
* `#tags` are converted to links to the Twitter search page
 
### Linkify::hasLinks
 
 	@method bool \SL\Utilities\Linkify::hasLinks( string $text )
 	
Given a string, returns wether it contains an URL or not.

### Linkify::returnLinks

	@method mixed \SL\Utilities\Linkify::returnLinks( string $text )

Given a string, returns an array with all the URLs found in the string, or false if the string doesn't contain any URL.

### Slugify::createSlug

	@method string \SL\Utilities\Slugify::createSlug( string $text )
	
Given a string, returns the corresponding valid string that can be used as a slug in web pages' URL by replacing spaces and invalid characters with URL-safe symbols.

## How to use

`include()` or `require()` the needed file, then call the static methods from your script, remembering that they're namespaced `\SL\Utilities'.

	$title = "A very long text containing spaces";
	$slug = \SL\Utilities\Slugify::createSlug($title); 
	echo $slug;
	// prints out "a-very-long-text-containing-spaces"
	
	
## License

The MIT License (MIT)

Copyright (c) 2015 Simone Lippolis

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.

## Change Log

### Oct, 2016
First commit.