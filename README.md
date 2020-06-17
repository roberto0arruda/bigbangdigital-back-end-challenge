# Big Bang - Desafio Backend

Criar um micro-serviço que receba requisições HTTP no formato REST que receba como parâmetro o nome de uma cidade ou uma combinação de latitude e longitude e retorne uma sugestão de playlist (array com o título das músicas) de acordo com a temperatura atual da cidade.

Você pode usar qualquer linguágem e framework que quiser, use o que se sentir mais a vontade (sugerimos PHP ou NodeJS).

## Regras de negócio
* Se a temperatura (Celsius) estiver acima de 30 graus, sugerir músicas para festa
* Se a temperatura está entre 15 e 30 graus, sugerir músicas do gênero Pop.
* Entre 10 e 14 graus, sugerir músicas do gênero Rock
* Abaixo de 10 graus, segerir músicas clássicas.

## Dicas

Você pode usar a API do OpenWeatherMaps (https://openweathermap.org) para buscar a temperatura das cidades/coordenadas (se atente a unidade em que a temperatura é retornada).

Você pode usar a [Spotify API](https://developer.spotify.com/documentation/web-api/quick-start/) para buscar os títulos das músicas em uma playlist, a API também da sugestões de playlist por categoria (ex: Rock).

## Pontos extras

* Pensar em tornar o serviço resiliente e tolerante a falhas
* Considere o uso de containers (Docker) para facilitar a criação do ambiente da sua aplicação

## Critérios de avaliação
* Cumprimento dos requisitos
* Cobertura de testes
* Organização do código (cleancode, DRY, SOLID, etc.)

## Submentendo a entrega

Envie um email para thiago@bigbangdigital.com.br com o link para o código feito para cumprir o desafio (repositório público no GitHub/Gitlab/Gitbucket...)
