<?php

/**
 * This is the model class for table "producto".
 *
 * The followings are the available columns in table 'producto':
 * @property integer $idProducto
 * @property integer $idProveedor
 * @property string $Descripcion
 * @property string $precioVenta
 * @property string $precioCompra
 * @property integer $stock
 * @property string $fechaVen
 *
 * The followings are the available model relations:
 * @property Proveedor $idProveedor0
 */
class Producto extends CActiveRecord
{
		public function listaProductos(){

		$dataProvider=new CActiveDataProvider('producto', array(
		    'pagination'=>array('pageSize'=>5),
		));

		return $dataProvider;
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'producto';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idProveedor, stock', 'numerical', 'integerOnly'=>true),
			array('Descripcion', 'length', 'max'=>150),
			array('precioVenta, precioCompra', 'length', 'max'=>8),
			array('fechaVen', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idProducto, idProveedor, Descripcion, precioVenta, precioCompra, stock, fechaVen', 'safe', 'on'=>'search'),
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
			'idProveedor0' => array(self::BELONGS_TO, 'Proveedor', 'idProveedor'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idProducto' => 'Id Producto',
			'idProveedor' => 'Id Proveedor',
			'Descripcion' => 'Descripcion',
			'precioVenta' => 'Precio Venta',
			'precioCompra' => 'Precio Compra',
			'stock' => 'Stock',
			'fechaVen' => 'Fecha Ven',
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

		$criteria->compare('idProducto',$this->idProducto);
		$criteria->compare('idProveedor',$this->idProveedor);
		$criteria->compare('Descripcion',$this->Descripcion,true);
		$criteria->compare('precioVenta',$this->precioVenta,true);
		$criteria->compare('precioCompra',$this->precioCompra,true);
		$criteria->compare('stock',$this->stock);
		$criteria->compare('fechaVen',$this->fechaVen,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Producto the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
