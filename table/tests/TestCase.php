<?php
/**
 * Created by PhpStorm.
 * User: zhongzhiliang
 * Date: 2018/4/2
 * Time: 下午3:55
 */

namespace Test;


use Table\Contracts\htmlTableInterface;

class TestCase extends  \PHPUnit\Framework\TestCase
{
    public function testBaseTest()
    {
        $this->assertTrue(true);
    }

    public function testHtml()
    {
        $table = new htmlTable();

        $this->assertInstanceOf(htmlTableInterface::class, $table);
    }
}