The test labeled "create_function()" was the faster by 0.8813 seconds (it took 13.937% the time.)

The first test took 1.0241 seconds.
The second test took 0.1427 seconds.

Code
The first test, "eval()", was:
<pre>
eval('
$x = 0;
$x += 5;

if ($x >= 5)
$x = 0;

$x;
$x;');
</pre>
The second test, "create_function()", was:
<pre>

/*
$GLOBALS['dummy'] = create_function('', '
$x = 0;
$x += 5;

if ($x >= 5)
$x = 0;

$x;
$x;');
*/

$GLOBALS['dummy']();

</pre>
---

The test labeled "eval()" was the faster by 0.496 seconds (it took 49.31% the time.)

The first test took 0.4825 seconds.
The second test took 0.9785 seconds.

Code
The first test, "eval()", was:
<pre>
eval('
$x = 0;
$x += 5;

if ($x >= 5)
$x = 0;

$x;
$x;');
</pre>
The second test, "create_function()", was:
<pre>

$GLOBALS['dummy'] = create_function('', '
$x = 0;
$x += 5;

if ($x >= 5)
$x = 0;

$x;
$x;');
$GLOBALS['dummy']();

</pre>
---

The test labeled "regular callback" was the faster by 0.0586 seconds (it took 94.661% the time.)

The first test took 1.0974 seconds.
The second test took 1.0388 seconds.

Code
The first test, "create_function()", was:
<pre>
/*
$GLOBALS['dummy'] = create_function('', '
$x = 0;
$x += 5;

if ($x >= 5)
$x = 0;

$x;
$x;');
*/

$GLOBALS['dummy']();
</pre>
The second test, "regular callback", was:
<pre>

/*
function dummy()
{
$x = 0;
$x += 5;

if ($x >= 5)
$x = 0;

$x;
$x;
}
$GLOBALS['dummy_cb'] = 'dummy';
*/

$GLOBALS['dummy_cb']();

</pre>
