# ej_con_tiempo2

### Instrucciones
- Crea un **repositorio en GitHub** donde irás subiendo tus ejercicios de la prueba.
- Crea **un fichero** o **directorio** (en el caso de que se necesiten varios ficheros por ejercicio) por ejercicio (ejercicio1/, ejercicio2.php...).
- El repositorio deberé ser **público**.
- Se **entregará** la url del repositorio enviando un correo a *elena.mederos.cebreros@gmail.com* a más tardar hoy **a las 14:00h**.
- Aprovecha el correo para contarme un poco cómo te has visto durante esta prueba y durante estas semanas, si crees que hay algo que necesites repasar o si lo llevas todo al día, si hay alguna duda... **¡Lo que sea!**. 

## Ejercicio 1
La fundación quiere guardar en un base de datos los alumnos que harán prácticas en empresas, y justamente el informático se ha puesto malo por una intoxicación alimenticia, así que te piden que te encargues del diseño y creación de la base de datos.  
- De las empresas que ofertan las prácticas se necesita guardar el nombre de la empresa, una persona de contacto, su email y telefono y la dirección de la empresa. 
- De los alumnos necesitaremos guardar el nombre, el apellido, el dni, la empresa asignada y el tipo de prácticas que han seleccionado.
- Las prácticas pueden ser a tiempo parcial o a tiempo completo. Además tendremos que conocer el horario de las prácticas ya que las que son a tiempo parcial puede ser de mañana(9:00h-15:00h) o de tarde (15:00h-21:00h). Si son a jornada completa es horario será de 9:00h a 18:00h.

1. Crea el diagrama de Entidad-Relación.
2. Crea el script de bases de datos (Workbench). 
3. Inserta varias empresas, varios alumnos y los tres tipos de prácticas. Crea las relaciones necesarias entre ellos.

NOTA: Recuerda como buena práctica añadir un identificador único a cada registro de tus tablas. 

## Ejercicio 2
Recupera de la base de datos del ejercicio anterior los alumnos y el nombre de la empresa que tiene asignada y muéstralo por pantalla. 

IMPORTANTE: Usa funciones en la mayor medida de lo posible.

# ---- EJERCICIO EXTRA ---- 

## Ejercicio 3 
Sabiendo que la función **file_put_contents** escribe en un fichero. Crea un fichero json con los siguientes datos de los productos de tu tienda:
    - nombre del producto
    - descripción del producto
    - precio 
    - cantidad de productos en el almacén.
    - imagen del producto (puedes coger url de internet)

3. Recupera los datos del fichero JSON de clientes y guardalos en una base de datos. 

4. ¿Te atreves a probar a mostrar también una imagen del producto (puedes coger url de Google)?
Si en el fichero JSON tienes guardada la localización de la imagen, recuerda que puedes mostrar imágenes teniendo la url de la misa con la etiqueta <img> de HTML. 
```
