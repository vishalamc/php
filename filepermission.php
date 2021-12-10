<?php

$filename = 'simplefile.txt';

$functions = [
	'is_readable',
	'is_writable',
	'is_executable'
];

foreach ($functions as $f) {
	echo $f($filename) ? 'The file ' . $filename . $f : '';
}