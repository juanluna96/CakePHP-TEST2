<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MesasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MesasTable Test Case
 */
class MesasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MesasTable
     */
    protected $Mesas;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Mesas',
        'app.Meseros',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Mesas') ? [] : ['className' => MesasTable::class];
        $this->Mesas = TableRegistry::getTableLocator()->get('Mesas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Mesas);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
