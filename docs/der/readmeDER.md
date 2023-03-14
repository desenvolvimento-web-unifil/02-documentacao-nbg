``` mermaid
erDiagram
USUARIO || --|{ APOSTA : faz
USUARIO || --|{ DEPOSITO : faz
USUARIO || --|{ SAQUE : faz
USUARIO || --|{ HISTORICO : possui

USUARIO {
    int id_usuario
   varchar(50) nome
   date nascimento
    varchar(50) email
    varchar(16) senha
    real saldo
}

APOSTA {
    int id_aposta
    varchar(50) nome_aposta
    real valor_aposta
    real odd
}

HISTORICO {
    int id
    date data
    real aposta
    real resultado
    int usuario_id
}
DEPOSITO {
    int id
    date data
    real valor
    int usuario_id
}
SAQUE {
    int id
    date data
    real valor 
    int usuario_id
}
```