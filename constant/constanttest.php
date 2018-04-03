The test labeled "variables" was the faster by 0.1012 seconds (it took 88.257% the time.)

The first test took 0.8618 seconds.
The second test took 0.7606 seconds.

Code
The first test, "constants", was:
<pre>
$GLOBALS['test'] = CONSTANT + 1;
</pre>
The second test, "variables", was:
<pre>

$GLOBALS['test'] = $GLOBALS['CONSTANT'] + 1;

</pre>
---


The test labeled "isset()" was the faster by 0.2458 seconds (it took 73.271% the time.)

The first test took 0.9198 seconds.
The second test took 0.6739 seconds.

Code
The first test, "defined()", was:
<pre>
$GLOBALS['test'] = defined('CONSTANT');
</pre>
The second test, "isset()", was:
<pre>

$GLOBALS['test'] = isset($GLOBALS['CONSTANT']);

</pre>
---

The test labeled "!defined()" was the faster by 0.5536 seconds (it took 43.877% the time.)

The first test took 0.9863 seconds.
The second test took 0.4328 seconds.

Code
The first test, "@define()", was:
<pre>
@define('CONSTANT', $GLOBALS['dummy']);
</pre>
The second test, "!defined()", was:
<pre>

if (!defined('CONSTANT'))
define('CONSTANT', $GLOBALS['dummy']);

</pre>
