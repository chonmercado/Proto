<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Oficina Entity
 *
 * @property int $Id
 * @property string $Serie
 * @property string $Modelo
 * @property string $Propietario
 */
class Oficina extends Entity
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
    protected array $_accessible = [
        'Serie' => true,
        'Modelo' => true,
        'Propietario' => true,
    ];
}
