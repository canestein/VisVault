<?php
/**
 * Tests for VisVault
 */

use PHPUnit\Framework\TestCase;
use Visvault\Visvault;

class VisvaultTest extends TestCase {
    private Visvault $instance;

    protected function setUp(): void {
        $this->instance = new Visvault(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Visvault::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
