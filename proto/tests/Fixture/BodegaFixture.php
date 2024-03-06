<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * BodegaFixture
 */
class BodegaFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'bodega';
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
                'Estado' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
