# Grafica de prueba
Grafica de prueba hecha con JS, Css y php



## Explicando

- Se usa fetch API, por lo tanto se usa un gestor como xampp paera visualizar correctamente el desarrollo
- Se inicia creando un script Js en el archivo index llamado Grafica.php
- Se crea una funcion async de nombre fetcHData, 
    - Se toma la url del archivo json y se almacena en una constante.
    - Se crea una constante datapoint la cual espera una respuesta en el fetch que arroje los resultados que se obtienen de la url (json).
    - Se crea la const datapoints la cual lleva la respuesta, la cual se espera en formato json.
    - se pone el return que es el que guardara almacenara los datos o trae los datos ya que si no se pone el return no hara nada visualmente
    - Se crea un boton el cual llama a la funcion creada
- Se llama a la funcion fetchData seguida de then para que devuelva una promesa para extraer los articulos especificos
    - Se creo la constante mesJson y se accede al json en este caso reportes financieros.finanzas, se usa la funcion map que recorre toda la matriz y se identifica un valor especifico, en la funcion map se le anida una funcion a la que se le pone como parametro un indice y retorna un elemento que es un punto del indice, en este caso el mes
    - Se hace lo mismo con los otors 2 datos que se necesitan
- Se toma el id que se le puso al contenedor "myChart", seguido de config de la constante config, los labels de los lementos de la constante data seguidos del igual a lo que se trae la const mesJson.


|Titulo 1| descripcion |
|---------------|------------|
| herramienta1 | explicacion del metodo o herramienta usada
|herramienta2| expliacion 2

```
contexto 
```
- [x] elemento1
- [ ] elemento2

## Construido con 🛠️

_Menciona las herramientas que utilizaste para crear tu proyecto_

* [Visual Studio Code](https://code.visualstudio.com/download) - El Editor de codigo usado
* [XAMPP](https://maven.apache.org/) - Distribución de Apache que contiene MariaDB, PHP, MySQL
* [JavaScript] - Lenguaje usado para el script principal

## Autor ✒️

* **David Leonardo Parra** - *GraficaPrueba* - [lpb21](https://github.com/lpb21)