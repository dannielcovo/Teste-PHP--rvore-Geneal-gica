<?php

$avos = '[
	{"id":"1", "nome": "Anselmo"},
	{"id":"2", "nome": "Joao"},
	{"id":"3", "nome": "Antonio"}
]';

$pais = '[
	{"id":"7", "nome": "Flavio", "avo_id": "2"},
	{"id":"2", "nome": "George", "avo_id": "1"},
	{"id":"3", "nome": "Marcio", "avo_id": "1"},
	{"id":"1", "nome": "Marcos", "avo_id": "1"},
	{"id":"4", "nome": "Maria",  "avo_id": "2"},
	{"id":"6", "nome": "Joao", 	 "avo_id": "2"},
	{"id":"5", "nome": "Jose",   "avo_id": "2"},
	{"id":"8", "nome": "Julia",  "avo_id": "3"}
]';

$filhos = '[
	{"id":"10", "nome": "Flavio"},
	{"id":"5", "nome": "Georgia"},
	{"id":"3", "nome": "Marcia"},
	{"id":"14", "nome": "Marta"},
	{"id":"13", "nome": "Mario"},
	{"id":"15", "nome": "Joana"},
	{"id":"9", "nome": "Jose"},
	{"id":"7", "nome": "Julia"}
]';


$array_pais = json_decode ($pais, true);
$array_filhos = json_decode ($filhos, true);
if($_POST){

	try{
		if(!empty($_POST)){
				if($_POST['type'] =='pais'){
					$new_array = [];
					$avoIdade;
					foreach ($array_pais as $k => $val){
						if($val['avo_id'] == $_POST['id']){
							$avoIdade = $val['avo_id'];
							$new_array[] = $array_pais[$k];
						}
					}
					echo json_encode (["type" => 'Pais', 'data' => $new_array]);
					exit;
				}else {
					$filhosIds = $_POST['ids'];

					$nA = [];
					foreach ($filhosIds as $k => $val){
						$nA[] = $val;
					}
					$count = array_sum($nA);
					$new_arrayFilhos = [];
					foreach ($array_filhos as $k => $val){
						if($val['id'] == $count){
							$new_arrayFilhos[] = $array_filhos[$k];
						}
					}
					echo json_encode (["type" => 'Filhos', 'data' => $new_arrayFilhos]);
					exit;

				}
		}

	} catch (Exception $e) {
		echo $e->getMessage ();
	}
}




?>