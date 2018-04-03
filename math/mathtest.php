The test labeled "integer" was the faster by 0.0091 seconds (it took 99.083% the time.)

The first test took 0.9907 seconds.
The second test took 0.9816 seconds.

Code
The first test, "float", was:
<pre>
$GLOBALS['dummy'] = 0.0;
for ($j = 0; $j < 100; $j++)
    $GLOBALS['dummy'] += $GLOBALS['dummy_float'];
</pre>
The second test, "integer", was:
<pre>

$GLOBALS['dummy'] = 0;
for ($j = 0; $j < 100; $j++)
    $GLOBALS['dummy'] += $GLOBALS['dummy_int'];

</pre>
---

The test labeled "integer" was the faster by 0.0345 seconds (it took 96.428% the time.)

The first test took 0.9672 seconds.
The second test took 0.9327 seconds.

Code
The first test, "float", was:
<pre>
$GLOBALS['dummy'] = 0.0;
for ($j = 0; $j < 100; $j++)
    $GLOBALS['dummy'] *= $GLOBALS['dummy_float'];
</pre>
The second test, "integer", was:
<pre>

$GLOBALS['dummy'] = 0;
for ($j = 0; $j < 100; $j++)
    $GLOBALS['dummy'] *= $GLOBALS['dummy_int'];

</pre>
---

The test labeled "multiply" was the faster by 0.2165 seconds (it took 77.919% the time.)

The first test took 0.764 seconds.
The second test took 0.9805 seconds.

Code
The first test, "multiply", was:
<pre>
$GLOBALS['dummy'] = 0;
for ($j = 0; $j < 100; $j++)
    $GLOBALS['dummy'] = $GLOBALS['dummy_int'] * 2;
</pre>
The second test, "add", was:
<pre>

$GLOBALS['dummy'] = 0;
for ($j = 0; $j < 100; $j++)
    $GLOBALS['dummy'] = $GLOBALS['dummy_int'] + $GLOBALS['dummy_int'];

</pre>
---

The test labeled "ifs" was the faster by 0.2836 seconds (it took 69.979% the time.)

The first test took 0.9447 seconds.
The second test took 0.6611 seconds.

Code
The first test, "min()/max()", was:
<pre>
$GLOBALS['dummy'] = 83;
for ($j = 0; $j < 100; $j++)
    $GLOBALS['dummy2'] = min(50, max(20, $GLOBALS['dummy']));
</pre>
The second test, "ifs", was:
<pre>

$GLOBALS['dummy'] = 83;
for ($j = 0; $j < 100; $j++)
{
    if ($GLOBALS['dummy'] < 20)
        $GLOBALS['dummy2'] = 20;
    elseif ($GLOBALS['dummy'] > 50)
        $GLOBALS['dummy2'] = 50;
    else
        $GLOBALS['dummy2'] = $GLOBALS['dummy'];
}

</pre>
---

The test labeled "abs()" was the faster by 0.055 seconds (it took 94.638% the time.)

The first test took 0.9709 seconds.
The second test took 1.0259 seconds.

Code
The first test, "abs()", was:
<pre>
$GLOBALS['dummy'] = 83;
for ($j = 0; $j < 50; $j++)
    $GLOBALS['dummy2'] = abs($GLOBALS['dummy']);

$GLOBALS['dummy'] = -83;
for ($j = 0; $j < 50; $j++)
    $GLOBALS['dummy2'] = abs($GLOBALS['dummy']);
</pre>
The second test, "ternary", was:
<pre>

$GLOBALS['dummy'] = 83;
for ($j = 0; $j < 50; $j++)
    $GLOBALS['dummy2'] = $GLOBALS['dummy'] ? -$GLOBALS['dummy'] : $GLOBALS['dummy'];

$GLOBALS['dummy'] = -83;
for ($j = 0; $j < 50; $j++)
    $GLOBALS['dummy2'] = $GLOBALS['dummy'] ? -$GLOBALS['dummy'] : $GLOBALS['dummy'];

</pre>
