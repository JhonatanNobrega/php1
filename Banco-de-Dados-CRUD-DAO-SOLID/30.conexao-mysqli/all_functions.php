<?php

    // Retorna o número de linhas afetadas na operação anterior do MySQL
    affected_rows();

    // Liga ou desliga as modificações de banco de dados de auto-commit
    autocommit();

    // Inicia uma transação
    begin_transaction();

    // Altera o usuário da conexão de banco de dados especificada
    change_user();

    // Retorna o conjunto de caracteres padrão para a conexão do banco de dados
    //character_set_name();

    // Fecha uma conexão de banco de dados aberta anteriormente
    //close();

    // Confirma a transação atual
    commit();

    // Abre uma nova conexão com o servidor MySQL
    connect();

    // Retorna o código de erro do último erro de conexão
    connect_errno();

    // Retorna a descrição do último erro de conexão
    connect_error();

    // Ajusta o ponteiro do resultado para uma linha arbitrária no conjunto de resultados
    data_seek();

    // Executa operações de depuração
    debug();

    // Despeja informações de depuração no log
    dump_debug_info();

    // Retorna o último código de erro para a chamada de função mais recente
    errno();

    // Retorna a última descrição de erro para a chamada de função mais recente
    error();

    // Retorna uma lista de erros para a chamada de função mais recente
    error_list();

    // Busca todas as linhas de resultado como uma matriz associativa, uma matriz numérica ou ambos
    fetch_all();

    // Busca uma linha de resultado como associativa, matriz numérica ou ambos
    fetch_array();

    // Busca uma linha de resultado como uma matriz associativa
    fetch_assoc();

    // Retorna o próximo campo no conjunto de resultados, como um objeto
    fetch_field();

    // Retorna metadados para um único campo no conjunto de resultados, como um objeto
    fetch_field_direct();

    // Retorna uma matriz de objetos que representam os campos em um conjunto de resultados
    fetch_fields();

    // Retorna os comprimentos das colunas da linha atual no conjunto de resultados
    fetch_lengths();

    // Retorna a linha atual de um conjunto de resultados, como um objeto
    fetch_object();

    // Busca uma linha de um conjunto de resultados e a retorna como uma matriz enumerada
    fetch_row();

    // Retorna o número de colunas da consulta mais recente
    field_count();

    //Define o cursor de campo para o deslocamento de campo dado
    field_seek();

    //Retorna um objeto de conjunto de caracteres	
    get_charset();

    //Retorna a versão da biblioteca cliente MySQL
    get_client_info();

    //Retorna estatísticas sobre cliente por processo	
    get_client_stats();

    //Retorna a versão da biblioteca do cliente MySQL como um número inteiro
    get_client_version();	

    //Retorna estatísticas sobre a conexão do cliente
    get_connection_stats();

    //Retorna o nome de host do servidor MySQL e o tipo de conexão
    get_host_info();

    //Retorna a versão do protocolo MySQL
    get_proto_info();

    //Retorna a versão do servidor MySQL
    get_server_info();

    //Retorna a versão do servidor MySQL como um inteiro
    get_server_version();

    //Retorna informações sobre a última consulta executada	
    info();

    //Inicializa o MySQLi e retorna um recurso para uso com real_connect ()
    init();

    //Retorna o id gerado automaticamente da última consulta
    insert_id();

    //Pede ao servidor para eliminar um thread do MySQL
    kill();

    // Verifica se há mais resultados de uma consulta múltipla
    more_results();

    // Executa uma ou mais consultas no banco de dados
    multi_query();

    // Prepara o próximo conjunto de resultados de multi_query ()
    next_result();

    // Define opções extras de conexão e afeta o comportamento de uma conexão	
    options();

    // Faz ping em uma conexão de servidor ou tenta reconectar se a conexão caiu
    ping();

    // Conexões de enquetes
    poll();

    // Prepara uma instrução SQL para execução
    prepare();

    // Executa uma consulta em um banco de dados
    query();

    // Abre uma nova conexão com o servidor MySQL
    real_connect();

    // Evita caracteres especiais em uma string para uso em uma instrução SQL
    real_escape_string();

    // Executa uma única consulta SQL	
    real_query();

    // Retorna o resultado de uma consulta SQL assíncrona
    reap_async_query();

    // Atualiza / libera tabelas ou caches, ou redefine as informações do servidor de replicação	
    refresh();

    // Reverte a transação atual para o banco de dados
    rollback();

    // Selecione o banco de dados padrão para consultas de banco de dados
    select_db();

    // Define o conjunto de caracteres padrão do cliente
    set_charset();

    // Desfaz a configuração do manipulador definido pelo usuário para o comando load local infile
    set_local_infile_default();

    // Definir função de retorno de chamada para o comando LOAD DATA LOCAL INFILE
    set_local_infile_handler();	

    // Retorna o código de erro SQLSTATE para o erro
    sqlstate();

    // Usado para estabelecer conexões seguras usando SSL
    ssl_set();

    // Retorna o status atual do sistema 
    stat();

    //Inicializa uma instrução e retorna um objeto para uso com stmt_prepare ()
    stmt_init();

    // Transfere um conjunto de resultados da última consulta
    store_result();

    // Retorna o ID do thread para a conexão atual
    thread_id();

    // Retorna se a biblioteca cliente é compilada como thread-safe
    thread_safe();

    // Inicia a recuperação de um conjunto de resultados da última consulta executada
    use_result();

    // Retorna o número de avisos da última consulta na conexão
    warning_count();