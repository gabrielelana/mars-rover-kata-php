<?php
namespace MarsRover;

use PHPUnit\Framework\TestCase;

class RoverTest extends TestCase
{
    public function testShallPass(): void
    {
        $this->assertNotNull(new Rover());
    }
}
