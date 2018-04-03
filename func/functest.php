The test labeled "no fcall" was the faster by 0.0358 seconds (it took 96.556% the time.)

The first test took 1.0404 seconds.
The second test took 1.0046 seconds.

Code
The first test, "fcall", was:
<pre>
/*
function do_something()
{
	for ($i = 0; $i < 20; $i++)
		$GLOBALS['dummy'] + $i;
}
*/

do_something();
</pre>
The second test, "no fcall", was:
<pre>

for ($i = 0; $i < 20; $i++)
    $GLOBALS['dummy'] + $i;

</pre>
---

The test labeled "call_user_func()" was the faster by 0.3966 seconds (it took 76.867% the time.)

The first test took 1.7146 seconds.
The second test took 1.318 seconds.

Code
The first test, "fcall", was:
<pre>
/*
function do_something($i)
{
	for ($i = 0; $i < 20; $i++)
		$GLOBALS['dummy'] + $i;
}
*/

do_something(74);
</pre>
The second test, "call_user_func()", was:
<pre>

/*
function do_something($i)
{
	for ($i = 0; $i < 20; $i++)
		$GLOBALS['dummy'] + $i;
}
*/

call_user_func('do_something', 74);

</pre>
---

The test labeled "fcall" was the faster by 0.1838 seconds (it took 82.606% the time.)

The first test took 0.8729 seconds.
The second test took 1.0567 seconds.

Code
The first test, "fcall", was:
<pre>
/*
function do_something($i)
{
	for ($i = 0; $i < 20; $i++)
		$GLOBALS['dummy'] + $i;
}
*/

do_something(74);
</pre>
The second test, "call_user_func_array()", was:
<pre>

/*
function do_something($i)
{
	for ($i = 0; $i < 20; $i++)
		$GLOBALS['dummy'] + $i;
}
*/

call_user_func_array('do_something', array(74));

</pre>
---

The test labeled "fcall" was the faster by 0.0244 seconds (it took 97.646% the time.)

The first test took 1.0135 seconds.
The second test took 1.038 seconds.

Code
The first test, "fcall", was:
<pre>
/*
function do_something($i)
{
	for ($i = 0; $i < 20; $i++)
		$GLOBALS['dummy'] + $i;
}
*/

do_something(74);
</pre>
The second test, "callback", was:
<pre>

/*
function do_something($i)
{
	for ($i = 0; $i < 20; $i++)
		$GLOBALS['dummy'] + $i;
}
$GLOBALS['do_something_cb'] = 'do_something';
*/

$GLOBALS['do_something_cb'](74);

</pre>
---

The test labeled "callback" was the faster by 0.2743 seconds (it took 81.522% the time.)

The first test took 1.21 seconds.
The second test took 1.4843 seconds.

Code
The first test, "callback", was:
<pre>
if ($GLOBALS['dummy'] === 41)
    $cb = 'do_something1';
else
    $cb = 'do_something2';
$cb();
</pre>
The second test, "if", was:
<pre>

$v = 'do_something1';
if ($GLOBALS['dummy'] === 41)
    do_something1();
else
    do_something2();

</pre>
---

The test labeled "callback" was the faster by 0.0081 seconds (it took 98.461% the time.)

The first test took 0.5162 seconds.
The second test took 0.5242 seconds.

Code
The first test, "callback", was:
<pre>
if ($GLOBALS['dummy'] === 41)
    $cb = 'do_something1';
else
    $cb = 'do_something2';
$cb();
</pre>
The second test, "wrapped", was:
<pre>

/*
function do_something($type)
{
	if ($type === 'do_something1')
		do_something1();
	else
		do_something2();
}
*/

if ($GLOBALS['dummy'] == 41)
    $cb = 'do_something1';
else
    $cb = 'do_something2';
do_something($cb);

</pre>
---

The test labeled "callback" was the faster by 0.0755 seconds (it took 92.058% the time.)

The first test took 0.8752 seconds.
The second test took 0.9507 seconds.

Code
The first test, "callback", was:
<pre>
/*
function do_something($i)
{
	for ($i = 0; $i < 20; $i++)
		$GLOBALS['dummy'] + $i;
}
*/

$cb = 'do_something';
$cb(74);
</pre>
The second test, "call_user_func()", was:
<pre>

/*
function do_something($i)
{
	for ($i = 0; $i < 20; $i++)
		$GLOBALS['dummy'] + $i;
}
*/

$cb = 'do_something';
call_user_func($cb, 74);

</pre>
---

The test labeled "callback" was the faster by 0.0073 seconds (it took 99.302% the time.)

The first test took 1.0412 seconds.
The second test took 1.0485 seconds.

Code
The first test, "callback", was:
<pre>
if ($GLOBALS['dummy'] === 41)
    $cb = 'do_something1';
else
    $cb = 'do_something2';
$cb();
</pre>
The second test, "wrapped", was:
<pre>

/*
function do_something($type)
{
	if ($type === 'do_something1')
		do_something1();
	else
		do_something2();
}
*/

if ($GLOBALS['dummy'] == 41)
    $cb = 'do_something1';
else
    $cb = 'do_something2';
do_something($cb);

</pre>
---

The test labeled "method call" was the faster by 0.047 seconds (it took 94.966% the time.)

The first test took 0.9334 seconds.
The second test took 0.8865 seconds.

Code
The first test, "call_user_func()", was:
<pre>
/*
function do_something($i)
{
	for ($i = 0; $i < 20; $i++)
		$GLOBALS['dummy'] + $i;
}
*/

$cb = 'do_something';
call_user_func($cb, 74);
</pre>
The second test, "method call", was:
<pre>

/*
lass some_class
{
	function do_something($i)
	{
		for ($i = 0; $i < 20; $i++)
			$GLOBALS['dummy'] + $i;
	}
}
*/

$cb = 'do_something';
$GLOBALS['instance']->$cb(74);

</pre>
