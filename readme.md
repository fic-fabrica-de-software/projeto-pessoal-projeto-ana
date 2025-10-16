# Projeto Pessoal

<p>
  <img src="http://raw.githubusercontent.com/fic-fabrica-de-software/projeto-pessoal-projeto-ana/refs/heads/main/assets/logo.png" width="100" alt="Logo Prestaris">
</p>

## Integrantes
Feito por Ana Luiza do Amaral.

## Sobre
O projeto consiste no desenvolvimento de uma plataforma digital que conecta clientes a prestadores de serviços de diversas áreas, como manutenção, limpeza, reformas, jardinagem, entre outros.

O principal objetivo é facilitar o processo de contratação, oferecendo uma solução rápida, segura e transparente tanto para quem busca um profissional quanto para quem deseja oferecer seus serviços.

## Objetivos 🎯
- Simplificar a busca por prestadores qualificados;
- Garantir segurança e confiabilidade nas contratações;
- Oferecer um ambiente digital intuitivo e acessível;
- Exclusão de funcionários;
- Possibilitar avaliações e feedbacks sobre os profissionais.

## Funcionalidades ⚙️
- Cadastro de usuários (clientes e prestadores);
- Sistema de busca e filtragem por tipo de serviço e localização;
- Avaliação e comentários dos clientes;
- Área de gerenciamento de contratos e pagamentos.

## Público-Alvo 👥
- Pessoas físicas ou empresas que necessitam contratar serviços de forma ágil;
- Prestadores de serviços autônomos ou empresas que buscam ampliar sua base de clientes.

## Como conectar com o Banco de Dados
Antes de utilizar o sistema, é importante verificar se as variáveis no arquivo `db.php` estão corretas para o seu servidor. Modifique principalmente as linhas a seguir com o usuário, senha e porta do MySql adequadas.

```
  $email = "teste@prestaris.com";
```
## Script SQL

Execute o arquivo `db.sql` no banco de dados para criar o banco e adicionar um usuário e um cliente que será utilizado em operações básicas do sistema.

> [!IMPORTANT]
> Sem os dados corretos, podem ocorrer erros ao acessar as páginas que utilizam conexão com banco de dados.
> O banco de dados deve ser inserido na sua máquina para conseguir navegar dentro do App.
