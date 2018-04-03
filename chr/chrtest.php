The test labeled "chr()" was the faster by 0.2866 seconds (it took 76.795% the time.)

The first test took 0.9486 seconds.
The second test took 1.2352 seconds.

Code
The first test, "chr()", was:
<pre>
$GLOBALS['dummy'] = chr(65);
</pre>
The second test, "literal", was:
<pre>

$GLOBALS['dummy'] = 'A';

</pre>
---
The test labeled "pack()" was the faster by 0.2328 seconds (it took 75.708% the time.)

The first test took 0.9584 seconds.
The second test took 0.7256 seconds.

Code
The first test, "chr()", was:
<pre>
$GLOBALS['dummy'] = chr(65) . chr(65) . chr(65) . chr(65);
</pre>
The second test, "pack()", was:
<pre>

$GLOBALS['dummy'] = pack('C4', 65, 65, 65, 65);

</pre>
---

The test labeled "unpack()" was the faster by 0.3298 seconds (it took 68.403% the time.)

The first test took 1.0438 seconds.
The second test took 0.714 seconds.

Code
The first test, "ord()", was:
<pre>
$GLOBALS['dummy'] = array(
'a' => ord($GLOBALS['packed']{0}),
'b' => ord($GLOBALS['packed']{1}),
'c' => ord($GLOBALS['packed']{2}),
'd' => ord($GLOBALS['packed']{3}),
);
</pre>
The second test, "unpack()", was:
<pre>

$GLOBALS['dummy'] = unpack('Ca/Cb/Cc/Cd', $GLOBALS['packed']);

</pre>
---

The test labeled "unpack()" was the faster by 0.0681 seconds (it took 92.979% the time.)

The first test took 0.9705 seconds.
The second test took 0.9024 seconds.

Code
The first test, "ord()", was:
<pre>
$GLOBALS['dummy'] = array(
0 => ord($GLOBALS['packed']{0}),
1 => ord($GLOBALS['packed']{1}),
2 => ord($GLOBALS['packed']{2}),
3 => ord($GLOBALS['packed']{3}),
);
</pre>
The second test, "unpack()", was:
<pre>

$GLOBALS['dummy'] = unpack('C4', $GLOBALS['packed']);

</pre>
---

The test labeled "pack()" was the faster by 0.1256 seconds (it took 88.33% the time.)

The first test took 0.9507 seconds.
The second test took 1.0763 seconds.

Code
The first test, "pack()", was:
<pre>
$GLOBALS['dummy'] = pack('C4', 65, 65, 65, 65);
</pre>
The second test, "sprintf()", was:
<pre>

$GLOBALS['dummy'] = sprintf('%c%c%c%c', 65, 65, 65, 65);

</pre>
