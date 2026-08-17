<?php
// Armazenamento dos dados recebidos via POST em variáveis
$nome = $_POST['nome'] ?? 'Não informado';
$idade = $_POST['idade'] ?? 'Não informado';
$profissao = $_POST['profi'] ?? 'Não informado';
$salario = $_POST['sal_pret'] ?? '0';
$experiencia = $_POST['exp_ant'] ?? 'Não informado';

// Formatação do salário para padrão de moeda brasileira (R$)
$salarioFormatado = number_format((float)$salario, 2, ',', '.');
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmação de Cadastro - Brincos e Companhia</title>
</head>
<body>

    <h1>Brincos e Companhia</h1>
    <h2>Dados do Colaborador Cadastrado</h2>

    <!-- Exibição dos dados linha por linha usando lista HTML -->
    <ul>
        <li><strong>Nome Completo:</strong> <?php echo $nome; ?></li>
        <li><strong>Idade:</strong> <?php echo $idade; ?> anos</li>
        <li><strong>Profissão:</strong> <?php echo $profissao; ?></li>
        <li><strong>Salário Pretendido:</strong> R$ <?php echo $salarioFormatado; ?></li>
        <li><strong>Experiência Anterior:</strong> <?php echo $experiencia; ?></li>
    </ul>

    <hr>

    <!-- Mensagem personalizada -->
    <h3>Resumo do Perfil</h3>
    <p>
        Agradecemos o envio do currículo, <strong><?php echo $nome; ?></strong>. A nossa equipe analisará o seu perfil com histórico em <strong><?php echo $profissao; ?></strong> e experiência prévia em <strong><?php echo $experiencia; ?></strong>, e entrará em contato em breve.
    </p>

    <br>

    <!-- Link para retornar ao formulário -->
    <a href="cadastro.html">
        <button type="button">Voltar ao Formulário</button>
    </a>

</body>
</html>