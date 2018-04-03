The test labeled "mt_rand()" was the faster by 0.0558 seconds (it took 94.471% the time.)

The first test took 1.0094 seconds.
The second test took 0.9536 seconds.

Code
The first test, "rand()", was:
<pre>
$GLOBALS['dummy'] = rand(0, 1000);
</pre>
The second test, "mt_rand()", was:
<pre>

$GLOBALS['dummy'] = mt_rand(0, 1000);

</pre>
---

The test labeled "more" was the faster by 0.0486 seconds (it took 95.006% the time.)

The first test took 0.9251 seconds.
The second test took 0.9737 seconds.

Code
The first test, "more", was:
<pre>
$GLOBALS['dummy'] = rand(0, 16384);
</pre>
The second test, "less", was:
<pre>

$GLOBALS['dummy'] = rand(0, 32);

</pre>
---

The test labeled "array_rand()" was the faster by 3.2683 seconds (it took 22.573% the time.)

The first test took 4.2212 seconds.
The second test took 0.9528 seconds.

Code
The first test, "rand()", was:
<pre>
$keys = array_keys($GLOBALS['array']);
$key = rand(0, count($keys) - 1);
$GLOBALS['dummy'] = $GLOBALS['array'][$keys[$key]];
</pre>
The second test, "array_rand()", was:
<pre>

$key = array_rand($GLOBALS['array'], 1);
$GLOBALS['dummy'] = $GLOBALS['array'][$key];

</pre>
---

The test labeled "rand()" was the faster by 0.87 seconds (it took 7.093% the time.)

The first test took 0.0664 seconds.
The second test took 0.9364 seconds.

Code
The first test, "rand()", was:
<pre>
$key = rand(0, count($GLOBALS['array']) - 1);
$GLOBALS['dummy'] = $GLOBALS['array'][$key];
</pre>
The second test, "array_rand()", was:
<pre>

$key = array_rand($GLOBALS['array'], 1);
$GLOBALS['dummy'] = $GLOBALS['array'][$key];

</pre>
