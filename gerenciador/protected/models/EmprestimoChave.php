<?php

/**
 * This is the model class for table "emprestimo_chave".
 *
 * The followings are the available columns in table 'emprestimo_chave':
 * @property string $id
 * @property string $fk_chave
 * @property string $nome
 * @property string $matricula
 * @property string $horario_entrada
 * @property string $horario_entrega
 *
 * The followings are the available model relations:
 * @property Chave $fkChave
 */
class EmprestimoChave extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'emprestimo_chave';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fk_chave, nome, matricula', 'required'),
			array('fk_chave', 'length', 'max'=>20),
			array('nome', 'length', 'max'=>150),
			array('matricula', 'length', 'max'=>10),
			array('horario_entrega', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, fk_chave, nome, matricula, horario_entrada, horario_entrega', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'fkChave' => array(self::BELONGS_TO, 'Chave', 'fk_chave'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'fk_chave' => 'Chave',
			'nome' => 'Usuário',
			'matricula' => 'Matrícula',
			'horario_entrada' => 'Horario Entrada',
			'horario_entrega' => 'Horario Entrega',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id,true);
		$criteria->compare('fk_chave',$this->fk_chave,true);
		$criteria->compare('nome',$this->nome,true);
		$criteria->compare('matricula',$this->matricula,true);
		$criteria->compare('horario_entrada',$this->horario_entrada,true);
		$criteria->compare('horario_entrega',$this->horario_entrega,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return EmprestimoChave the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
