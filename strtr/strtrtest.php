The test labeled "str_replace()" was the faster by 0.8636 seconds (it took 12.929% the time.)

The first test took 0.9918 seconds.
The second test took 0.1282 seconds.

Code
The first test, "strtr()", was:
<pre>
strtr($GLOBALS['dummy'], array('string' => 'STRING!'));
</pre>
The second test, "str_replace()", was:
<pre>

str_replace('string', 'STRING!', $GLOBALS['dummy']);

</pre>
---

The test labeled "str_replace()" was the faster by 0.8545 seconds (it took 15.771% the time.)

The first test took 1.0144 seconds.
The second test took 0.16 seconds.

Code
The first test, "strtr()", was:
<pre>
strtr($GLOBALS['dummy'], array('string' => 'STRING!'));
</pre>
The second test, "str_replace()", was:
<pre>

str_replace('string', 'STRING!', $GLOBALS['dummy']);

</pre>
---

The test labeled "str_replace/strtolower" was the faster by 0.0012 seconds (it took 99.856% the time.)

The first test took 0.8527 seconds.
The second test took 0.8515 seconds.

Code
The first test, "str_ireplace", was:
<pre>
str_ireplace('sTrIng', 'STRING!', $GLOBALS['dummy']);
</pre>
The second test, "str_replace/strtolower", was:
<pre>

str_replace('string', 'STRING!', strtolower($GLOBALS['dummy']));

</pre>
---

The test labeled "str_replace()/array_keys()" was the faster by 0.8832 seconds (it took 12.663% the time.)

The first test took 1.0112 seconds.
The second test took 0.1281 seconds.

Code
The first test, "strtr()", was:
<pre>
strtr($GLOBALS['dummy'], $GLOBALS['replacements']);
</pre>
The second test, "str_replace()/array_keys()", was:
<pre>

str_replace(array_keys($GLOBALS['replacements']), $GLOBALS['replacements'], $GLOBALS['dummy']);

</pre>
