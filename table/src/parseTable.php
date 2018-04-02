<?php
/**
 * Created by PhpStorm.
 * User: zhongzhiliang
 * Date: 2018/4/2
 * Time: 下午3:23
 */

namespace Table;


use Table\Contracts\htmlTableInterface;

class parseTable
{
    public function dispatch($command)
    {
        if ($this->isHtml($command)) {
            return $this->dispatchToHtml($command);
        }

        return $this->dispatchToDefault($command);

    }

    public function isHtml($command)
    {
        return $command instanceof htmlTableInterface;
    }

    public function dispatchToHtml($command)
    {
        echo 'html';
    }

    public function dispatchToDefault($command)
    {
        echo 'default';
    }
}