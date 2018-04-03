The test labeled "clean code" was the faster by 0.749 seconds (it took 26.488% the time.)

The first test took 1.0189 seconds.
The second test took 0.2699 seconds.

Code
The first test, "notices", was:
<pre>
for ($i = 0; $i < 100; $i++)
    $GLOBALS[dummy]++;
</pre>
The second test, "clean code", was:
<pre>

for ($i = 0; $i < 100; $i++)
    $GLOBALS['dummy']++;

</pre>
---

The test labeled "@ (shut up)" was the faster by 0.1991 seconds (it took 81.445% the time.)

The first test took 0.874 seconds.
The second test took 1.0731 seconds.

Code
The first test, "@ (shut up)", was:
<pre>
$temp = 0;
@$GLOBALS[dummy]++;
$GLOBALS['dummy'] = $temp;
</pre>
The second test, "error_reporting(0)", was:
<pre>

$temp = error_reporting(0);
$GLOBALS[dummy]++;
error_reporting($temp);

</pre>
---

The test labeled "return code" was the faster by 0.8485 seconds (it took 6.368% the time.)

The first test took 0.0577 seconds.
The second test took 0.9063 seconds.

Code
The first test, "return code", was:
<pre>
for ($i = 0; $i < 100; $i++)
{
    if (return_false() === false)
        $GLOBALS['dummy']++;
}
</pre>
The second test, "Exceptions", was:
<pre>

for ($i = 0; $i < 100; $i++)
{
    try
    {
        throw_exception();
    }
    catch (Exception $e)
    {
        $GLOBALS['dummy']++;
    }
}

</pre>
---

The test labeled "Exceptions" was the faster by 0.2144 seconds (it took 78.42% the time.)

The first test took 0.9934 seconds.
The second test took 0.779 seconds.

Code
The first test, "return code", was:
<pre>
for ($i = 0; $i < 100; $i++)
{
    if (no_return_false() === false)
        $GLOBALS['dummy']++;
}
</pre>
The second test, "Exceptions", was:
<pre>

for ($i = 0; $i < 100; $i++)
{
    try
    {
        no_throw_exception();
    }
    catch (Exception $e)
    {
        $GLOBALS['dummy']++;
    }
}

</pre>
---

The test labeled "clean code" was the faster by 0.826 seconds (it took 16.793% the time.)

The first test took 0.9927 seconds.
The second test took 0.1667 seconds.

Code
The first test, "notices", was:
<pre>
for ($i = 0; $i < 100; $i++)
    @$GLOBALS[dummy]++;
</pre>
The second test, "clean code", was:
<pre>

for ($i = 0; $i < 100; $i++)
    $GLOBALS['dummy']++;

</pre>
---

The test labeled "without @" was the faster by 0.4448 seconds (it took 54.397% the time.)

The first test took 0.9754 seconds.
The second test took 0.5306 seconds.

Code
The first test, "@ (shut up)", was:
<pre>
@$GLOBALS['dummy']++;
</pre>
The second test, "without @", was:
<pre>

$GLOBALS['dummy']++;

</pre>
---

The test labeled "isset()" was the faster by 0.7466 seconds (it took 27.6% the time.)

The first test took 1.0312 seconds.
The second test took 0.2846 seconds.

Code
The first test, "@ (shut up)", was:
<pre>
unset($GLOBALS['dummy']);
for ($i = 0; $i < 100; $i++)
    $GLOBALS['dummy2'] = @$GLOBALS['dummy'];
</pre>
The second test, "isset()", was:
<pre>

unset($GLOBALS['dummy']);
for ($i = 0; $i < 100; $i++)
    $GLOBALS['dummy2'] = isset($GLOBALS['dummy']) ? $GLOBALS['dummy'] : 0;

</pre>
