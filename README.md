# Laboratório de Migrations - Laravel

Este repositório contém as atividades práticas de **Migrations** realizadas para a disciplina de **Programação Web I** do curso de **ADS - CAMPUS IFCE DE BOA VIAGEM - CE**.

- **Aluno:** Germano de Oliveira Moraes
- **Disciplina:** Programação Web I
- **Professor:** Renato William R. de Souza

---

## Atividades Realizadas

| # | Atividade | Branch | Pull Request |
| :--- | :--- | :--- | :--- |
| 01 | Preparação do Ambiente | `atividade/01-ambiente` | [https://github.com/germanomoraes/laravel_migrations_germanomoraes/pull/1] |
| 02 | Primeira Migration | `atividade/02-primeira-migration` | [https://github.com/germanomoraes/laravel_migrations_germanomoraes/pull/2] |
| 03 | Tipos de Dados | `atividade/03-tipos-de-dados` | [https://github.com/germanomoraes/laravel_migrations_germanomoraes/pull/3] |
| 04 | Chave Estrangeira Simples | `atividade/04-chave-estrangeira` | [https://github.com/germanomoraes/laravel_migrations_germanomoraes/pull/4] |
| 05 | Uso do foreignId | `atividade/05-foreignid` | [https://github.com/germanomoraes/laravel_migrations_germanomoraes/pull/5] |
| 06 | Regras de Exclusão | `atividade/06-regras-exclusao` | [https://github.com/germanomoraes/laravel_migrations_germanomoraes/pull/6] |

---

## Como executar este projeto

1. **Pré-requisitos:**
   - PHP instalado
   - Composer instalado
   - MySQL (ou outro banco de dados compatível)

2. **Instalação:**
   - Clone este repositório.
   - Copie o arquivo `.env.example` para `.env`:
     ```bash
     cp .env.example .env
     ```
   - Gere a chave do aplicativo:
     ```bash
     php artisan key:generate
     ```
   - Configure o banco de dados no arquivo `.env`.

3. **Execução das Migrations:**
   Para rodar todas as atividades no seu ambiente local:
   ```bash
   php artisan migrate
