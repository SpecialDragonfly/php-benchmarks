The test labeled "{5}" was the faster by 0.185 seconds (it took 81.707% the time.)

The first test took 1.0112 seconds.
The second test took 0.8263 seconds.

Code
The first test, "substr()", was:
<pre>
for ($j = 0; $j < 100; $j++)
    $GLOBALS['dummy2'] = substr($GLOBALS['dummy'], 5, 1);
</pre>
The second test, "{5}", was:
<pre>

for ($j = 0; $j < 100; $j++)
    $GLOBALS['dummy2'] = $GLOBALS['dummy']{5};

</pre>
---

The test labeled "substr($var, -1)" was the faster by 0.3049 seconds (it took 69.198% the time.)

The first test took 0.6849 seconds.
The second test took 0.9897 seconds.

Code
The first test, "substr($var, -1)", was:
<pre>
for ($j = 0; $j < 100; $j++)
    $GLOBALS['dummy2'] = substr($GLOBALS['dummy'], -1);
</pre>
The second test, "strlen()", was:
<pre>

for ($j = 0; $j < 100; $j++)
    $GLOBALS['dummy2'] = substr($GLOBALS['dummy'], strlen($GLOBALS['dummy']) - 1);

</pre>
---

The test labeled "short" was the faster by 0.0914 seconds (it took 91.242% the time.)

The first test took 0.9518 seconds.
The second test took 1.0432 seconds.

Code
The first test, "short", was:
<pre>
for ($j = 0; $j < 100; $j++)
    $GLOBALS['dummy2'] = substr($GLOBALS['dummy_short'], 10, 10);
</pre>
The second test, "long (x200)", was:
<pre>

for ($j = 0; $j < 100; $j++)
    $GLOBALS['dummy2'] = substr($GLOBALS['dummy_long'], 10, 10);

</pre>
