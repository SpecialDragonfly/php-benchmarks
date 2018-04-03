
The test labeled "date()" was the faster by 0.445 seconds (it took 56.625% the time.)

The first test took 0.5809 seconds.
The second test took 1.0259 seconds.

Code
The first test, "date()", was:
<pre>
for ($i = 0; $i < 100; $i++)
$GLOBALS['dummy'] = date('Y-m-d \\a\\t H:i:s', $GLOBALS['t']);
</pre>
The second test, "strftime()", was:
<pre>

for ($i = 0; $i < 100; $i++)
$GLOBALS['dummy'] = strftime('%Y-%m-%d at %H:%M:%S', $GLOBALS['t']);

</pre>
---

The test labeled "time()" was the faster by 0.8731 seconds (it took 14.66% the time.)

The first test took 0.15 seconds.
The second test took 1.0231 seconds.

Code
The first test, "time()", was:
<pre>
for ($i = 0; $i < 100; $i++)
$GLOBALS['dummy'] = time();
</pre>
The second test, "strtotime('now')", was:
<pre>

for ($i = 0; $i < 100; $i++)
$GLOBALS['dummy'] = strtotime('now');

</pre>
---

The test labeled "time()" was the faster by 0.1084 seconds (it took 88.27% the time.)

The first test took 0.8156 seconds.
The second test took 0.9239 seconds.

Code
The first test, "time()", was:
<pre>
for ($i = 0; $i < 100; $i++)
$GLOBALS['dummy'] = time();
</pre>
The second test, "microtime(true)", was:
<pre>

for ($i = 0; $i < 100; $i++)
$GLOBALS['dummy'] = microtime(true);

</pre>
---

The test labeled "localtime()" was the faster by 0.2848 seconds (it took 72.614% the time.)

The first test took 1.0399 seconds.
The second test took 0.7551 seconds.

Code
The first test, "strftime()", was:
<pre>
for ($i = 0; $i < 100; $i++)
$GLOBALS['dummy'] = (int) strftime('%d', $GLOBALS['t']);
</pre>
The second test, "localtime()", was:
<pre>

for ($i = 0; $i < 100; $i++)
{
$temp = localtime($GLOBALS['t'], true);
$GLOBALS['dummy'] = $temp['tm_mday'];
}

</pre>
---

The test labeled "mktime()" was the faster by 6.6052 seconds (it took 6.175% the time.)

The first test took 7.04 seconds.
The second test took 0.4347 seconds.

Code
The first test, "strtotime('today')", was:
<pre>
for ($i = 0; $i < 100; $i++)
$GLOBALS['dummy'] = strtotime('today', $GLOBALS['t']);
</pre>
The second test, "mktime()", was:
<pre>

for ($i = 0; $i < 100; $i++)
{
$temp = localtime($GLOBALS['t'], true);
$GLOBALS['dummy'] = mktime($temp['tm_hour'], $temp['tm_min'], $temp['tm_sec'], $temp['tm_mon'] + 1, $temp['tm_mday'] + 1, 1900 + $temp['tm_year']);
}

</pre>
---

The test labeled "default" was fastest in the "YEAR()" state. It was faster than "DATE_FORMAT()" by 0.0684 seconds (it took 78.047% the time.)

Detailed Result
The test labeled "default" had the following timings:

DATE_FORMAT()
0.3115 seconds
YEAR()
0.2431 seconds
Code
The test labeled "DATE_FORMAT()" was:
<pre>
SELECT DATE_FORMAT(NOW(), '%Y');
The test labeled "YEAR()" was:

SELECT YEAR(NOW());
The full script was:

---@ run_bench DATE_FORMAT()
---@ run_bench YEAR()

</pre>
