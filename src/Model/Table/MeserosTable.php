<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Meseros Model
 *
 * @method \App\Model\Entity\Mesero newEmptyEntity()
 * @method \App\Model\Entity\Mesero newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Mesero[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Mesero get($primaryKey, $options = [])
 * @method \App\Model\Entity\Mesero findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Mesero patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Mesero[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Mesero|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Mesero saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Mesero[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Mesero[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Mesero[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Mesero[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class MeserosTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('meseros');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
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
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('cedula')
            ->maxLength('cedula', 10)
            ->requirePresence('cedula', 'create')
            ->notEmptyString('cedula');

        $validator
            ->scalar('nombre')
            ->maxLength('nombre', 50)
            ->requirePresence('nombre', 'create')
            ->notEmptyString('nombre');

        $validator
            ->scalar('apellido')
            ->maxLength('apellido', 50)
            ->requirePresence('apellido', 'create')
            ->notEmptyString('apellido');

        $validator
            ->scalar('telefono')
            ->maxLength('telefono', 10)
            ->requirePresence('telefono', 'create')
            ->notEmptyString('telefono');

        return $validator;
    }
}
