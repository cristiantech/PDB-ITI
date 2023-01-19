### RDB (relational database)

RDBMS (Relational DataBase Management System) Sistema Manejador de Bases de datos relacionales.

La diferencia entre ambos es que las BBDD son un conjunto de datos pertenecientes ( o al menos en teoría) a un mismo tipo de contexto, que guarda los datos de forma persistente para un posterior uso, y el Sistema de gestión de BBDD o sistema manejador, es el que nos permite acceder a ella, es un software, herramienta que sirve de conexión entre las BBDD y el usuario (nos presenta una interfaz para poder gestionarla, manejarla).

### RDBMS

+ MySQL
+ PostgreSQL
+ Etc

Todas toman un lenguaje base, pero cada uno lo apropia, imponiéndole diferentes reglas y características.

### Docker Compose
Comandos del Interprete docker compose

**Ingreso al contenedor**
```sh
docker exec -it db bash
```
**Ingreso a la base de datos por shell**
```sh
psql -h localhost -d database -U usuario

````