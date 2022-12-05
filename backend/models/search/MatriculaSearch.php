<?php

namespace backend\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Matricula;

/**
 * MatriculaSearch represents the model behind the search form of `backend\models\Matricula`.
 */
class MatriculaSearch extends Matricula
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'idCiclo', 'idAlumno', 'idSemestre'], 'integer'],
            [['grupo'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Matricula::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'idCiclo' => $this->idCiclo,
            'idAlumno' => $this->idAlumno,
            'idSemestre' => $this->idSemestre,
        ]);

        $query->andFilterWhere(['like', 'grupo', $this->grupo]);

        return $dataProvider;
    }
}
