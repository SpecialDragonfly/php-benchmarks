The test labeled "strpos()" was the faster by 0.1807 seconds (it took 81.356% the time.)

The first test took 0.9694 seconds.
The second test took 0.7887 seconds.

Code
The first test, "strstr()", was:
<pre>
for ($j = 0; $j < 100; $j++)
    $GLOBALS['dummy2'] = strstr($GLOBALS['dummy'], '3456') != '';
</pre>
The second test, "strpos()", was:
<pre>

for ($j = 0; $j < 100; $j++)
    $GLOBALS['dummy2'] = strpos($GLOBALS['dummy'], '3456') !== false;

</pre>
---

The test labeled "strncmp()" was the faster by 0.2293 seconds (it took 75.723% the time.)

The first test took 0.7151 seconds.
The second test took 0.9444 seconds.

Code
The first test, "strncmp()", was:
<pre>
for ($j = 0; $j < 40; $j++)
    $GLOBALS['dummy'] = strncmp($GLOBALS['dummy_match'], '01234', 5) === 0;
for ($j = 0; $j < 40; $j++)
    $GLOBALS['dummy'] = strncmp($GLOBALS['dummy_fail'], '01234', 5) === 0;
</pre>
The second test, "strpos()", was:
<pre>

for ($j = 0; $j < 40; $j++)
    $GLOBALS['dummy'] = strpos($GLOBALS['dummy_match'], '01234') === 0;
for ($j = 0; $j < 40; $j++)
    $GLOBALS['dummy'] = strpos($GLOBALS['dummy_fail'], '01234') === 0;

</pre>
---

The test labeled "strpos()" was the faster by 0.0517 seconds (it took 94.639% the time.)

The first test took 0.9637 seconds.
The second test took 0.9121 seconds.

Code
The first test, "strncmp()", was:
<pre>
for ($j = 0; $j < 40; $j++)
    $GLOBALS['dummy'] = strncmp($GLOBALS['dummy_match'], '01234', 5) === 0;
for ($j = 0; $j < 40; $j++)
    $GLOBALS['dummy'] = strncmp($GLOBALS['dummy_fail'], '01234', 5) === 0;
</pre>
The second test, "strpos()", was:
<pre>

for ($j = 0; $j < 40; $j++)
    $GLOBALS['dummy'] = strpos($GLOBALS['dummy_match'], '01234') === 0;
for ($j = 0; $j < 40; $j++)
    $GLOBALS['dummy'] = strpos($GLOBALS['dummy_fail'], '01234') === 0;

</pre>
---

The test labeled "substr()" was the faster by 0.107 seconds (it took 86.127% the time.)

The first test took 0.6642 seconds.
The second test took 0.7712 seconds.

Code
The first test, "substr()", was:
<pre>
for ($j = 0; $j < 40; $j++)
    $GLOBALS['dummy'] = substr($GLOBALS['dummy_match'], 0, 5) === '01234';
for ($j = 0; $j < 40; $j++)
    $GLOBALS['dummy'] = substr($GLOBALS['dummy_fail'], 0, 5) === '01234';
</pre>
The second test, "strpos()", was:
<pre>

for ($j = 0; $j < 40; $j++)
    $GLOBALS['dummy'] = strpos($GLOBALS['dummy_match'], '01234') === 0;
for ($j = 0; $j < 40; $j++)
    $GLOBALS['dummy'] = strpos($GLOBALS['dummy_fail'], '01234') === 0;

</pre>
---

The test labeled "strpos()" was the faster by 0.0524 seconds (it took 94.024% the time.)

The first test took 0.8763 seconds.
The second test took 0.8239 seconds.

Code
The first test, "substr()", was:
<pre>
for ($j = 0; $j < 40; $j++)
    $GLOBALS['dummy'] = substr($GLOBALS['dummy_match'], 0, 5) === '01234';
for ($j = 0; $j < 40; $j++)
    $GLOBALS['dummy'] = substr($GLOBALS['dummy_fail'], 0, 5) === '01234';
</pre>
The second test, "strpos()", was:
<pre>

for ($j = 0; $j < 40; $j++)
    $GLOBALS['dummy'] = strpos($GLOBALS['dummy_match'], '01234') === 0;
for ($j = 0; $j < 40; $j++)
    $GLOBALS['dummy'] = strpos($GLOBALS['dummy_fail'], '01234') === 0;

</pre>
---

The test labeled "strpos()/strtolower()" was the faster by 0.0088 seconds (it took 99.108% the time.)

The first test took 0.9745 seconds.
The second test took 0.9833 seconds.

Code
The first test, "strpos()/strtolower()", was:
<pre>
for ($j = 0; $j < 40; $j++)
    $GLOBALS['dummy'] = strpos(strtolower($GLOBALS['dummy_match']), '9abcd') === 5;
for ($j = 0; $j < 40; $j++)
    $GLOBALS['dummy'] = strpos(strtolower($GLOBALS['dummy_fail']), '9abcd') === 5;
</pre>
The second test, "stripos()", was:
<pre>

for ($j = 0; $j < 40; $j++)
    $GLOBALS['dummy'] = stripos($GLOBALS['dummy_match'], '9abcd') === 5;
for ($j = 0; $j < 40; $j++)
    $GLOBALS['dummy'] = stripos($GLOBALS['dummy_fail'], '9abcd') === 5;

</pre>
