The first test, "addslashes()", was:
<pre>
$GLOBALS['dummy2'] = addslashes($GLOBALS['dummy']);
</pre>

The second test, "addcslashes()", was:
<pre>
$GLOBALS['dummy2'] = addcslashes($GLOBALS['dummy'], '\'"\\\0');
</pre>
