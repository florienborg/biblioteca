<!-- <div class="container mt-5">
        <div class="row">
            <div class="col-ml-5 fw-semibold" style="color:#581C87;">
            <h2 class="text-center mb-4 mt-3">Introduce el libro nuevo</h2>
                <form action="./view/logic/insertar.php" method="post">
                    
                    <label for="" class="mt-4" style="font-size:17px">Código ISBN</label>
                    <input type="text" name="isbn" class="form-control mb-3 mt-2" style="background:#D1D1D1; height: 50px" placeholder="ISBN del libro">
                    
                    <label for="" class="mt-4" style="font-size:17px">Título del libro</label>
                    <input type="text" name="titulo" class="form-control mb-3 mt-2" style="background:#D1D1D1; height: 50px" placeholder="Título del libro">
                    
                    <label for="" class="mt-4" style="font-size:17px">Autor</label>
                    <input type="text" name="autor" class="form-control mb-3 mt-2" style="background:#D1D1D1; height: 50px" placeholder="Autor del libro">
                    
                    <label for="" class="mt-4" style="font-size:17px">Descripción</label>
                    <textarea type= "text" name="descripcion" class="form-control mb-3 mt-2"  style="background:#D1D1D1; height:100px" placeholder="Escribe una descripción aquí..."></textarea>
                   
                   <label for="" class="mt-4" style="font-size:17px">Subir portada</label>
                    <input type="url" name="portada" id="portada" class="form-control mb-3 mt-2" style="border: 2px dashed #adb5bd; height: 50px; text-align: center" placeholder="Upload a file or drag and drop PNG, JPG, SVG up to 10MB."/>
                    <input type="submit" value="Guardar libro" class="btn w-100 mb-3 mt-3"  style="background:#C084FC; color: white; font-size:16px">
                </form>
            </div>
        </div>
 -->



<div class="container mt-5">
  <div class="row fw-semibold" style="color:#581C87;">      
    <h2 class="text-center mb-5 mt-3">Introduce el libro nuevo</h2>
    <div class="col-md-6 mb-4" >
      <form action="./view/logic/insertar.php" method="post">
        
        <div class="form-group">
            <label for="" style="font-size:17px">Código ISBN</label>
            <input type="text" name="isbn" class="form-control mb-3 mt-2" style="background:#D1D1D1; height: 50px" placeholder="ISBN del libro">
        </div>

        <div class="form-group">
             <label for="" class="mt-4" style="font-size:17px">Título del libro</label>
             <input type="text" name="titulo" class="form-control mb-3 mt-2" style="background:#D1D1D1; height: 50px" placeholder="Título del libro">
        </div>

        <div class="form-group">
             <label for="" class="mt-4" style="font-size:17px">Autor</label>
             <input type="text" name="autor" class="form-control mb-3 mt-2" style="background:#D1D1D1; height: 50px" placeholder="Autor del libro">
        </div>
        </div>
      
        <div class="col-md-6">
        <div class="form-group">
            <label for="" style="font-size:17px">Descripción</label>
            <textarea type= "text" name="descripcion" class="form-control mb-3 mt-2"  style="background:#D1D1D1; height:110px" placeholder="Escribe una descripción aquí..."></textarea>
        </div>

        <div class="form-group">
            <label for="" class="mt-4" style="font-size:17px">Subir portada</label>
            <input type="url" name="portada" id="portada" class="form-control mb-3 mt-2" style="border: 2px dashed #adb5bd; height: 110px; text-align: center" placeholder="Upload a file or drag and drop PNG, JPG, SVG up to 10MB."/>
        </div>
        
      </form> 
      
    </div>
    <div class="text-center">
        <div>
            <input type="submit" value="Guardar" class="btn w-25 mb-3 mt-3"  style="background:#C084FC; color: white; font-size:16px;">
        </div
    </div>
  </div>
</div> 
