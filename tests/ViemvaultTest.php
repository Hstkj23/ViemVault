<?php
/**
 * Tests for ViemVault
 */

use PHPUnit\Framework\TestCase;
use Viemvault\Viemvault;

class ViemvaultTest extends TestCase {
    private Viemvault $instance;

    protected function setUp(): void {
        $this->instance = new Viemvault(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Viemvault::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
