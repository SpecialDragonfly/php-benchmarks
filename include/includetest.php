The test labeled "require" was the faster by 0.026 seconds (it took 97.483% the time.)

The first test took 1.034 seconds.
The second test took 1.008 seconds.

Code
The first test, "include", was:
<pre>
clearstatcache();
include('supplement/dummy.inc');
</pre>
The second test, "require", was:
<pre>

clearstatcache();
require('supplement/dummy.inc');

</pre>
---

The test labeled "eval()" was the faster by 0.0889 seconds (it took 91.475% the time.)

The first test took 1.0424 seconds.
The second test took 0.9535 seconds.

Code
The first test, "include", was:
<pre>
clearstatcache();
include('supplement/dummy.inc');
</pre>
The second test, "eval()", was:
<pre>

clearstatcache();
eval('?' . '>' . file_get_contents('supplement/dummy.inc'));

</pre>
---

The test labeled "include_once" was the faster by 1.0604 seconds (it took 2.137% the time.)

The first test took 1.0836 seconds.
The second test took 0.0232 seconds.

Code
The first test, "include", was:
<pre>
clearstatcache();
include('supplement/dummy.inc');
</pre>
The second test, "include_once", was:
<pre>

clearstatcache();
include_once('supplement/dummy.inc');

</pre>
---

The test labeled "require" was the faster by 0.0121 seconds (it took 98.832% the time.)

The first test took 1.038 seconds.
The second test took 1.0259 seconds.

Code
The first test, "file_exists()", was:
<pre>
clearstatcache();

if (!file_exists('supplement/dummy.inc'))
    trigger_error('Required file not found!', E_USER_ERROR);
include('supplement/dummy.inc');
</pre>
The second test, "require", was:
<pre>

clearstatcache();
require('supplement/dummy.inc');

</pre>
---

The test labeled "function_exists()" was the faster by 0.5774 seconds (it took 24.988% the time.)

The first test took 0.7697 seconds.
The second test took 0.1923 seconds.

Code
The first test, "include_once", was:
<pre>
clearstatcache();

include_once('supplement/func1.inc');
</pre>
The second test, "function_exists()", was:
<pre>

clearstatcache();

if (!function_exists('f2'))
    include('supplement/func2.inc');

</pre>
