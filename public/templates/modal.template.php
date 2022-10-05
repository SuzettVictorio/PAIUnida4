<div class="modal fade" id="addProduct" tabindex="-1" aria-labelledby="addProduct" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Crear nuevo producto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="../../app/productController.php" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="input-group flex-nowrap">
                        <input type="file" name="imagen" class="form-control" placeholder="Seleccione la imagen del producto">
                    </div>
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping">Nombre del producto</span>
                        <input type="text" name="name" class="form-control" placeholder="Nombre del producto">
                    </div>
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping">Descripción</span>
                        <input type="text" name="description" class="form-control" placeholder="Descripción del producto">
                    </div>
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping">Caracteristícas</span>
                        <input type="text" name="features" class="form-control" placeholder="Características del producto">
                    </div>
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping">Marca</span>
                        <input type="text" name="brand_id" class="form-control" placeholder="Marca del producto">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Crear</button>
                    <input type="hidden" name="action" value="create">
                </div>
            </form>
        </div>
    </div>
</div>


<div class="modal fade" id="updateProduct" tabindex="-1" aria-labelledby="updateProduct" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modificar producto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="../../app/productController.php" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping">Nombre</span>
                        <input type="text" id="nameU"  name="name" class="form-control" placeholder="">
                    </div>
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping">Descripción</span>
                        <input type="text" id="descriptionU" name="description" class="form-control" placeholder="">
                    </div>
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping">Características</span>
                        <input type="text" id="featuresU" name="features" class="form-control" placeholder="">
                    </div>
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping">Marca</span>
                        <input type="text" id="brand_idU" name="brand_id" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Editar</button>
                    <input type="hidden" name="action" value="update">
                    <input type="hidden" name="objetivo" id="objetivoId">
                </div>
            </form>
        </div>
    </div>
</div>