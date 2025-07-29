<?php
$nome = $_POST["nome"];
$telefone = $_POST["telefone"];
$email = $_POST["email"];
$endereco = $_POST["endereco"];
  
$EFC = $_POST["EFC"];
$EMC = $_POST["EMC"];
$ESC = $_POST["ESC"];
$PGC = $_POST["PGC"];
$MC = $_POST["MC"];
  
$empresa = $_POST["Empresa"];
$data_admissao = $_POST["data_de_admissao"];
$data_demisao = $_POST["data_de_demissao"];
$atividade_exercida = $_POST["atividade_exercida"];

$nome = $_POST["desccricao"];
$nome = $_POST["horas"];
$nome = $_POST["ano_conclusao"];

$informacoes = $_POST["informacoes"];

echo "DADOS PESSOAIS";
echo $nome;
echo $telefone;
echo $email;
echo $endereco;
echo "Escolaridade";
echo $efc;
echo $emc;
echo $pgc;
echo $mc;
echo "EXPERIENCIA PROFISSIONAL";
echo $empresa;
echo $data_admissao;
echo $data_demissao;
echo $atividade_exercida;
echo "CURSOS E IDIOMAS";
echo $descricao;
echo $horas;
echo $ano_conclusao;
echo "INFORMAÇÕES ADICIONAIS";
echo $informacoes;
?>
