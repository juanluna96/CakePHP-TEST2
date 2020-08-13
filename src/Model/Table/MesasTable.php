<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\ORM\Rule\IsUnique;

/**
 * Mesas Model
 *
 * @property \App\Model\Table\MeserosTable&\Cake\ORM\Association\BelongsTo $Meseros
 *
 * @method \App\Model\Entity\Mesa newEmptyEntity()
 * @method \App\Model\Entity\Mesa newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Mesa[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Mesa get($primaryKey, $options = [])
 * @method \App\Model\Entity\Mesa findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Mesa patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Mesa[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Mesa|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Mesa saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Mesa[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Mesa[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Mesa[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Mesa[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class MesasTable extends Table
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

        $this->setTable('mesas');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Meseros', [
            'foreignKey' => 'mesero_id',
            'joinType' => 'INNER',
        ]);
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
        ->integer('codigo')
        ->requirePresence('codigo', 'create')
        ->notEmptyString('codigo');
        

        $validator
        ->integer('puestos')
            //->requirePresence('puestos', 'create')
        ->notEmptyString('puestos');

        $validator
        ->scalar('posicion')
        ->maxLength('posicion', 100)
            //->requirePresence('posicion', 'create')
        ->notEmptyString('posicion');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn(['mesero_id'], 'Meseros'));
        $rules->add($rules->isUnique(['codigo'], 'Este numero ya se encuentra registrado en la base de datos.'));
        return $rules;
    }
}