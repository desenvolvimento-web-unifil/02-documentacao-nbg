``` mermaid
erDiagram
USUARIO || --|{ APOSTA : faz
USUARIO || --|{ DEPOSITO : faz
USUARIO || --|{ SAQUE : faz
USUARIO || --|{ HISTORICO : possui
JOGO    || --|{ CATEGORIA : tem
APOSTA  || --|{ JOGO : pertence

USUARIO {
    int id_usuario
    varchar[50] nome
    date data_nascimento
    varchar[50] email
    varchar[16] senha
    boolean is_adm
    real saldo
}

APOSTA {
    int id_aposta
    varchar[50] nome_aposta
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

JOGO {
    int id_jogo
    varchar[50] nome_jogo
    int id_categoria
}

CATEGORIA {
    int id_categoria
    varchar[50] nome_categoria
}
```
