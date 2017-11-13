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
}
