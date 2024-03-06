<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Bodega Model
 *
 * @method \App\Model\Entity\Bodega newEmptyEntity()
 * @method \App\Model\Entity\Bodega newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Bodega> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Bodega get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Bodega findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Bodega patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Bodega> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Bodega|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Bodega saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Bodega>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Bodega>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Bodega>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Bodega> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Bodega>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Bodega>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Bodega>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Bodega> deleteManyOrFail(iterable $entities, array $options = [])
 */
class BodegaTable extends Table
{
    /**
     * Initialize method
     *
     * @param array<string, mixed> $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('bodega');
        $this->setDisplayField('Serie');
        $this->setPrimaryKey('Id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('Serie')
            ->maxLength('Serie', 30)
            ->requirePresence('Serie', 'create')
            ->notEmptyString('Serie');

        $validator
            ->scalar('Modelo')
            ->maxLength('Modelo', 30)
            ->requirePresence('Modelo', 'create')
            ->notEmptyString('Modelo');

        $validator
            ->scalar('Estado')
            ->maxLength('Estado', 30)
            ->requirePresence('Estado', 'create')
            ->notEmptyString('Estado');

        return $validator;
    }
}
