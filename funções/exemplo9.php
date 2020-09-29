<?php

$hierarquia = array(

	array(
		'nome_cargo'=>'CEO',
		'subordinados'=>array(
			//Início: Diretor comercial
			array(
				'nome_cargo'=>'Diretor comercial',
				'subordinados'=>array(
					//Início: Gerente de Vendas
					array(
						'nome_cargo'=>'Gerente de vendas'
					)
					//Termino: Gerente de Vendas
				)

			),
			//Término: Diretor comercial
			//Início: Diretor financeiro
			array(
				'nome_cargo'=>'Diretor financeiro',
				'subordinados'=>array(
					//inicio gerente de contas a pagar
					array(
						'nome_cargo'=>'Gerente de contas a pagar',
						'subordinados'=>array(
							//inicio: Supervisor de pagamentos
							array(
								'nome_cargo'=>'Gerente de pagamentos'
							)
							//termino: Supervior de pagamentos
						)
					),
					//termino gerente de contas a pagar
					//inicio: Gerente de compras
					array(
						'nome_cargo'=>'Gerente de compras',
						'subordinados'=>array(
							//Início: SUpervisor de suprimentos
							array(
								'nome_cargo'=>'Supervisor de suprimentos',
								'subordinados'=>array(

									array(
										'nome_cargo'=>'Outro Supervisor de suprimentos'

									)


								)
							)
							//Término: Supervisor de suprimentos

						)

					)
					//termino gerente de compras

				)
			)
			//Término: Diretor financeiro
		)
	)
);

function exibe($cargos){

	$html ='<ul>';

	foreach ($cargos as $cargo) {
		
		$html .= "<li>";

		$html .= $cargo['nome_cargo'];

		if (isset($cargo['subordinados']) && count($cargo['subordinados']) > 0) {


			$html .= exibe($cargo['subordinados']);
		}

		$html .= "</li>";
	}


	$html .= "</ul>";

	return $html;

}

echo exibe($hierarquia);

?>