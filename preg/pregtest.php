The test labeled "str_replace()" was the faster by 0.8948 seconds (it took 10.076% the time.)

The first test took 0.9951 seconds.
The second test took 0.1003 seconds.

Code
The first test, "preg_replace()", was:
<pre>
$GLOBALS['dummy2'] = preg_replace('~([Ww]heat|[Tt]hins)~', 'Nilla', $GLOBALS['dummy']);
</pre>
The second test, "str_replace()", was:
<pre>

$GLOBALS['dummy2'] = str_replace(array('Wheat', 'Thins', 'wheat', 'thins'), 'Nilla', $GLOBALS['dummy']);

</pre>
---

The test labeled "stri_replace()" was the faster by 0.8559 seconds (it took 15.848% the time.)

The first test took 1.0171 seconds.
The second test took 0.1612 seconds.

Code
The first test, "preg_replace()", was:
<pre>
$GLOBALS['dummy2'] = preg_replace('~(Wheat|Thins)~i', 'Nilla', $GLOBALS['dummy']);
</pre>
The second test, "stri_replace()", was:
<pre>

$GLOBALS['dummy2'] = str_ireplace(array('Wheat', 'Thins'), 'Nilla', $GLOBALS['dummy']);

</pre>
---

The test labeled "strpos()" was the faster by 0.1525 seconds (it took 79.538% the time.)

The first test took 0.7454 seconds.
The second test took 0.5929 seconds.

Code
The first test, "preg_match()", was:
<pre>
if (preg_match('~http://www\.google\.com/~', $GLOBALS['dummy']) != 0)
    $GLOBALS['dummy2'] = 42;
</pre>
The second test, "strpos()", was:
<pre>

if (strpos($GLOBALS['dummy'], 'http://wwww.google.com/') !== false)
    $GLOBALS['dummy2'] = 42;

</pre>
---

The test labeled "preg_match()" was the faster by 1.7022 seconds (it took 36.874% the time.)

The first test took 0.9943 seconds.
The second test took 2.6965 seconds.

Code
The first test, "preg_match()", was:
<pre>
if (preg_match('~http://([^\./]+\.[^/]+?)/~', $GLOBALS['dummy'], $match) != 0)
    $GLOBALS['dummy2'] = $match[1];
</pre>
The second test, "strpos()", was:
<pre>

$pos_start = strpos($GLOBALS['dummy'], 'http://') + strlen('http://');
$pos_slash = strpos($GLOBALS['dummy'], '/', $pos_start + 2);

$pos_dot = strpos($GLOBALS['dummy'], '.', $pos_start + 1);
if ($pos_dot !== null && $pos_dot < $pos_slash)
    $GLOBALS['dummy2'] = substr($GLOBALS['dummy'], $pos_start, $pos_slash - $pos_start);

</pre>
---

The test labeled "explode()" was the faster by 0.9998 seconds (it took 13.918% the time.)

The first test took 1.1615 seconds.
The second test took 0.1617 seconds.

Code
The first test, "preg_split()", was:
<pre>
$GLOBALS['dummy2'] = preg_split('~\r\n|\r|\n~', $GLOBALS['dummy']);
</pre>
The second test, "explode()", was:
<pre>

$GLOBALS['dummy2'] = explode("\n", str_replace(array("\r\n", "\r"), "\n", $GLOBALS['dummy']));

</pre>
---

The test labeled "preg_replace_callback()" was the faster by 0.5022 seconds (it took 49.869% the time.)

The first test took 1.0018 seconds.
The second test took 0.4996 seconds.

Code
The first test, "preg_replace()", was:
<pre>
$GLOBALS['dummy2'] = preg_replace('~([Ww]heat|[Tt]hins)~e', "strtolower('$1')", $GLOBALS['dummy']);
</pre>
The second test, "preg_replace_callback()", was:
<pre>

/*
function cb($match)
{
	return strtolower($match[0]);
}
*/

$GLOBALS['dummy2'] = preg_replace_callback('~([Ww]heat|[Tt]hins)~', 'cb', $GLOBALS['dummy']);

</pre>
