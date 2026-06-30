<?php
/**
 * Tests for MultiDrift
 */

use PHPUnit\Framework\TestCase;
use Multidrift\Multidrift;

class MultidriftTest extends TestCase {
    private Multidrift $instance;

    protected function setUp(): void {
        $this->instance = new Multidrift(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Multidrift::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
