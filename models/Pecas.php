<?php 

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

/** 
 * This is the model class for table "pecas".
 *
 *
 * @property int $id
 * @property string $nome
 * @property string|null $descricao
 * @property float $preco
 * @property int $quantidade_estoque
 * @property string $created_at
 * @property string $updated_at
 */
class Pecas extends ActiveRecord
{
    public static function tableName()
    {
        return 'pecas';
    }

    public function rules()
    {
        return [
            [['nome', 'preco', 'quantidade_estoque'], 'required'],
            [['descricao'], 'string'],
            [['preco'], 'number'],
            [['quantidade_estoque'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['nome'], 'string', 'max' => 255],
        ];   
    }

    public function atttributeLabels()
    {
        return [
            'id' => 'ID',
            'nome' => 'Nome',
            'descricao' => 'Descricao',
            'preco' => 'Preço',
            'quantidade_estoque' => 'Quantidade em Estoque',
            'created_at' => 'Criado em',
            'updated_at' => 'Atualizado em',
        ];
    }
}