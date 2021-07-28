<?php  include 'header.php'; ?>

<div class="container text-center">
    <div class="card border-2 shadow my-7">
    <div class="card-body p-4">
    <h1 class=" text-white font-weight-light">agregarPersonas</h1>
    <p class="lead text-white-50">
    <div class="row">
        <div class="col-sm-12">
        <form action="servidor/agregarPersona.php" method="POST">
            <div class="col-sm-5">
                        <label for="nombre">Nombre</label>
                        <input type="text"  name="nombre" required class="form-control">
                    </div>
                    <div class="col-sm-5">
                        <label for="apellidoA">Apellido Paterno</label>
                        <input type="text" name="apellidoA"  required class="form-control">
                    </div>
                </div>      
                     
                    <div class="col-sm-5">
                        <label for="apellidoM">Apellido Materno</label>
                        <input type="text" name="apellidoM"  required class="form-control">
                    </div>
                    </div>
                    <div class="row mt-5">
                            <div class="col-sm-5">
                                <label for="sexo">Sexo</label>
                                <select name="sexo" id="sexo" required class="form-control">
                                    <option value="mujer">Hombre</option>
                                    <option value="hombre">Mujer</option>
                                </select>  
                               <div class="col"></div>
                                <div class="row mt-5">         
                                <div class="col-sm-6">

                        <label for="fecha">Seleccionar Fecha</label>
                        <input type="date" required class="form-control" name="fecha" id="fecha">
                        </div> 
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-sm-5">
                    <label for="matricula">Matricula</label>
                        <input type="number" name="matricula" required class="form-control">
                    </div>
                    <div class="col-sm-5">
                        <label for="especialidad">especialidad</label>
                        <input type="text" name="especialidad" required class="form-control">
                    </div>
                    </div>
                    <div class="col-sm-12">
                    </div>
                </div>
                <br>

                <div class="col-sm-5">
                <button class="btn btn-primary">Agregar</button>
                </div>
            </form>
    
    <br>
    
    <div class="row">
        <div class="col-sm-12">
            
            <div id="tablaPersona"></div>
        </div>
    
</p>
</div>
<?php  include 'footer.php'; ?>
<script>
    $(document).ready(function(){
        $('#tablaPersona').load('tablaPersona.php');
    });
</script>
            