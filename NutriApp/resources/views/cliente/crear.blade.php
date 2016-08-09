@extends("cliente.template")
@section("contenido")
    <div class="col-md-4">
        <form action="{{ url('cliente/crearcliente') }}" method="post" role="form">

            {{csrf_field()}}

        	<legend>Crear Cliente</legend>

        	<div class="form-group">
        		<label for="">Nombre cliente: </label>
        		<input type="text" class="form-control" name="nombre" id="" placeholder="Nombre">
        	</div>

            <div class="form-group">
                <label for="">Apellidos cliente: </label>
                <input type="text" class="form-control" name="apellido" id="" placeholder="Apellido">
            </div>

            <div class="form-group">
                <label for="">Cédula cliente: </label>
                <input type="text" class="form-control" name="cedula" id="" placeholder="Cédula">
            </div>

            <div class="form-group">
                <label for="">Teléfono cliente: </label>
                <input type="text" class="form-control" name="telefono" id="" placeholder="Teléfono">
            </div>

            <div class="form-group">
                <label for="">Dirección cliente: </label>
                <input type="text" class="form-control" name="direccion" id="" placeholder="Dirección">
            </div>

            <div class="form-group">
                <label for="">E-mail cliente: </label>
                <input type="text" class="form-control" name="email" id="" placeholder="E-mail">
            </div>



        	<button type="submit" class="btn btn-primary">ENVIAR</button>
        </form>
    </div>


    @endsection
