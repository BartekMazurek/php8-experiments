<?php

// GET OPCACHE STATUS INFO
// var_dump(opcache_get_status());

// CHECK IF JIT IS SETUP CORRECTLY
var_dump(opcache_get_status()['jit']);