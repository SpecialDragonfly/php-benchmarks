The test labeled "===" was the faster by 0.8737 seconds (it took 15.263% the time.)

The first test took 1.031 seconds.
The second test took 0.1574 seconds.

Code
The first test, "==", was:
<pre>
for ($j = 0; $j < 100; $j++)
    $GLOBALS['dummy3'] = $GLOBALS['dummy1'] == $GLOBALS['dummy2'];
</pre>
The second test, "===", was:
<pre>

for ($j = 0; $j < 100; $j++)
    $GLOBALS['dummy3'] = $GLOBALS['dummy1'] === $GLOBALS['dummy2'];

</pre>
---

The test labeled "==" was the faster by 0.5329 seconds (it took 69.688% the time.)

The first test took 1.2252 seconds.
The second test took 1.7581 seconds.

Code
The first test, "==", was:
<pre>
for ($j = 0; $j < 100; $j++)
    $GLOBALS['dummy3'] = $GLOBALS['dummy1'] == $GLOBALS['dummy2'];
</pre>
The second test, "===", was:
<pre>

for ($j = 0; $j < 100; $j++)
    $GLOBALS['dummy3'] = (int) $GLOBALS['dummy1'] === (int) $GLOBALS['dummy2'];

</pre>
---

The test labeled "===" was the faster by 0.9238 seconds (it took 8.598% the time.)

The first test took 1.0107 seconds.
The second test took 0.0869 seconds.

Code
The first test, "==", was:
<pre>
for ($j = 0; $j < 100; $j++)
    $GLOBALS['dummy3'] = $GLOBALS['dummy1'] == $GLOBALS['dummy2'];
</pre>
The second test, "===", was:
<pre>

for ($j = 0; $j < 100; $j++)
    $GLOBALS['dummy3'] = $GLOBALS['dummy1'] === $GLOBALS['dummy2'];

</pre>
---

The test labeled "===" was the faster by 3.6005 seconds (it took 6.479% the time.)

The first test took 3.85 seconds.
The second test took 0.2495 seconds.

Code
The first test, "==", was:
<pre>
for ($j = 0; $j < 100; $j++)
    $GLOBALS['dummy3'] = $GLOBALS['dummy1'] == $GLOBALS['dummy2'];
</pre>
The second test, "===", was:
<pre>

for ($j = 0; $j < 100; $j++)
    $GLOBALS['dummy3'] = $GLOBALS['dummy1'] === $GLOBALS['dummy2'];

</pre>
---

The test labeled "===" was the faster by 0.2178 seconds (it took 79.406% the time.)

The first test took 0.84 seconds.
The second test took 1.0578 seconds.

Code
The first test, "===", was:
<pre>
for ($j = 0; $j < 100; $j++)
    $GLOBALS['dummy3'] = $GLOBALS['dummy1'] === $GLOBALS['dummy2'];
</pre>
The second test, "strcmp()", was:
<pre>

for ($j = 0; $j < 100; $j++)
    $GLOBALS['dummy3'] = strcmp($GLOBALS['dummy1'], $GLOBALS['dummy2']) == 0;

</pre>
---

The test labeled "===" was the faster by 0.2044 seconds (it took 80.855% the time.)

The first test took 0.8634 seconds.
The second test took 1.0679 seconds.

Code
The first test, "===", was:
<pre>
for ($j = 0; $j < 100; $j++)
    $GLOBALS['dummy3'] = $GLOBALS['dummy1'] === $GLOBALS['dummy2'];
</pre>
The second test, "strcmp()", was:
<pre>

for ($j = 0; $j < 100; $j++)
    $GLOBALS['dummy3'] = strcmp($GLOBALS['dummy1'], $GLOBALS['dummy2']) == 0;

</pre>
---

The test labeled "=== null" was the faster by 0.291 seconds (it took 71.524% the time.)

The first test took 0.7309 seconds.
The second test took 1.0218 seconds.

Code
The first test, "=== null", was:
<pre>
for ($j = 0; $j < 100; $j++)
{
    $GLOBALS['dummy3'] = $GLOBALS['dummy1'] === null;
    $GLOBALS['dummy3'] += $GLOBALS['dummy2'] === null;
}
</pre>
The second test, "is_null()", was:
<pre>

for ($j = 0; $j < 100; $j++)
{
    $GLOBALS['dummy3'] = is_null($GLOBALS['dummy1']);
    $GLOBALS['dummy3'] += is_null($GLOBALS['dummy2']);
}

</pre>
