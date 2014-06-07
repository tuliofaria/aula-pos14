<?
	class Aluno extends AppModel{

		public $order = "Aluno.nome ASC";

		public $belongsTo = array("Cidade");

		public $validate = array(
			'nome'=>'notEmpty',
			'email' => array(
				'validarEmail' =>array(
					'rule'=>'email',
					'message'=>'Informe um e-mail válido.'
				)
			)

		);

	}