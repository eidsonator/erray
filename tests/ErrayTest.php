<?php
/**
 * Created by PhpStorm.
 * User: todd
 * Date: 12/11/17
 * Time: 9:05 PM
 */

class ErrayTest extends \PHPUnit\Framework\TestCase
{
    public function testCanCount()
    {
        $erray = new \Eidsonator\Erray\Erray(['string']);
        $count = $erray->count();
        $this->assertEquals(1, $count);
    }

    public function testArrayAccess()
    {
        $erray = new \Eidsonator\Erray\Erray(['string']);
        $this->assertEquals('string', $erray[0]);
    }

    public function testCanIterate()
    {
        $erray = new \Eidsonator\Erray\Erray([0, 1, 2]);
        $i = 0;
        foreach ($erray as $item) {
               $this->assertEquals($i, $item);
               ++$i;
        }
    }
}
