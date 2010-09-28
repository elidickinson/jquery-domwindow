<?php
// You've got to have PHP for this demo to work

// This page simulates a slow connection so you can see how jquery-domwindow deals with an iframe that takes a bit to load

$wait_for = 3;
print "Stalling for $wait_for seconds...";
sleep($wait_for);
print "done.\n";
print strftime("%a %r");