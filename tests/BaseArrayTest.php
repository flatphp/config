<?php
use Flatphp\Config\BaseArray;

class BaseArrayTest extends PHPUnit_Framework_TestCase
{
    public function testSetArray()
    {
        BaseArray::set(['hello' => 'world']);
        $this->assertTrue(BaseArray::has('hello'));
        $this->assertEquals('world', BaseArray::get('hello'));
    }

    public function testSetKV()
    {
        BaseArray::set('test', ['hello' => 'world']);
        $this->assertTrue(BaseArray::has('test'));
        $this->assertEquals('world', BaseArray::get('test')['hello']);
    }
}
