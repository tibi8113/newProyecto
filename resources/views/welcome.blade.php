<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Hello world !</title>

        <!-- Fonts -->


        <!-- Styles -->
        <style>

		body {
			background-color:#8EF9FF;
			font-size:40px;
		}
		#division {
		}

        </style>
    </head>
    <body>
	<div id="division">
		<a href="/adios">Hello World</a>
		<form action="/postform" method="post">
			<input type="hidden" name="_token" value="{{ csrf_token	() }}"><br>
			Nombre:<br>
			<input type="text" name="Nombre" value="Tibi"><br><br>
			Apellido:<br>
			<input type="text" name="Apellido" value="Gabriel"><br><br>
			<button type="submit">Enviar</button>
		</form> 

</form>
	</div>
</form> 
	
	</div>
    </body>
</html>
