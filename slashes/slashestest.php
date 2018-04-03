The first test, "addslashes()", was:
<pre>
$GLOBALS['dummy2'] = addslashes($GLOBALS['dummy']);
</pre>

The second test, "addcslashes()", was:
<pre>
$GLOBALS['dummy2'] = addcslashes($GLOBALS['dummy'], '\'"\\\0');
</pre>

The first test, "addslashes()", was:
<pre>
$GLOBALS['dummy2'] = addslashes($GLOBALS['dummy']);
</pre>

The second test, "mysql_escape_string()", was:
<pre>
$GLOBALS['dummy2'] = mysql_escape_string($GLOBALS['dummy']);
</pre>