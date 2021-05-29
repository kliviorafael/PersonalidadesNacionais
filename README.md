# PersonalidadesNacionais

Olá, muito bem vindo a este repositório, fico feliz pelo seu interesse. Então deixa eu fazer uma breve explicação do que foi feito aqui.

1 - Foi encaminhado um arquivo .CSV com aproximados 750 entradas de dados, levemente bagunçados e que precisariam ser tratados antes de ser manipulados dentro do MySQL e PHP; 
2 - O arquivo foi tratado da seguinte forma: 
  2.1 - Remoção de dados repetidos, independente  das personalidades, visto que não interferia no resultado final (Colunas Categoria, PD, Metas); 
  2.2 - Tratamento de acentuação, tive um leve problema de reconhecimento de alguns nomes; 
  2.3 - Tratamento separando  os dados em colunas, visto que os mesmo chegaram em apenas uma coluna, desta forma facilita a visualização e posteriormente a inserção no MySQL; 
3 - Após o tratamento foi gerado o novo .CSV (dados finais2.csv);
4 - Criou-se um banco de dado chamado Personalidades e onde os dados CSV foram inseridos, todo esse processo foi manual; 
5 - Após devida criação do banco MySQL, foi redigido o código que conecta o PHP ao MySQL (conexao.php); 
6 - Criou o arquivo (teste.php) onde inicialmente  foram feitos alguns testes de conexão com o banco e ínicio do HTML, para construção da visualização Web; 
7 - Conexão foi testada e após confirmado sucesso, foram feitas algumas solicitações (SELECT) para chamar dados específicos do Banco;
8 - Criação e edição dos gráficos com as solicitações, a parte gráfica é alimentada com PHP dentro de JavaScript por meio de preenchimento das arrays;
9 - Pequenas edições e configuração de estilo - CSS -  dentro do próprio HTML no arquivo (teste.php)
