The test labeled "if" was the faster by 0.0265 seconds (it took 97.381% the time.)

The first test took 0.9848 seconds.
The second test took 1.0113 seconds.

Code
The first test, "if", was:
<pre>
for ($i = 0; $i < 100; $i++)
{
    if ($GLOBALS['dummy_true'])
        $GLOBALS['dummy'] = 2;
    else
        $GLOBALS['dummy'] = 6;
}
</pre>
The second test, "ternary", was:
<pre>

for ($i = 0; $i < 100; $i++)
    $GLOBALS['dummy'] = $GLOBALS['dummy_true'] ? 2 : 6;

</pre>
---

The test labeled "if ($x && $y)" was the faster by 0.0171 seconds (it took 98.384% the time.)

The first test took 1.0571 seconds.
The second test took 1.04 seconds.

Code
The first test, "if ($x) if ($y)", was:
<pre>
for ($i = 0; $i < 100; $i++)
{
    if ($GLOBALS['dummy_false'] === false)
        if ($GLOBALS['dummy_true'] === true)
            $GLOBALS['dummy'] = 42;
}
</pre>
The second test, "if ($x && $y)", was:
<pre>

for ($i = 0; $i < 100; $i++)
{
    if ($GLOBALS['dummy_false'] === false && $GLOBALS['dummy_true'] === true)
        $GLOBALS['dummy'] = 42;
}

</pre>
---

The test labeled "if elseif else" was the faster by 0.0677 seconds (it took 91.953% the time.)

The first test took 0.7736 seconds.
The second test took 0.8413 seconds.

Code
The first test, "if elseif else", was:
<pre>
foreach ($GLOBALS['dummy'] as $v)
{
    if ($v == 2)
        $GLOBALS['dummy2'] = 1;
    elseif ($v == 5)
        $GLOBALS['dummy2'] = 2;
    elseif ($v == 1)
        $GLOBALS['dummy2'] = 3;
    elseif ($v == 3)
        $GLOBALS['dummy2'] = 4;
    elseif ($v == 0)
        $GLOBALS['dummy2'] = 5;
    else
        $GLOBALS['dummy2'] = 6;
}
</pre>
The second test, "switch", was:
<pre>

foreach ($GLOBALS['dummy'] as $v)
{
    switch ($v)
    {
        case 2:
            $GLOBALS['dummy2'] = 1;
            break;

        case 5:
            $GLOBALS['dummy2'] = 2;
            break;

        case 1:
            $GLOBALS['dummy2'] = 3;
            break;

        case 3:
            $GLOBALS['dummy2'] = 4;
            break;

        case 0:
            $GLOBALS['dummy2'] = 5;
            break;

        default:
            $GLOBALS['dummy2'] = 6;
    }
}

</pre>
