<!DOCTYPE html>
<html>
<head>
	<title>UD4 - Laravel básico</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/styles.css">
</head>
<body>
	<h1>UD4 - Laravel básico</h1>
    <div class="row">
        <div class="column">
            <div class="card">
                <span class="titulo">Tarea 4.1</span>
                <div class ="subtarea">
                    <p><a href="contacto">a) Contacto</a></p>
                    <p><a href="blog1/1">b) Blog con id</a></p>
                    <p><a href="blog2/1/ajuanena">c) Blog con id y nombre</a></p>
                </div>
                </div>
        </div>
        <div class="column">
            <div class="card">
                <span class="titulo">Tarea 4.2</span>
                <div class ="subtarea">
                    <p><a href="{{route('saludo')}}">a) Saludo</a></p>
                    <p><a href="{{route('saludoNombre',['nombre' => 'ajuanena'])}}">b) Saludo con nombre</a></p>
                    <p><a href="{{route('saludoNombreColor',['nombre' => 'ajuanena','color' =>'FF00FF'])}}">c) Saludo con nombre y color</a></p>
                </div>
                </div>
        </div>
        <div class="column">
            <div class="card">
                <span class="titulo">Tarea 4.3</span>
                <div class ="subtarea">
                    <p><a href="{{route('createForm1')}}">a) Formulario de contacto GET</a></p>
                    <p><a href="{{route('createForm2')}}">b) Formulario de contacto POST</a></p>
                    <p><a href="{{route('createForm3')}}">c) Formulario y saludo misma vista</a></p>
                </div>
                </div>
        </div>
        <div class="column">
            <div class="card">
                <span class="titulo">Tarea 4.4</span>
                <div class ="subtarea">
                    <p><a href="{{route('createForm4')}}">a) Validación de formulario</a></p>
                    <p><a href="{{route('createForm5')}}">b) Validación de formulario a través de controlador Request y mensajes personalizados.</a></p>
                </div>
                </div>
        </div>

    </div>

</body>
</html>