``` mermaid
erDiagram
USUARIO || --|{ APOSTA : faz
USUARIO || --|{ DEPOSITO : faz
USUARIO || --|{ SAQUE : faz
USUARIO || --|{ HISTORICO : possuir
APOSTA  || --|{ RESULTADO_FINAL : referencia
RESULTADO_FINAL || --|{ JOGO : pertence
APOSTA  || --|{ TOTAL_GOLS : referencia
TOTAL_GOLS || --|{ JOGO : pertence
APOSTA  || --|{ TOTAL_FALTAS : referencia
TOTAL_FALTAS || --|{ JOGO : pertence
APOSTA  || --|{ ESCANTEIOS : referencia
ESCANTEIOS || --|{ JOGO : pertence

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
    int id_usuario
    real valor_aposta
    int tipo_aposta
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
    varchar[50] time_a
    varchar[50] time_b
    time hora_inicio
}

RESULTADO_FINAL {
    int id_resultado
    int id_jogo
    int placar_time_a
    int placar_time_B
    real odd
}

TOTAL_GOLS {
    int id_total_gols
    int id_jogo
    int tipo
    int quantidade_gols
}

TOTAL_FALTAS {
    int id_total_faltas
    int id_jogo
    int tipo
    int quantidade_faltas
}

ESCANTEIOS {
    int id_escanteios
    int id_jogo
    int tipo
    int quantidade_escanteios
}

```
