<?php  

switch ($_REQUEST["acao"]) {
	
	case 'cadastrar':

		if(isset ($_POST['nome']) || isset($_POST['email']) || isset($_POST['senha']) || isset ($_POST['data_nasc'])){

			// é interessante deixar esses ifs por conta de uma pessoa tirar o required no f12 do browser 

		    if (strlen($_POST['email']) == 0) {
		        echo "<p style=\"color: red;\">Preencha seu Email...</p>";
		        header("refresh:2; ?page=novo");
		    }
		    if (strlen($_POST['nome']) == 0) {
		        echo "<p style=\"color: red;\">Preencha seu nome...</p>";
		        header("refresh:2; ?page=novo");
		    } 
		    if (strlen($_POST['senha']) == 0) {
		        echo "<p style=\"color: red;\">Preencha sua senha...</p>";
		        header("refresh:2; ?page=novo");
		    } 
		    if (strlen($_POST['data_nasc']) == 0) {
		        echo "<p style=\"color: red;\">Preencha sua data de nascimento...</p>";
		        header("refresh:2; ?page=novo");
		    } 

		    else {

				$nome = $_POST['nome'];
				$email = $_POST['email'];
				$senha = $_POST['senha'];
				$data_nasc = $_POST['data_nasc'];

				$sql = "INSERT INTO usuarios (nome, email, senha, data_nascimento) VALUES ('{$nome}', '{$email}', '{$senha}', '{$data_nasc}')";
				$res = $conn->query($sql) or die("<p style='color: red';>Falha na execução do código SQL: </p>". $conn->error);

				if ($res == true) {
					echo "<script>alert('Cadastro efetuado com sucesso!');</script>";
					header("refresh:1; ?page=listar");
				}
			}
		}

		break;

	case 'editar':

		$nome = $_POST['nome'];
		$email = $_POST['email'];
		$senha = $_POST['senha'];
		$data_nasc = $_POST['data_nasc'];

		$sql = "UPDATE usuarios SET nome='{$nome}', email='{$email}', senha='{$senha}', data_nascimento='{$data_nasc}' WHERE id=".$_REQUEST['id'];
		$res = $conn->query($sql) or die("<p style='color: red';>Falha na execução do código SQL: </p>". $conn->error);

		if ($res == true) {
			echo "<script>alert('Editado com sucesso efetuado com sucesso!');</script>";
			header("refresh:1; ?page=listar");
		} else {
			echo "Não foi possivel editar";
		    header("refresh:1; ?page=listar");
		}
			
		break;

	case 'excluir':
		$sql = "DELETE FROM usuarios WHERE id=".$_REQUEST["id"];

		$res = $conn->query($sql) or die("<p style='color: red';>Falha na execução do código SQL: </p>". $conn->error);
		
		if ($res == true) {
			echo "<script>alert('Excluido com sucesso efetuado com sucesso!');</script>";
			header("refresh:1; ?page=listar");
		} else {
			echo "Não foi possivel excluir";
		    header("refresh:1; ?page=listar");
		}

		break;

	default:
		echo "<h1>Bem vindo!</h1>";
		break;
}

?>