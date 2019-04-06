<?php
namespace SimpleHtmlDom\Controller;

use SimpleHtmlDom\Controller\AppController;
use SimpleHtmlDom\SimpleHtmlDomNode\SimpleHtmlDomNode;
use SimpleHtmlDom\SimpleHtmlDomNode\SimpleHtmlDom;

/**
 * SimpleHtmlDom Controller
 *
 *
 * @method \SimpleHtmlDom\Model\Entity\SimpleHtmlDom[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SimpleHtmlDomController extends AppController
{
   // get html dom from file
// $maxlen is defined in the code as PHP_STREAM_COPY_ALL which is defined as -1.
function file_get_html(
	$url,
	$use_include_path = false,
	$context = null,
	$offset = 0,
	$maxLen = -1,
	$lowercase = true,
	$forceTagsClosed = true,
	$target_charset = DEFAULT_TARGET_CHARSET,
	$stripRN = true,
	$defaultBRText = DEFAULT_BR_TEXT,
	$defaultSpanText = DEFAULT_SPAN_TEXT)
{
	// Ensure maximum length is greater than zero
	if($maxLen <= 0) { $maxLen = MAX_FILE_SIZE; }

	// We DO force the tags to be terminated.
	$dom = new SimpleHtmlDom(
		null,
		$lowercase,
		$forceTagsClosed,
		$target_charset,
		$stripRN,
		$defaultBRText,
		$defaultSpanText);

	/**
	 * For sourceforge users: uncomment the next line and comment the
	 * retrieve_url_contents line 2 lines down if it is not already done.
	 */
	$contents = file_get_contents(
		$url,
		$use_include_path,
		$context,
		$offset,
		$maxLen);

	// Paperg - use our own mechanism for getting the contents as we want to
	// control the timeout.
	// $contents = retrieve_url_contents($url);
	if (empty($contents) || strlen($contents) > $maxLen) { return false; }

	// The second parameter can force the selectors to all be lowercase.
	$dom->load($contents, $lowercase, $stripRN);
	return $dom;
}

// get html dom from string
function str_get_html(
	$str,
	$lowercase = true,
	$forceTagsClosed = true,
	$target_charset = DEFAULT_TARGET_CHARSET,
	$stripRN = true,
	$defaultBRText = DEFAULT_BR_TEXT,
	$defaultSpanText = DEFAULT_SPAN_TEXT)
{
	$dom = new SimpleHtmlDom(
		null,
		$lowercase,
		$forceTagsClosed,
		$target_charset,
		$stripRN,
		$defaultBRText,
		$defaultSpanText);

	if (empty($str) || strlen($str) > MAX_FILE_SIZE) {
		$dom->clear();
		return false;
	}

	$dom->load($str, $lowercase, $stripRN);
	return $dom;
}

// dump html dom tree
function dump_html_tree($node, $show_attr = true, $deep = 0)
{
	$node->dump($node);
}


}
