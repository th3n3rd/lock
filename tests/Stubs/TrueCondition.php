<?php
namespace BeatSwitch\Lock\Tests\Stubs;

use BeatSwitch\Lock\Contracts\Condition;
use BeatSwitch\Lock\Contracts\Resource;

class TrueCondition implements Condition
{
    /**
     * Assert if the condition is correct
     *
     * @param string $action
     * @param \BeatSwitch\Lock\Contracts\Resource|null $resource
     * @return bool
     */
    public function assert($action, Resource $resource = null)
    {
        return true;
    }
}
