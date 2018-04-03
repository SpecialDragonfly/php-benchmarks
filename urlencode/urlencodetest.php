The test labeled "urlencode()" was the faster by 0.2628 seconds (it took 77.423% the time.)

The first test took 0.9012 seconds.
The second test took 1.164 seconds.

Code
The first test, "urlencode()", was:
<pre>
$GLOBALS['dummy2'] = urlencode($GLOBALS['dummy']);
</pre>
The second test, "rawurlencode()", was:
<pre>

$GLOBALS['dummy2'] = rawurlencode($GLOBALS['dummy']);

</pre>
---

The test labeled "base64_encode()" was the faster by 0.054 seconds (it took 68.767% the time.)

The first test took 0.1728 seconds.
The second test took 0.1189 seconds.

Code
The first test, "urlencode()", was:
<pre>
$GLOBALS['dummy2'] = urlencode($GLOBALS['dummy']);
</pre>
The second test, "base64_encode()", was:
<pre>

$GLOBALS['dummy2'] = base64_encode($GLOBALS['dummy']);

</pre>
---

The test labeled "urldecode()" was the faster by 0.1504 seconds (it took 85.402% the time.)

The first test took 1.0302 seconds.
The second test took 0.8798 seconds.

Code
The first test, "urlencode()", was:
<pre>
$GLOBALS['dummy2'] = urlencode($GLOBALS['dummy']);
</pre>
The second test, "urldecode()", was:
<pre>

$GLOBALS['dummy2'] = urldecode($GLOBALS['dummy']);