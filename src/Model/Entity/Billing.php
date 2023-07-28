<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Billing Entity
 *
 * @property int $id
 * @property string $account
 * @property string $bill_name
 * @property \Cake\I18n\FrozenDate $issued
 * @property \Cake\I18n\FrozenDate $due_date
 * @property string $description
 * @property int $total
 */
class Billing extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'account' => true,
        'bill_name' => true,
        'issued' => true,
        'due_date' => true,
        'description' => true,
        'total' => true,
    ];
}
