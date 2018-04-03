The test labeled "ob_start()" was the faster by 0.2086 seconds (it took 78.076% the time.)

The first test took 0.7428 seconds.
The second test took 0.9514 seconds.

Code
The first test, "ob_start()", was:
<pre>
ob_start();

for ($i = 0; $i < 100; $i++)
    echo 'Wheat Thins!';

$GLOBALS['dummy'] = ob_get_contents();
ob_end_clean();
</pre>
The second test, "concat", was:
<pre>

$value = '';
for ($i = 0; $i < 100; $i++)
    $value .= 'Wheat Thins!';

$GLOBALS['dummy'] = $value;

</pre>
---

The test labeled "not" was the faster by 0.1271 seconds (it took 87.934% the time.)

The first test took 1.0535 seconds.
The second test took 0.9264 seconds.

Code
The first test, "ob_start()", was:
<pre>
ob_start();

for ($i = 0; $i < 20; $i++)
    $GLOBALS['dummy2'] = $i * 2;

ob_end_clean();
</pre>
The second test, "not", was:
<pre>

for ($i = 0; $i < 20; $i++)
    $GLOBALS['dummy2'] = $i * 2;

</pre>
