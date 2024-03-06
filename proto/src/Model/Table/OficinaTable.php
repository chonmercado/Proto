<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Oficina Model
 *
 * @method \App\Model\Entity\Oficina newEmptyEntity()
 * @method \App\Model\Entity\Oficina newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Oficina> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Oficina get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Oficina findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Oficina patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Oficina> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Oficina|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Oficina saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Oficina>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Oficina>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Oficina>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Oficina> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Oficina>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Oficina>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Oficina>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Oficina> deleteManyOrFail(iterable $entities, array $options = [])
 */
class OficinaTable extends Table
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

        $this->setTable('oficina');
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
            ->scalar('Propietario')
            ->maxLength('Propietario', 30)
            ->requirePresence('Propietario', 'create')
            ->notEmptyString('Propietario');

        return $validator;
    }
}
