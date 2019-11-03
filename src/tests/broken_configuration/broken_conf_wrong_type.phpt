--TEST--
Broken conf with wrong type
--SKIPIF--
<?php if (!extension_loaded("snuffleupagus")) die "skip"; ?>
--INI--
sp.configuration_file={PWD}/config/broken_conf_wrong_type.ini
--FILE--
--EXPECTF--
PHP Fatal error:  [snuffleupagus][0.0.0.0][error] .ret_type() is expecting a valid php type ('false', 'true', 'array'. 'object', 'long', 'double', 'null', 'resource', 'reference', 'undef') on line 5 in Unknown on line 0

Fatal error: [snuffleupagus][0.0.0.0][error] .ret_type() is expecting a valid php type ('false', 'true', 'array'. 'object', 'long', 'double', 'null', 'resource', 'reference', 'undef') on line 5 in Unknown on line 0

Fatal error: [snuffleupagus][0.0.0.0][config] Invalid configuration file in Unknown on line 0
Could not startup.