<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OficinaTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OficinaTable Test Case
 */
class OficinaTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\OficinaTable
     */
    protected $Oficina;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.Oficina',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Oficina') ? [] : ['className' => OficinaTable::class];
        $this->Oficina = $this->getTableLocator()->get('Oficina', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Oficina);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\OficinaTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
