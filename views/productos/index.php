<h1 class="text-center">FORMULARIO DE PRODUCTOS</h1>
<div class="row justify-content-center mb-5">
    <form class="col-lg-8 border bg-light p-3" id="formularioProducto">
        <input type="hidden" name="producto_id" id="producto_id">
        <div class="row mb-3">
            <div class="col">
                <label for="producto_nombre">Ingrese del producto</label>
                <input type="text" name="producto_nombre" id="producto_nombre" class="form-control">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="producto_precio">Ingrese el precio del producto</label>
                <input type="text" name="producto_precio" id="producto_precio" class="form-control">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <button type="submit" form="formularioProducto" id="btnGuardar" data-saludo="hola" data-saludo2="hola2" class="btn btn-primary w-100">Guardar</button>
            </div>
            <div class="col">
                <button type="button" id="btnModificar" class="btn btn-warning w-100">Modificar</button>
            </div>
            <div class="col">
                <button type="button" id="btnBuscar" class="btn btn-info w-100">Buscar</button>
            </div>
            <div class="col">
                <button type="button" id="btnCancelar" class="btn btn-danger w-100">Cancelar</button>
            </div>
        </div>
    </form>
</div>

<div class="row justify-content-center">
    <h1 class="text-center">LISTADO DE PRODUCTO</h1>
    <div class="col table-responsive">
       
        <table id="tablaProducto" class="table table-bordered table-hover">
        </table>
    </div>
</div>

<script src="<?= asset('./build/js/productos/index.js')  ?>"></script>