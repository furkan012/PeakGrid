<?php
/**
 * Tests for PeakGrid
 */

use PHPUnit\Framework\TestCase;
use Peakgrid\Peakgrid;

class PeakgridTest extends TestCase {
    private Peakgrid $instance;

    protected function setUp(): void {
        $this->instance = new Peakgrid(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Peakgrid::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
