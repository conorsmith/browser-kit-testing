<?php

if (class_exists('PHPUnit_Framework_ExpectationFailedException')) {
    return;
}

class PHPUnit_Framework_ExpectationFailedException extends \PHPUnit\Framework\ExpectationFailedException
{
    //
}
