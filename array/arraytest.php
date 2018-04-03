<html>
    <head>
        <title>
            Array based PHP Benchmarks
        </title>
    </head>
    
    <body>
        <div class="test">
            The test labeled "integer" was the faster by 0.1694 seconds (it took 85.926%
            the time.) The first test took 1.0345 seconds. The second test took 1.204
            seconds. Code The first test, "integer", was:
            <pre>
                $GLOBALS['dummy_i'][42] = 1; $GLOBALS['dummy_i'][43] = 1; $GLOBALS['dummy2']
                = $GLOBALS['dummy_i'][42]; $GLOBALS['dummy2'] = $GLOBALS['dummy_i'][43];
                unset($GLOBALS['dummy_i'][42]); unset($GLOBALS['dummy_i'][43]);
            </pre>
            The second test, "string", was:
            <pre>
                $GLOBALS['dummy_s']['s42'] = 1; $GLOBALS['dummy_s']['s43'] = 1; $GLOBALS['dummy2']
                = $GLOBALS['dummy_s']['s42']; $GLOBALS['dummy2'] = $GLOBALS['dummy_s']['s43'];
                unset($GLOBALS['dummy_s']['s42']); unset($GLOBALS['dummy_s']['s43']);
            </pre>
        </div>
        <div class="separator">
            &nbsp;
        </div>
        <div class="test">
            The test labeled "$array[$n]" was the faster by 0.5571 seconds (it took
            44.36% the time.) The first test took 0.4442 seconds. The second test took
            1.0013 seconds. Code The first test, "$array[$n]", was:
            <pre>
                $array = array(); for ($i = 0; $i
                < 100; $i++) $array[$i]=$ i; 
            </pre>
            The second test, "${'array_' . $n}", was:
            <pre>
                for ($i = 0; $i
                < 100; $i++) ${ 'array_' . $i}=$ i; 
            </pre>
        </div>
        <div class="separator">
            &nbsp;
        </div>
        <div class="test">
            The test labeled "!isset()" was the faster by 0.9901 seconds (it took
            5.151% the time.) The first test took 0.0538 seconds. The second test took
            1.0439 seconds. Code The first test, "!isset()", was:
            <pre>
                $array = array(); for ($n = 0; $n
                < 8; $n++) for ($i=0 ; $i < 50; $i++) { if (!isset($array[$i])) $array[$i]=$
                i; } 
            </pre>
            The second test, "array_unique()", was:
            <pre>
                $array = array(); for ($n = 0; $n
                < 8; $n++) { for ($i=0 ; $i < 50; $i++) $array[]=$ i; } $array=a rray_unique($array);
            </pre>
        </div>
        <div class="separator">
            &nbsp;
        </div>
        <div class="test">
            The test labeled "$array[] =" was the faster by 0.5293 seconds (it took
            50.032% the time.) The first test took 1.0593 seconds. The second test
            took 0.53 seconds. Code The first test, "array_push()", was:
            <pre>
                $array = array(); for ($n = 0; $n
                < 8; $n++) { for ($i=0 ; $i < 50; $i++) array_push($array, $i); } 
            </pre>
            The second test, "$array[] =", was:
            <pre>
                $array = array(); for ($n = 0; $n
                < 8; $n++) { for ($i=0 ; $i < 50; $i++) $array[]=$ i; } 
            </pre>
        </div>
        <div class="separator">
            &nbsp;
        </div>
        <div class="test">
            The test labeled "list ($v) =" was the faster by 1.7274 seconds (it took
            34.547% the time.) The first test took 0.9118 seconds. The second test
            took 2.6392 seconds. Code The first test, "list ($v) =", was:
            <pre>
                list ($v) = $GLOBALS['array'];
            </pre>
            The second test, "$array[0]", was:
            <pre>
                $v = $GLOBALS['array'][0];
            </pre>
        </div>
        <div class="separator">
            &nbsp;
        </div>
        <div class="test">
            The test labeled "!isset()" was the faster by 0.015 seconds (it took 98.558%
            the time.) The first test took 1.043 seconds. The second test took 1.0279
            seconds. Code The first test, "set", was:
            <pre>
                $array = array(); for ($n = 0; $n
                < 100; $n++) { $k=f loor($n / 12); $array[$k]=$ n + 42; }
            </pre>
            The second test, "!isset()", was:
            <pre>
                $array = array(); for ($n = 0; $n
                < 100; $n++) { $k=f loor($n / 12); if (!isset($array[$k])) $array[$k]=$
                n + 42; } 
            </pre>
        </div>
        <div class="separator">
            &nbsp;
        </div>
        <div class="test">
            The test labeled "set" was the faster by 0.1898 seconds (it took 81.328%
            the time.) The first test took 0.8267 seconds. The second test took 1.0165
            seconds. Code The first test, "set", was:
            <pre>
                $array = array(); for ($n = 0; $n
                < 100; $n++) { $k=$ n; $array[$k]=$ n + 42; } </pre>
            The second test, "!isset()", was:
            <pre>
                $array = array(); for ($n = 0; $n
                < 100; $n++) { $k=$ n; if (!isset($array[$k])) $array[$k]=$ n + 42; }
            </pre>
        </div>
        <div class="separator">
            &nbsp;
        </div>
        <div class="test">
            The test labeled "==" was the faster by 0.9716 seconds (it took 4.09%
            the time.) The first test took 1.0131 seconds. The second test took 0.0414
            seconds. Code The first test, "array_diff()", was:
            <pre>
                for ($n = 0; $n
                < 20; $n++) $GLOBALS[ 'dummy2']=c ount(array_diff($GLOBALS[ 'dummy'],
                $GLOBALS[ 'dummy_pass'], $GLOBALS[ 'dummy_pass2']))===0 ; for ($n=0 ; $n
                < 20; $n++) $GLOBALS[ 'dummy2']=c ount(array_diff($GLOBALS[ 'dummy'], $GLOBALS[
                'dummy_fail'], $GLOBALS[ 'dummy_fail2']))===0 ; 
            </pre>
            The second test, "==", was:
            <pre>
                for ($n = 0; $n
                < 20; $n++) $GLOBALS[ 'dummy2']=$ GLOBALS[ 'dummy']==$ GLOBALS[
                'dummy_pass'] && $GLOBALS[ 'dummy']==$ GLOBALS[ 'dummy_pass2']; for ($n=0 ; $n < 20;
                $n++) $GLOBALS[ 'dummy2']=$ GLOBALS[ 'dummy']==$ GLOBALS[ 'dummy_fail']
                && $GLOBALS[ 'dummy']==$ GLOBALS[ 'dummy_fail2']; 
            </pre>
        </div>
        <div class="separator">
            &nbsp;
        </div>
        <div class="test">
            The test labeled "immediate" was the faster by 0.5715 seconds (it took
            49.317% the time.) The first test took 0.5561 seconds. The second test
            took 1.1277 seconds. Code The first test, "immediate", was:
            <pre>
                for ($i = 0; $i
                < 10; $i++) $GLOBALS[ 'dummy2']=a rray( 0=>
                'hello', 1 => 'good bye', 2 => 'thank you', 3 => 'sorry', );
            </pre>
            The second test, "later", was:
            <pre>
                for ($i = 0; $i
                < 10; $i++) { $GLOBALS[ 'dummy2']=a rray(); $GLOBALS[ 'dummy2'][0]='hello'
                ; $GLOBALS[ 'dummy2'][1]='good bye' ; $GLOBALS[ 'dummy2'][2]='thank you'
                ; $GLOBALS[ 'dummy2'][3]='sorry' ; } 
            </pre>
        </div>
        <div class="separator">
            &nbsp;
        </div>
        <div class="test">
            The test labeled "key" was the faster by 7.807 seconds (it took 5.114%
            the time.) The first test took 8.2278 seconds. The second test took 0.4208
            seconds. Code The first test, "in_array()", was:
            <pre>
                for ($i = 0; $i
                < 10; $i++) $GLOBALS[ 'dummy2']=i n_array($i * 20, $GLOBALS[ 'dummy']);
            </pre>
            The second test, "key", was:
            <pre>
                for ($i = 0; $i
                < 10; $i++) $GLOBALS[ 'dummy2']=i sset($GLOBALS[ 'dummy'][$i * 20]); 
            </pre>
        </div>
        <div class="separator">
            &nbsp;
        </div>
        <div class="test">
            The test labeled "array_keys(array_flip())" was the faster by 1.0507 seconds
            (it took 7.9% the time.) The first test took 0.0901 seconds. The second
            test took 1.1408 seconds. Code The first test, "array_keys(array_flip())",
            was:
            <pre>
                $array = array(); for ($n = 0; $n
                < 8; $n++) { for ($i=0 ; $i < 50; $i++) $array[]=$ i; } $array=a rray_keys(array_flip($array));
            </pre>
            The second test, "array_unique()", was:
            <pre>
                $array = array(); for ($n = 0; $n
                < 8; $n++) { for ($i=0 ; $i < 50; $i++) $array[]=$ i; } $array=a rray_unique($array);
            </pre>
        </div>
        <div class="separator">
            &nbsp;
        </div>
        <div class="test">
            The test labeled "array_keys(array_flip())" was the faster by 0.0197 seconds
            (it took 98.13% the time.) The first test took 1.0511 seconds. The second
            test took 1.0315 seconds. Code The first test, "array_flip(array_flip())",
            was:
            <pre>
                $array = array(); for ($n = 0; $n
                < 8; $n++) { for ($i=0 ; $i < 50; $i++) $array[]=$ i; } $array=a rray_flip(array_flip($array));
            </pre>
            The second test, "array_keys(array_flip())", was:
            <pre>
	            $array = array(); for ($n = 0; $n
                < 8; $n++) { for ($i=0 ; $i < 50; $i++) $array[]=$ i; } $array=a rray_keys(array_flip($array));
            </pre>
        </div>
        <div class="separator">
            &nbsp;
        </div>
        <div class="test">
            The test labeled "array_keys(array_flip())" was the faster by 0.3299 seconds
            (it took 68.203% the time.) The first test took 0.7077 seconds. The second
            test took 1.0376 seconds. Code The first test, "array_keys(array_flip())",
            was:
            <pre>
                $array = array(); for ($n = 0; $n
                < 8; $n++) { for ($i=0 ; $i < 50; $i++) $array[]=$ GLOBALS[ 'dummy'][$i];
                } $array=a rray_keys(array_flip($array)); 
            </pre>
            The second test, "array_unique()", was:
            <pre>
                $array = array(); for ($n = 0; $n
                < 8; $n++) { for ($i=0 ; $i < 50; $i++) $array[]=$ GLOBALS[ 'dummy'][$i];
                } $array=a rray_unique($array); 
            </pre>
        </div>
    </body>
</html>