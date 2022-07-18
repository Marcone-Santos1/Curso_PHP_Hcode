<h1>Listar usuário</h1>
<?php 

function pularLinha(){
	echo "<br>";
}


$sql = "SELECT * FROM usuarios";

$res = $conn->query("$sql");

$qtd = $res->num_rows;

if ($qtd > 0) {

	echo "<table class='table table-hover table-striped table-bordered'>";

		echo "<tr>";

			echo "<th>#</th>";
			echo "<th>Nome</th>";
			echo "<th>E-mail</th>";
			echo "<th>Data de nascimento</th>";
			echo "<th>Ações</th>";

		echo "</tr>";

	while($row = $res->fetch_object()){

		echo "<tr>";

			echo "<td class='align-middle'>" .$row->id."</td>";
			echo "<td class='align-middle'>" .$row->nome."</td>";
			echo "<td class='align-middle'>" .$row->email."</td>";
			echo "<td class='align-middle'>" .$row->data_nascimento."</td>";
			echo "<td class='align-middle d-flex justify-content-center'>
				<button onclick=\"location.href='?page=editar&id=".$row->id."';\" class='btn btn-success'>
					Editar
				</button>
				<button class='btn btn-danger' onclick=\"if(confirm('Tem certeza que deseja Excluir?')){location.href='?page=salvar&acao=excluir&id=".$row->id."';} else{false;} ;\">
					Excluir
				</button>
			</td>";

		echo "</tr>";
		
	}

	echo "</table>";
} else {
	echo "<p class='alert alert-danger'>Não foi encontrado nenhum usuário...</p>";
}

?>