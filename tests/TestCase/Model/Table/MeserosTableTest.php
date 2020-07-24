<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MeserosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MeserosTable Test Case
 */
class MeserosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MeserosTable
     */
    protected $Meseros;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
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
        $config = TableRegistry::getTableLocator()->exists('Meseros') ? [] : ['className' => MeserosTable::class];
        $this->Meseros = TableRegistry::getTableLocator()->get('Meseros', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Meseros);

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
}
