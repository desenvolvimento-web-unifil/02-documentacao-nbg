``` mermaid

flowchart LR
 A[User]
 B[Registrar Usuarios]
 C[Autenticar Usuarios]
 D[Gerenciar Saldo]
 E[Realizar Apostas]
 F[Consultar Resultados]
 G[Consultar Historico de apostas]
 H[Realizar Deposito]
 I[Realizar Saque]
 
 A --> B
 A --> C
 A --> D
 A --> E
 D --> H
 D --> I
 A --> F
 F --> G

```