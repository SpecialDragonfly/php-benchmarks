The test labeled "class" was the faster by 0.1977 seconds (it took 83.803% the time.)

The first test took 1.023 seconds.
The second test took 1.2207 seconds.

Code
The first test, "class", was:
<pre>
/*
class TestClass
{
var $x, $y, $z;
}
*/

$data = new TestClass();

$data->x = 'test';
$data->y = 1;
$data->z = 5.5;
</pre>
The second test, "arrays", was:
<pre>

$data = array(
'x' => null,
'y' => null,
'z' => null,
);

$data['x'] = 'test';
$data['y'] = 1;
$data['z'] = 5.5;

</pre>
---

The test labeled "classes" was the faster by 5.9634 seconds (it took 9.489% the time.)

The first test took 0.6252 seconds.
The second test took 6.5887 seconds.

Code
The first test, "classes", was:
<pre>
$name = 'TestClass' . $GLOBALS['i']++;
eval('
class ' . $name . '
{
var $x, $y, $z;
}

$data = new ' . $name . '();

$data->x = \'test\';
$data->y = 1;
$data->z = 5.5;');
</pre>
The second test, "arrays", was:
<pre>

$name = 'TestArray' . $GLOBALS['i']++;
eval('
$' . $name . ' = array(
\'x\' => null,
\'y\' => null,
\'z\' => null,
);

$' . $name . '[\'x\'] = \'test\';
$' . $name . '[\'y\'] = 1;
$' . $name . '[\'z\'] = 5.5;');

</pre>
---

The test labeled "arrays" was the faster by 0.0972 seconds (it took 89.667% the time.)

The first test took 0.9404 seconds.
The second test took 0.8433 seconds.

Code
The first test, "classes", was:
<pre>
/*
class Example
{
var $x;
}

function example_class($x)
{
$GLOBALS['dummy'] = $x->x;
}

$GLOBALS['test_object'] = new Example();
$GLOBALS['test_object']->x = 42;
*/

example_class($GLOBALS['test_object']);
</pre>
The second test, "arrays", was:
<pre>

/*
function example_array($x)
{
$GLOBALS['dummy'] = $x['x'];
}

$GLOBALS['test_array'] = array();
$GLOBALS['test_array']['x'] = 42;
*/

example_array($GLOBALS['test_array']);

</pre>
---

The test labeled "function" was the faster by 0.215 seconds (it took 79.654% the time.)

The first test took 1.0566 seconds.
The second test took 0.8416 seconds.

Code
The first test, "class method", was:
<pre>
/*
class Example
{
var $x;

function foo()
{
$this->x = 42;

return 42;
}
}
*/

$test = new Example();

for ($i = 0; $i < 100; $i++)
$GLOBALS['dummy'] = $test->foo();
</pre>
The second test, "function", was:
<pre>

/*
function example_foo(&$array)
{
$array['x'] = 42;

return 42;
}
*/

$test = array();

for ($i = 0; $i < 100; $i++)
$GLOBALS['dummy'] = example_foo($test);

</pre>
