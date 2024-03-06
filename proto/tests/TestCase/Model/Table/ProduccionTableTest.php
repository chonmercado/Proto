<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProduccionTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProduccionTable Test Case
 */
class ProduccionTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProduccionTable
     */
    protected $Produccion;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.Produccion',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Produccion') ? [] : ['className' => ProduccionTable::class];
        $this->Produccion = $this->getTableLocator()->get('Produccion', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Produccion);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ProduccionTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
