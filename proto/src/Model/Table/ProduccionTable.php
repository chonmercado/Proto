<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Produccion Model
 *
 * @method \App\Model\Entity\Produccion newEmptyEntity()
 * @method \App\Model\Entity\Produccion newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Produccion> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Produccion get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Produccion findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Produccion patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Produccion> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Produccion|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Produccion saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Produccion>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Produccion>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Produccion>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Produccion> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Produccion>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Produccion>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Produccion>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Produccion> deleteManyOrFail(iterable $entities, array $options = [])
 */
class ProduccionTable extends Table
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

        $this->setTable('produccion');
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
            ->scalar('Area')
            ->maxLength('Area', 30)
            ->requirePresence('Area', 'create')
            ->notEmptyString('Area');

        $validator
            ->scalar('Linea')
            ->maxLength('Linea', 30)
            ->requirePresence('Linea', 'create')
            ->notEmptyString('Linea');

        return $validator;
    }
}
