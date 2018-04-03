The test labeled "add operator" was the faster by 0.467 seconds (it took 50.395% the time.)

The first test took 0.9415 seconds.
The second test took 0.4745 seconds.

Code
The first test, "array_merge()", was:
<pre>
$array = array_merge($GLOBALS['dummy1'], $GLOBALS['dummy2'], $GLOBALS['dummy3']);
</pre>
The second test, "add operator", was:
<pre>

$array = $GLOBALS['dummy1'] + $GLOBALS['dummy2'] + $GLOBALS['dummy3'];

</pre>
---

The test labeled "array_merge()" was the faster by 0.5619 seconds (it took 44.995% the time.)

The first test took 0.4596 seconds.
The second test took 1.0215 seconds.

Code
The first test, "array_merge()", was:
<pre>
$array = array_merge($GLOBALS['dummy1'], $GLOBALS['dummy2'], $GLOBALS['dummy3']);
</pre>
The second test, "for", was:
<pre>

$array = $GLOBALS['dummy1'];
for ($i = 0, $n = count($GLOBALS['dummy2']); $i < $n; $i++)
$array[] = $GLOBALS['dummy2'][$i];
for ($i = 0, $n = count($GLOBALS['dummy3']); $i < $n; $i++)
$array[] = $GLOBALS['dummy3'][$i];

</pre>
