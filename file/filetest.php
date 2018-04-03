The test labeled "file_get_contents()" was the faster by 0.4566 seconds (it took 54.091% the time.)

The first test took 0.9947 seconds.
The second test took 0.538 seconds.

Code
The first test, "file()", was:
<pre>
implode('', file('supplement/dummy.inc'));
</pre>
The second test, "file_get_contents()", was:
<pre>

file_get_contents('supplement/dummy.inc');

</pre>
---

The test labeled "file_get_contents()" was the faster by 0.199 seconds (it took 79.978% the time.)

The first test took 0.9937 seconds.
The second test took 0.7948 seconds.

Code
The first test, "file()", was:
<pre>
$lines = file('supplement/dummy.inc');
foreach ($lines as $line)
    $GLOBALS['dummy2'] = rtrim($line);
</pre>
The second test, "file_get_contents()", was:
<pre>

$lines = explode("\n", str_replace(array("\r\n", "\r"), "\n", file_get_contents('supplement/dummy.inc')));
foreach ($lines as $line)
    $GLOBALS['dummy2'] = $line;

</pre>
---

The test labeled "file_get_contents()" was the faster by 0.199 seconds (it took 79.978% the time.)

The first test took 0.9937 seconds.
The second test took 0.7948 seconds.

Code
The first test, "file()", was:
<pre>
$lines = file('supplement/dummy.inc');
foreach ($lines as $line)
    $GLOBALS['dummy2'] = rtrim($line);
</pre>
The second test, "file_get_contents()", was:
<pre>

$lines = explode("\n", str_replace(array("\r\n", "\r"), "\n", file_get_contents('supplement/dummy.inc')));
foreach ($lines as $line)
    $GLOBALS['dummy2'] = $line;

</pre>
---

The test labeled "file()" was the faster by 0.2893 seconds (it took 71.565% the time.)

The first test took 0.728 seconds.
The second test took 1.0172 seconds.

Code
The first test, "file()", was:
<pre>
$lines = file('supplement/dummy.inc');
foreach ($lines as $line)
    $GLOBALS['dummy2'] = rtrim($line);
</pre>
The second test, "fgets()", was:
<pre>

$fp = fopen('supplement/dummy.inc', 'rt');
while (!feof($fp))
    $GLOBALS['dummy2'] = rtrim(fgets($fp));
fclose($fp);

</pre>
