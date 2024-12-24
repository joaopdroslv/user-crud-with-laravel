# Projeto CRUD em Laravel

Este projeto foi desenvolvido com o objetivo de treinar e praticar os conceitos de **CRUD (Create, Read, Update, Delete)** utilizando o framework Laravel. O foco do projeto está na criação, leitura, atualização e exclusão de registros de usuários em uma aplicação web simples.

## Funcionalidades Principais

- **Listagem de Usuários**:  
  Exibe todos os usuários cadastrados no sistema.

- **Cadastro de Usuários**:  
  Permite o cadastro de novos usuários através de um formulário de criação.

- **Visualização de Usuário**:  
  Exibe os detalhes de um usuário específico quando selecionado.

- **Edição de Usuário**:  
  Permite a atualização das informações de um usuário existente.

- **Exclusão de Usuário**:  
  Permite excluir um usuário do sistema.

## Rotas do Sistema

O sistema oferece rotas de fácil acesso para realizar as operações CRUD no recurso **User**:

- `GET /`: Exibe a listagem de usuários.
- `GET /users`: Exibe todos os usuários cadastrados.
- `GET /users/create`: Exibe o formulário para criação de um novo usuário.
- `POST /users`: Processa o formulário de criação de um usuário.
- `GET /users/{user}`: Exibe os detalhes de um usuário específico.
- `GET /users/{user}/edit`: Exibe o formulário para editar um usuário.
- `PUT /users/{user}`: Processa a atualização de um usuário.
- `DELETE /users/{user}`: Exclui um usuário do sistema.

O código foi simplificado utilizando o método `Route::resource()`, que cria todas as rotas de forma automatizada para o controlador **UserController**.
