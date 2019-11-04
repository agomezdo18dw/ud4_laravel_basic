<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Tarea 4.3</title>
    </head>
    <body>
        <form action="{{route('storeForm2')}}" method="post">
			@csrf
			Nombre:<br>
			<input type="text" name="nombre" value="Arantxa"><br><br>
			Primer apellido:<br>
			<input type="text" name="apellido" value="Juanena"><br><br>
			<button type="submit">Enviar</button>
        </form> 
        <p><a href="/">Volver al menú de tareas</a></p>
    </body>
</html>