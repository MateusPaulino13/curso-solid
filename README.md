# Curso SOLID — Aprendendo os princípios de design orientado a objetos

Este repositório tem como propósito central servir como material prático para aprender e aplicar os princípios SOLID. O foco é ensino por meio de exemplos, exercícios de refatoração e pequenas atividades que ajudam a internalizar cada princípio.

Sumário
- Sobre
- Objetivos de aprendizado
- Estrutura do repositório
- Princípios SOLID (visão geral + exercícios)
- Como estudar (roteiro sugerido)
- Como contribuir
- Recursos adicionais
- Licença

Sobre
-----
O objetivo deste curso é ensinar, através de exemplos e exercícios, como aplicar os cinco princípios SOLID para escrever código mais flexível, testável e fácil de manter. Ideal para desenvolvedores que já conhecem OO/Typescript/Java/C# (ou outra linguagem) e querem elevar a qualidade do design de software.

Objetivos de aprendizado
-----------------------
- Entender cada princípio SOLID e a motivação por trás dele.
- Saber identificar violações e aplicar refatorações apropriadas.
- Escrever código modular e com baixo acoplamento.
- Melhorar testes unitários e design orientado a testes.

Estrutura sugerida do repositório
---------------------------------
- /exemplos/ — pequenos trechos de código que ilustram cada princípio (antes/depois).
- /exercicios/ — exercícios práticos com enunciados e testes.
- /solucoes/ — (opcional) soluções comentadas para os exercícios.
- README.md — este documento.
- CONTRIBUTING.md — orientações para contribuições.

Princípios SOLID
----------------

1) Single Responsibility Principle (SRP)
- Enunciado: Uma classe deve ter apenas uma razão para mudar.
- O que procurar: classes que fazem várias coisas (ex.: lógica de negócio + persistência + formatação).
- Exemplo (esquemático):
  ```ts
  // ruim: UserService faz autenticação, log e persistência
  class UserService { /* ... */ }

  // bom: separar responsabilidades
  class Authenticator { /* ... */ }
  class UserRepository { /* ... */ }
  class UserLogger { /* ... */ }
  ```
- Exercício:
  - Identifique uma classe no diretório de exemplos que realiza mais de uma responsabilidade. Refatore dividindo responsabilidades em classes menores e escreva testes que comprovem o comportamento preservado.

2) Open/Closed Principle (OCP)
- Enunciado: Entidades devem estar abertas para extensão, mas fechadas para modificação.
- O que procurar: if/else com muitos casos ou mudanças frequentes no comportamento.
- Exemplo (esquemático):
  ```ts
  interface PaymentMethod { pay(amount:number):void }
  class CreditCard implements PaymentMethod { /* ... */ }
  class Paypal implements PaymentMethod { /* ... */ }
  // adicionar novo método não exige modificar código existente, apenas estender.
  ```
- Exercício:
  - Transforme um switch/case em uma hierarquia de estratégias usando injeção de dependência.

3) Liskov Substitution Principle (LSP)
- Enunciado: Subclasses devem ser substituíveis por suas superclasses sem alterar o comportamento esperado.
- O que procurar: subclasses que alteram contrato (lançam exceções diferentes, mudam semântica).
- Exercício:
  - Dado um exemplo onde uma subclasse sobrescreve métodos de forma incompatível, refatore interfaces/abstrações para restaurar substituibilidade.

4) Interface Segregation Principle (ISP)
- Enunciado: Muitas interfaces específicas são melhores do que uma única interface geral.
- O que procurar: interfaces grandes com métodos que implementadores muitas vezes deixam em branco ou lançam exceções.
- Exercício:
  - Separe uma interface "inflada" em interfaces menores e ajuste implementações.

5) Dependency Inversion Principle (DIP)
- Enunciado: Dependa de abstrações, não de implementações.
- O que procurar: classes que instanciam dependências concretas no próprio código (new em tudo).
- Exemplo:
  ```ts
  // ruim: depende de classe concreta
  class ReportGenerator {
    private db = new MySqlConnection();
  }

  // bom: depende de abstração via injeção
  interface DBConnection { query(q:string): any }
  class ReportGenerator {
    constructor(private db: DBConnection) {}
  }
  ```
- Exercício:
  - Refaça um módulo que cria dependências internamente para receber abstrações via construtor ou fábrica injetável. Escreva testes substituindo a dependência por um stub/mock.


Como usar este repositório
--------------------------
1. Clone o repositório:
   ```bash
   git clone https://github.com/MateusPaulino13/curso-solid.git
   ```
2. Navegue para as pastas de exemplos e exercícios e execute os testes (caso existam). Se não houver testes, crie-os ao refatorar.
3. Trabalhe em branches com descrições claras: `feature/srp-refactor`, `exercise/ocp-payment`.

Critérios de avaliação para exercícios
- Há testes cobrindo comportamento antes e depois da refatoração?
- A responsabilidade foi isolada corretamente?
- O código está mais fácil de estender sem modificar código existente?
- As interfaces/abstrações estão claras e pequenas?

Como contribuir
---------------
- Abra uma issue para discutir novas tarefas ou melhorias.
- Faça forks e envie Pull Requests com descrições completas do que foi alterado e por quê.
- Sempre inclua ou atualize testes que mostrem a correção/refatoração.
- Use mensagens de commit descritivas.

Recursos adicionais
-------------------
- Livro: "Agile Principles, Patterns, and Practices in C#" — Robert C. Martin
- Artigo: "SOLID Principles" — Martin Fowler / Uncle Bob
- Vídeos: canais de arquitetura de software e refatoração (procure por "SOLID principles" em sua plataforma preferida)

Licença
-------
Escolha uma licença apropriada para o repositório (ex.: MIT). Se desejar, eu posso adicionar um arquivo LICENSE com o texto correspondente.

Próximos passos que eu posso executar agora
------------------------------------------
- Ajustar este README para refletir a estrutura real do repositório (ex.: pastas e linguagens presentes).
- Criar exemplos iniciais (antes/depois) para cada princípio.
- Adicionar um template de exercício com testes base (jest/pytest/xUnit dependendo da linguagem).

Se desejar que eu adapte o README ao código já existente no repositório, diga quais pastas/arquivos devo referenciar ou autorize-me a inspecionar a árvore do repositório e eu atualizo o README com links diretos para exemplos e exercícios.
