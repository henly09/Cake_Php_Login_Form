<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * BillingFixture
 */
class BillingFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'billing';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'account' => 'Lorem ipsum dolor sit amet',
                'bill_name' => 'Lorem ipsum dolor sit amet',
                'issued' => '2023-07-28',
                'due_date' => '2023-07-28',
                'description' => 'Lorem ipsum dolor sit amet',
                'total' => 1,
            ],
        ];
        parent::init();
    }
}
