``` mermaid
erDiagram
    PARTICIPANTE ||--o{ APOSTA : "participa de"
    APOSTA }|--|| EVENTO : "envolve"
    APOSTA ||--|| RESULTADO : "tem"
    PARTICIPANTE {
        string nome
        string email
        string senha
        decimal saldo
    }
    EVENTO {
        string nome
        string tipo
    }
    APOSTA {
        decimal valor
        string tipo
    }
    RESULTADO {
        string tipo
    }
