<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BillingTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BillingTable Test Case
 */
class BillingTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\BillingTable
     */
    protected $Billing;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Billing',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Billing') ? [] : ['className' => BillingTable::class];
        $this->Billing = $this->getTableLocator()->get('Billing', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Billing);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\BillingTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
