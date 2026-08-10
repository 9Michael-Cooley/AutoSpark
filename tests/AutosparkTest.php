<?php
/**
 * Tests for AutoSpark
 */

use PHPUnit\Framework\TestCase;
use Autospark\Autospark;

class AutosparkTest extends TestCase {
    private Autospark $instance;

    protected function setUp(): void {
        $this->instance = new Autospark(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Autospark::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
