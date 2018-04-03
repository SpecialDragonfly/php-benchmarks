The test labeled "foreach" was the faster by 0.6467 seconds (it took 47.008% the time.)

The first test took 1.2204 seconds.
The second test took 0.5737 seconds.

Code
The first test, "array_map()", was:
<pre>
/*
function foo($v)
{
return $v * 2;
}
*/

$array = array_map('foo', $GLOBALS['dummy']);
</pre>
The second test, "foreach", was:
<pre>

$array = array();
foreach ($GLOBALS['dummy'] as $k => $v)
$array[$k] = $v * 2;

</pre>
---

The test labeled "array_walk()" was the faster by 1.0459 seconds (it took 53.01% the time.)

The first test took 2.2257 seconds.
The second test took 1.1799 seconds.

Code
The first test, "array_map()", was:
<pre>
/*
function foo_map($v)
{
return $v + 1;
}
*/

$GLOBALS['dummy'] = array_map('foo_map', $GLOBALS['dummy']);
</pre>
The second test, "array_walk()", was:
<pre>

/*
function foo_walk(&$v)
{
$v = $v + 1;
}
*/

array_walk($GLOBALS['dummy'], 'foo_walk');

</pre>
---

The test labeled "array_walk_recursive()" was the faster by 0.2863 seconds (it took 73.834% the time.)

The first test took 1.0942 seconds.
The second test took 0.8079 seconds.

Code
The first test, "array_walk()", was:
<pre>
/*
function foo_manual(&$v)
{
if (is_array($v))
array_walk($v, 'foo_manual');
else
$v++;
}
*/

array_walk($GLOBALS['dummy'], 'foo_manual');
</pre>
The second test, "array_walk_recursive()", was:
<pre>

/*
function foo_auto(&$v)
{
$v++;
}
*/

array_walk_recursive($GLOBALS['dummy'], 'foo_auto');

</pre>

function build_query($count) : array
{
        $values = [];
        for ($i = 0; $i < $count; $i++) {
                $values['arg'.$i] = $i;
        }
        $hbq = http_build_query($values);
        $query = [];
        parse_str($hbq, $query);

        return $query;
}
$count = 1000;
$query = build_query($count);

echo "---------- Array Walk ---------- \n";
$start = microtime(true);
array_walk($query, function(&$value) { $value = is_numeric($value) ? (float)$value : $value;});
$end = microtime(true);
echo "Duration: ".($end - $start)."s taking ".($count/($end-$start))." calc/s\n";

echo "----------- Foreach ------------- \n";
$query = build_query($count);
$start = microtime(true);
foreach ($query as $k => $v) {
        $query[$k] = is_numeric($v) ? (float)$v : $v;
}
$end = microtime(true);
echo "Duration: ".($end - $start)."s taking ".($count/($end-$start))." calc/s\n";
