<?php
class CraftConfigTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    public function testSomeFeature()
    {
        $plugin = \craft\commerce\Plugin::getInstance();

        $this->assertTrue($plugin instanceof \craft\commerce\Plugin);
        $this->assertTrue(Craft::$app instanceof \craft\web\Application);
        $this->assertTrue(true);
    }
}
