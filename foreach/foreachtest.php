The test labeled "non-referenced" was the faster by 0.0158 seconds (it took 98.424% the time.)

The first test took 0.9866 seconds.
The second test took 1.0024 seconds.

Code
The first test, "non-referenced", was:
<pre>
foreach ($GLOBALS['dummy'] as $k => $v)
    $v[0] + 1;
unset($v);
</pre>
The second test, "referenced", was:
<pre>

foreach ($GLOBALS['dummy'] as $k => &$v)
    $v[0] + 1;
unset($v);

</pre>
---

The test labeled "referenced" was the faster by 0.9278 seconds (it took 10.64% the time.)

The first test took 1.0383 seconds.
The second test took 0.1105 seconds.

Code
The first test, "non-referenced", was:
<pre>
foreach ($GLOBALS['dummy'] as $k => $v)
    $v[0]++;
unset($v);
</pre>
The second test, "referenced", was:
<pre>

foreach ($GLOBALS['dummy'] as $k => &$v)
    $v[0]++;
unset($v);

</pre>
---

The test labeled "$k => $dummy" was the faster by 0.2297 seconds (it took 75.818% the time.)

The first test took 0.7202 seconds.
The second test took 0.9499 seconds.

Code
The first test, "$k => $dummy", was:
<pre>
foreach ($GLOBALS['dummy'] as $k => $dummy)
    $k + 1;
</pre>
The second test, "array_keys()", was:
<pre>

foreach (array_keys($GLOBALS['dummy']) as $k)
    $k + 1;

</pre>
---

The test labeled "foreach" was the faster by 0.8317 seconds (it took 19.017% the time.)

The first test took 0.1953 seconds.
The second test took 1.027 seconds.

Code
The first test, "foreach", was:
<pre>
foreach ($GLOBALS['dummy'] as $v)
    $v[0] + 1;
</pre>
The second test, "while (list)", was:
<pre>

reset($GLOBALS['dummy']);
while (list(, $v) = each($GLOBALS['dummy']))
    $v[0] + 1;

</pre>
---

The test labeled "for" was the faster by 0.1597 seconds (it took 84.548% the time.)

The first test took 1.0334 seconds.
The second test took 0.8737 seconds.

Code
The first test, "foreach", was:
<pre>
$range = range(0, 100);
foreach ($range as $n)
    $GLOBALS['dummy'] = $n;
</pre>
The second test, "for", was:
<pre>

for ($n = 0; $n <= 100; $n++)
    $GLOBALS['dummy'] = $n;

</pre>
---

The test labeled "referenced" was the faster by 1.2056 seconds (it took 2.373% the time.)

The first test took 1.235 seconds.
The second test took 0.0293 seconds.

Code
The first test, "non-referenced", was:
<pre>
foreach ($GLOBALS['dummy'] as $k => $v)
    $GLOBALS['dummy'][$k][1]++;
unset($v);
</pre>
The second test, "referenced", was:
<pre>

foreach ($GLOBALS['dummy'] as $k => &$v)
    $v[1]++;
unset($v);

</pre>
---

The test labeled "without key" was the faster by 0.2017 seconds (it took 80.692% the time.)

The first test took 1.0445 seconds.
The second test took 0.8428 seconds.

Code
The first test, "with key", was:
<pre>
foreach ($GLOBALS['dummy'] as $k => $v)
    $v + array(1);
</pre>
The second test, "without key", was:
<pre>

foreach ($GLOBALS['dummy'] as $v)
    $v + array(1);

</pre>
---

The test labeled "foreach" was the faster by 0.9039 seconds (it took 4.786% the time.)

The first test took 0.0454 seconds.
The second test took 0.9493 seconds.

Code
The first test, "foreach", was:
<pre>
foreach ($GLOBALS['dummy'] as $v)
    $v[0] + 1;
</pre>
The second test, "while (next())", was:
<pre>

reset($GLOBALS['dummy']);
while (($v = next($GLOBALS['dummy'])) !== false)
    $v[0] + 1;

</pre>
---

The test labeled "foreach (fcall)" was the faster by 0.0044 seconds (it took 99.587% the time.)

The first test took 1.0529 seconds.
The second test took 1.0572 seconds.

Code
The first test, "foreach (fcall)", was:
<pre>
foreach (array_merge(range(1, 10), range(11, 20), range(21, 30), range(31, 40)) as $v)
    $GLOBALS['dummy2'] = $v;
</pre>
The second test, "foreach ($temp)", was:
<pre>

$temp = array_merge(range(1, 10), range(11, 20), range(21, 30), range(31, 40));
foreach ($temp as $v)
    $GLOBALS['dummy2'] = $v;

</pre>
---

The test labeled "foreach" was the faster by 0.6227 seconds (it took 41.541% the time.)

The first test took 0.4425 seconds.
The second test took 1.0652 seconds.

Code
The first test, "foreach", was:
<pre>
foreach ($GLOBALS['dummy'] as $v)
    $v[0] + 1;
</pre>
The second test, "for", was:
<pre>

for ($k = 0, $n = count($GLOBALS['dummy']); $k < $n; $k++)
    $GLOBALS['dummy'][$k][0] + 1;

</pre>
