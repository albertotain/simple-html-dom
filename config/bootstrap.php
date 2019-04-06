<?php

define('HDOM_TYPE_ELEMENT', 1);
define('HDOM_TYPE_COMMENT', 2);
define('HDOM_TYPE_TEXT', 3);
define('HDOM_TYPE_ENDTAG', 4);
define('HDOM_TYPE_ROOT', 5);
define('HDOM_TYPE_UNKNOWN', 6);
define('HDOM_QUOTE_DOUBLE', 0);
define('HDOM_QUOTE_SINGLE', 1);
define('HDOM_QUOTE_NO', 3);
define('HDOM_INFO_BEGIN', 0);
define('HDOM_INFO_END', 1);
define('HDOM_INFO_QUOTE', 2);
define('HDOM_INFO_SPACE', 3);
define('HDOM_INFO_TEXT', 4);
define('HDOM_INFO_INNER', 5);
define('HDOM_INFO_OUTER', 6);
define('HDOM_INFO_ENDSPACE', 7);

/** The default target charset */
defined('DEFAULT_TARGET_CHARSET') || define('DEFAULT_TARGET_CHARSET', 'UTF-8');

/** The default <br> text used instead of <br> tags when returning text */
defined('DEFAULT_BR_TEXT') || define('DEFAULT_BR_TEXT', "\r\n");

/** The default <span> text used instead of <span> tags when returning text */
defined('DEFAULT_SPAN_TEXT') || define('DEFAULT_SPAN_TEXT', ' ');

/** The maximum file size the parser should load */
defined('MAX_FILE_SIZE') || define('MAX_FILE_SIZE', 600000);

/** Contents between curly braces "{" and "}" are interpreted as text */
define('HDOM_SMARTY_AS_TEXT', 1);

