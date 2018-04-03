The test labeled "(int)" was the faster by 0.4194 seconds (it took 60.419% the time.)

The first test took 0.6402 seconds.
The second test took 1.0597 seconds.

Code
The first test, "(int)", was:
<pre>
for ($j = 0; $j < 100; $j++)
$i = (int) '42 ';
</pre>
The second test, "intval()", was:
<pre>

for ($j = 0; $j < 100; $j++)
$i = intval('42 ');

</pre>
---

The test labeled "(int)" was the faster by 6.666 seconds (it took 6.877% the time.)

The first test took 0.4923 seconds.
The second test took 7.1582 seconds.

Code
The first test, "(int)", was:
<pre>
for ($j = 0; $j < 100; $j++)
{
$i = '42 ';
$i = (int) $i;
}
</pre>
The second test, "settype()", was:
<pre>

for ($j = 0; $j < 100; $j++)
{
$i = '42 ';
settype($i, 'int');
}

</pre>
---

The test labeled "!empty()" was the faster by 0.1492 seconds (it took 83.506% the time.)

The first test took 0.9047 seconds.
The second test took 0.7555 seconds.

Code
The first test, "(bool)", was:
<pre>
for ($j = 0; $j < 1000; $j++)
{
$i = '1';
$GLOBALS['dummy'] = isset($i) && (bool) $i;
}
</pre>
The second test, "!empty()", was:
<pre>

for ($j = 0; $j < 1000; $j++)
{
$i = '1';
$GLOBALS['dummy'] = !empty($i);
}

</pre>
---

The test labeled "(string)" was the faster by 0.093 seconds (it took 90.673% the time.)

The first test took 0.9042 seconds.
The second test took 0.9972 seconds.

Code
The first test, "(string)", was:
<pre>
for ($j = 0; $j < 1000; $j++)
$GLOBALS['dummy'] = (string) $j;
</pre>
The second test, ""$string"", was:
<pre>

for ($j = 0; $j < 1000; $j++)
$GLOBALS['dummy'] = "$j";

</pre>
---

The test labeled "(string)" was the faster by 0.1166 seconds (it took 84.637% the time.)

The first test took 0.6422 seconds.
The second test took 0.7588 seconds.

Code
The first test, "(string)", was:
<pre>
for ($j = 0; $j < 1000; $j++)
$GLOBALS['dummy'] = (string) $j;
</pre>
The second test, "$string . ''", was:
<pre>

for ($j = 0; $j < 1000; $j++)
$GLOBALS['dummy'] = $j . '';

</pre>
---

The test labeled "(string)" was the faster by 0.1166 seconds (it took 84.637% the time.)

The first test took 0.6422 seconds.
The second test took 0.7588 seconds.

Code
The first test, "(string)", was:
<pre>
for ($j = 0; $j < 1000; $j++)
$GLOBALS['dummy'] = (string) $j;
</pre>
The second test, "$string . ''", was:
<pre>

for ($j = 0; $j < 1000; $j++)
$GLOBALS['dummy'] = $j . '';

</pre>
---

The test labeled "array()" was the faster by 2.9289 seconds (it took 35.291% the time.)

The first test took 4.5262 seconds.
The second test took 1.5973 seconds.

Code
The first test, "(array)", was:
<pre>
for ($j = 0; $j < 1000; $j++)
$GLOBALS['dummy'] = (array) $j;
</pre>
The second test, "array()", was:
<pre>

for ($j = 0; $j < 1000; $j++)
$GLOBALS['dummy'] = array($j);

</pre>
---

The test labeled "(array)" was the faster by 0.349 seconds (it took 66.387% the time.)

The first test took 0.6892 seconds.
The second test took 1.0381 seconds.

Code
The first test, "(array)", was:
<pre>
for ($j = 0; $j < 1000; $j++)
$GLOBALS['dummy'] = (array) $j;
</pre>
The second test, "is_array() ? x : array(x)", was:
<pre>

for ($j = 0; $j < 1000; $j++)
$GLOBALS['dummy'] = is_array($j) ? $j : array($j);

</pre>
---

The test labeled "===" was the faster by 0.0162 seconds (it took 98.392% the time.)

The first test took 0.9911 seconds.
The second test took 1.0073 seconds.

Code
The first test, "===", was:
<pre>
for ($j = 0; $j < 500; $j++)
{
$i = 1;
$GLOBALS['dummy1'] = $i === 1;

$i = 0;
$GLOBALS['dummy2'] = $i === 0;
}
</pre>
The second test, "empty()", was:
<pre>

for ($j = 0; $j < 500; $j++)
{
$i = 1;
$GLOBALS['dummy1'] = !empty($i);

$i = 0;
$GLOBALS['dummy2'] = empty($i);
}

</pre>
---

The test labeled "!!" was the faster by 0.0345 seconds (it took 96.704% the time.)

The first test took 1.011 seconds.
The second test took 1.0454 seconds.

Code
The first test, "!!", was:
<pre>
for ($j = 0; $j < 500; $j++)
{
$i = 1;
$GLOBALS['dummy1'] = !!$i;

$i = 0;
$GLOBALS['dummy2'] = !$i;
}
</pre>
The second test, "!empty()", was:
<pre>

for ($j = 0; $j < 500; $j++)
{
$i = 1;
$GLOBALS['dummy1'] = !empty($i);

$i = 0;
$GLOBALS['dummy2'] = empty($i);
}

</pre>
