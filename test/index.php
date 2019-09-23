<?php

use PHPUnit\Framework\TestCase;

require('../index.php'); //what file we're testing

class IndexTest extends TestCase{

    public function testStringPassword(){
        $str = 'password';
        $result = checkForString($str); //test performed
        $this->assertEquals($result, true); //expected result

    }

    public function testStringHash(){
        $str = '8mipDOae56';
        $result = checkForString($str); //test performed
        $this->assertEquals($result, true); //expected result

    }
}