<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BodegaTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BodegaTable Test Case
 */
class BodegaTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\BodegaTable
     */
    protected $Bodega;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.Bodega',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Bodega') ? [] : ['className' => BodegaTable::class];
        $this->Bodega = $this->getTableLocator()->get('Bodega', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Bodega);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\BodegaTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
