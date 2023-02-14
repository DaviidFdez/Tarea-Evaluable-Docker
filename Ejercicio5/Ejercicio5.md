# Ejercicio 5 - imagen con Dockerfile

> Módulo: Módulo Despliegue de Aplicaciones Web - CIFP La Laboral

> Realizado por Diego de la Iglesia Rodríguez

##### Creamos un directorio

![](capturas/Captura.PNG)

![](capturas/Captura2.PNG)

![](capturas/Captura3.PNG)

##### Creamos el fichero Dockerfile

![](capturas/Captura4.PNG)

![](capturas/Captura5.PNG)

![](capturas/Captura6.PNG)

##### Creamos la imagen

```shh
docker build -t webapache .
```

![](capturas/Captura7.PNG)

![](capturas/Captura8.PNG)

##### Probamos la imagen en un contenedor

![](capturas/Captura9.PNG)

![](capturas/Captura10.PNG)

##### Subimos la imagen a dockerhub

```shh
docker tag webapache diegodir92/webapache:latest

docker login

docker push diegodir92/webapache
```

![](capturas/Captura11.PNG)

![](capturas/Captura12.PNG)

![](capturas/Captura13.PNG)

##### David descarga la imagen de docker y la prueba 

![](capturas/Captura16.PNG)

![](capturas/Captura17.PNG)
