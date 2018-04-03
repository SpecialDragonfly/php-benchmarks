The test labeled "commas" was the faster by 0.185 seconds (it took 82.693% the time.)

The first test took 0.8841 seconds.
The second test took 1.0692 seconds.

Code
The first test, "commas", was:
<pre>
echo $GLOBALS['x'], ' test ', $GLOBALS['y'], $GLOBALS['z'], ' test ';
ob_clean();
</pre>
The second test, "concat", was:
<pre>

echo $GLOBALS['x'] . ' test ' . $GLOBALS['y'] . $GLOBALS['z'] . ' test ';
ob_clean();

</pre>
---

The test labeled "commas" was the faster by 0.0657 seconds (it took 93.985% the time.)

The first test took 1.0263 seconds.
The second test took 1.092 seconds.

Code
The first test, "commas", was:
<pre>
echo $GLOBALS['x'], ' test ', $GLOBALS['y'], $GLOBALS['z'], ' test ';
ob_clean();
</pre>
The second test, "concat", was:
<pre>

echo $GLOBALS['x'] . ' test ' . $GLOBALS['y'] . $GLOBALS['z'] . ' test ';
ob_clean();

</pre>
---

The test labeled "commas" was the faster by 0.3 seconds (it took 75.281% the time.)

The first test took 0.9136 seconds.
The second test took 1.2136 seconds.

Code
The first test, "commas", was:
<pre>
echo $GLOBALS['x'], ' test ', $GLOBALS['y'], $GLOBALS['z'], ' test ';
ob_clean();
</pre>
The second test, "interpolation", was:
<pre>

echo "$GLOBALS[x] test $GLOBALS[y]$GLOBALS[z] test ";
ob_clean();

</pre>
---

The test labeled "commas" was the faster by 0.0428 seconds (it took 89.585% the time.)

The first test took 0.3679 seconds.
The second test took 0.4107 seconds.

Code
The first test, "commas", was:
<pre>
echo $GLOBALS['x'], ' test ', $GLOBALS['y'], $GLOBALS['z'], ' test ';
ob_clean();
</pre>
The second test, "interpolation", was:
<pre>

echo "$GLOBALS[x] test $GLOBALS[y]$GLOBALS[z] test ";
ob_clean();

</pre>
---

The test labeled "<?php ?>" was the faster by 0.0251 seconds (it took 97.379% the time.)

The first test took 0.957 seconds.
The second test took 0.9319 seconds.

Code
The first test, "echo", was:
<pre>
for ($j = 0; $j < 100; $j++)
echo 'some text';
ob_clean();
</pre>
The second test, "<?php ?>", was:
<pre>

for ($j = 0; $j < 100; $j++)
{
?>some text<?php
}
ob_clean();

</pre>
---

The test labeled "echo" was the faster by 0.0368 seconds (it took 96.36% the time.)

The first test took 0.975 seconds.
The second test took 1.0119 seconds.

Code
The first test, "echo", was:
<pre>
echo $GLOBALS['x'], ' test ', $GLOBALS['y'], $GLOBALS['z'], ' test ';
ob_clean();
</pre>
The second test, "<?php ?>", was:
<pre>

echo $GLOBALS['x']; ?> test <?php echo $GLOBALS['y'], $GLOBALS['z'];?> test <?php
ob_clean();

</pre>
---

The test labeled "commas" was the faster by 0.3735 seconds (it took 64.502% the time.)

The first test took 0.6787 seconds.
The second test took 1.0523 seconds.

Code
The first test, "commas", was:
<pre>
echo $GLOBALS['x'], ' test ', $GLOBALS['y'], $GLOBALS['z'], ' test ';
ob_clean();
</pre>
The second test, "sprintf()", was:
<pre>

echo sprintf('%s test %s%s test ', $GLOBALS['x'], $GLOBALS['y'], $GLOBALS['z']);
ob_clean();

</pre>
---

The test labeled "commas" was the faster by 0.3599 seconds (it took 63.628% the time.)

The first test took 0.6295 seconds.
The second test took 0.9894 seconds.

Code
The first test, "commas", was:
<pre>
echo $GLOBALS['x'], ' test ', $GLOBALS['y'], $GLOBALS['z'], ' test ';
ob_clean();
</pre>
The second test, "sprintf()", was:
<pre>

echo sprintf('%s test %s%s test ', $GLOBALS['x'], $GLOBALS['y'], $GLOBALS['z']);
ob_clean();

</pre>
