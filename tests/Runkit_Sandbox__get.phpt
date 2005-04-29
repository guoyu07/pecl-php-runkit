--TEST--
Runkit_Sandbox::__get() method
--SKIPIF--
<?php if(!extension_loaded("runkit")) print "skip"; 
      /* May not be available due to lack of TSRM interpreter support */
      if(!function_exists("runkit_lint")) print "skip"; ?>
--FILE--
<?php
$php = new Runkit_Sandbox();
$test = 123;
$php->eval('$test = 321;');
var_dump($php->test);
var_dump($test);
--EXPECT--
int(321)
int(123)
