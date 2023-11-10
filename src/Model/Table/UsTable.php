<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Us Model
 *
 * @method \App\Model\Entity\U newEmptyEntity()
 * @method \App\Model\Entity\U newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\U> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\U get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\U findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\U patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\U> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\U|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\U saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\U>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\U>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\U>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\U> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\U>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\U>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\U>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\U> deleteManyOrFail(iterable $entities, array $options = [])
 */
class UsTable extends Table
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

        $this->setTable('us');
        $this->setDisplayField('nombre');
        $this->setPrimaryKey('id');
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
            ->scalar('nombre')
            ->maxLength('nombre', 30)
            ->requirePresence('nombre', 'create')
            ->notEmptyString('nombre');

        $validator
            ->scalar('usuario')
            ->maxLength('usuario', 30)
            ->requirePresence('usuario', 'create')
            ->notEmptyString('usuario');

        $validator
            ->scalar('password')
            ->maxLength('password', 30)
            ->requirePresence('password', 'create')
            ->notEmptyString('password');

        return $validator;
    }
}
