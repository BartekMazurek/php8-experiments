<?php

class TestException extends Exception
{

}

try {
    // some code...
    throw new TestException();

} catch (TestException) {
    echo "Ooops, something went wrong!" . PHP_EOL;
}
