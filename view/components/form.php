<div class="container mt-5">
        <div class="row">
            <div class="col-md-3">
            <h2 class="text-center">Ingresar nuevo libro</h2>
                <form action="./view/logic/insertar.php" method="post">
                    <input type="text" name="isbn" class="form-control mb-3" placeholder="ISBN del libro">
                    <input type="text" name="titulo" class="form-control mb-3" placeholder="Título del libro">
                    <input type="text" name="autor" class="form-control mb-3" placeholder="Autor del libro">
                    
                    <textarea type= "text" name="descripcion" class="form-control mb-3" placeholder="Escribe una descripción aquí..."></textarea>
                    <input type="url" name="portada" id="portada" class="form-control mb-3" placeholder="Url"/>
                    <input type="submit" value="Insertar" class="btn btn-primary">
                </form>
            </div>
        </div>