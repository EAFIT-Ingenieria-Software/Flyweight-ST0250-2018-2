# Flyweight-ST0250-2018-2
Repositorio para dar ejemplo en código al patrón de diseño Flyweight

# Integrantes
1. Santiago Soto M
2. Jamerson S Correa C
3. Andres Sanchez C

# Patron de Diseño: Flyweight
En este caso se queria mejora el resimiento del sistema y dismiur el uso de memoria.


# Lenguaje de Programacion: PHP
En este lenguaje sera desarrollada la aplicacion

Para esto se tomaron las caracteristica en comun que tenia los estudiantes y se pusieron en 
un clase aparte(DatosExtrasEstudiante) que implenta la interfaz Flyweight, cuando se crea un nuevo 
Estudiante se le solicita a una clase FabricaEstudiante que entregue los datos en comun
si ya tenia la instancia creada de DatosExtrasEstudiantela pasa, si no la crea, de esto modo uilizando menos memoria.
