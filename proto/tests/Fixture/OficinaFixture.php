<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * OficinaFixture
 */
class OficinaFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'oficina';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'Id' => 1,
                'Serie' => 'Lorem ipsum dolor sit amet',
                'Modelo' => 'Lorem ipsum dolor sit amet',
                'Propietario' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
