
markdown

Copiar código

`# Schedule API

Este projeto é uma API para gerenciar eventos em uma agenda, permitindo listar, criar, atualizar e excluir eventos com data, descrição e prioridade. O backend é construído utilizando o Symfony, enquanto o frontend pode ser desenvolvido com Next.js.

## Tecnologias Utilizadas

- **PHP 8.2** ou superior
- **Symfony 6.4** ou superior
- **MariaDB** como banco de dados
- **Docker** e **Docker Compose** para o ambiente de desenvolvimento
- **Next.js** para o frontend
- **PHPUnit** para testes unitários

## Pré-requisitos

Antes de começar, certifique-se de ter as seguintes ferramentas instaladas:

- **Docker**: Para rodar os serviços do projeto (PHP, MariaDB).
- **Composer**: Para gerenciar dependências PHP.
- **Node.js**: Para executar o Next.js.

## Instalação

1. Clone o repositório:

   ```bash
   git clone https://github.com/seuusuario/schedule-api.git
   cd schedule-api` 

6.  Suba os containers com Docker Compose:
    
    `docker-compose up -d` 
        
## Estrutura do Docker Compose

O projeto utiliza o Docker Compose para gerenciar os serviços, conforme definido no arquivo `docker-compose.yml`. Abaixo está a descrição dos serviços configurados:
    
-   **symfony**: Serviço principal da aplicação Symfony.
    
-   **nextjs**: Serviço para a aplicação Next.js.
    
-   **db**: Serviço do banco de dados MariaDB, que persiste dados usando volumes.
    
   O projeto já faz as intalações de dependencias de ambos os submodulos, e levanta os sevircos configurados. mas caso nescessário voce poderá executar um `npm install`  ou `composer install`  em seus respectivos containers.

## Acessando a Agenda pelo Frontend

Após a instalação e configuração do projeto, você pode acessar a aplicação frontend em um navegador através do seguinte URL:

`http://localhost:3000/schedule` 

A partir deste ponto, você poderá interagir com a agenda, listando, criando, atualizando e excluindo eventos através da interface do usuário do Next.js.

## Endpoints da API

### Listar Todos os Eventos

-   **Rota**: `/schedules`
-   **Método**: `GET`
-   **Parâmetros de Query (opcional)**: `date` (filtrar eventos por data específica, no formato YYYY-MM-DD).

#### Resposta:

`[
  {
    "id": 1,
    "datetime": "2024-10-01T10:00:00",
    "event": "Evento 1",
    "priority": 1
  },
  {
    "id": 2,
    "datetime": "2024-10-02T11:00:00",
    "event": "Evento 2",
    "priority": 2
  }
]` 

### Obter Evento por ID

-   **Rota**: `/schedules/{id}`
-   **Método**: `GET`

#### Resposta:
`{
  "id": 1,
  "datetime": "2024-10-01T10:00:00",
  "event": "Evento 1",
  "priority": 1
}` 

### Criar um Novo Evento

-   **Rota**: `/schedules`
-   **Método**: `POST`

#### Body:

`{
  "datetime": "2024-10-01T10:00:00",
  "event": "Novo Evento",
  "priority": 1
}` 

#### Resposta:


`{
  "id": 1,
  "datetime": "2024-10-01T10:00:00",
  "event": "Novo Evento",
  "priority": 1
}` 

### Atualizar um Evento

-   **Rota**: `/schedules/{id}`
-   **Método**: `PUT`

#### Body:

`{
  "datetime": "2024-10-01T10:00:00",
  "event": "Evento Atualizado",
  "priority": 2
}` 

#### Resposta:

`{
  "id": 1,
  "datetime": "2024-10-01T10:00:00",
  "event": "Evento Atualizado",
  "priority": 2
}` 

### Deletar um Evento

-   **Rota**: `/schedules/{id}`
-   **Método**: `DELETE`

#### Resposta: `204 No Content`

## Testes

Os testes foram implementados utilizando o PHPUnit e cobrem os casos de uso principais, como listar, obter, criar, atualizar e deletar eventos.

### Rodando os Testes

Para rodar os testes, utilize o seguinte comando:

`php bin/phpunit` 

## Estrutura de Diretórios

-   **src/Command**: Contém os comandos de criação, atualização e exclusão.
-   **src/Handler**: Contém os manipuladores para as operações de negócio.
-   **src/Query**: Contém as queries usadas para buscar dados.
-   **src/Controller**: Contém os controladores de API.
-   **tests/Controller**: Contém os testes da controller.

## Contribuição

Contribuições são bem-vindas! Siga os passos abaixo para contribuir:

1.  Faça um fork do projeto.
2.  Crie uma branch com sua feature: `git checkout -b minha-feature`.
3.  Commit suas mudanças: `git commit -m 'Minha nova feature'`.
4.  Faça o push para a branch: `git push origin minha-feature`.
5.  Abra um pull request.

## Licença

Este projeto está licenciado sob a licença MIT. Consulte o arquivo LICENSE para mais detalhes.

Copiar código

 `Sinta-se à vontade para ajustar qualquer parte conforme necessário!`
