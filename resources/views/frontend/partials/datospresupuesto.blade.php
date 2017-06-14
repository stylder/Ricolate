<div class="header-tags">
    <div class="overflow-h">
        <h2>Solicitud Presupuesto</h2>
        <p>Revisar datos de presupuesto</p>
        <i class="rounded-x fa fa-home"></i>
    </div>
</div>
<section class="billing-info">
    <div class="row">
        <div class="col-md-6 md-margin-bottom-40">
            <h2 class="title-type">Datos Solicitante</h2>
            <div class="billing-info-inputs checkbox-list">


                <div class="row">
                    <div class="col-sm-6">
                        <input type="text" placeholder="Nombre" name="nombre"  id="name" for="nombre" class="form-control required" required>
                    </div>

                    <div class="col-sm-6">
                        <input type="text" placeholder="Apellidos" name="apellidos" class="form-control required">
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">

                        <input type="email" placeholder="Correo" name="correo" for="correo" class="form-control required" required>
                    </div>
                    <div class="col-sm-6">

                        <input placeholder="Teléfono" name="telefono" class="form-control required">
                    </div>
                </div>
                <div class="row">
                	<div class="col-sm-6">
                		<input type="text" placeholder="Calle" name="calle" class="form-control required">
                	</div>
                	<div class="col-sm-6">
                		<input  type="text" placeholder="Número" name="numero" class="form-control required">
                	</div>
                </div>


                <input  type="text" placeholder="Colonia" name="colonia" class="form-control required">
                <input type="text" placeholder="Municipio" name="municipio" class="form-control required">
                <div class="row">
                    <div class="col-sm-6">
                        <input type="text" placeholder="Estado" name="estado" class="form-control required">
                    </div>
                    <div class="col-sm-6">
                        <input type="text" placeholder="Código Postal" name="postal" class="form-control required">
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <h2 class="title-type">Datos empresa</h2>
            <div class="billing-info-inputs checkbox-list">
                <input type="text" placeholder="Nombre de la Compañía" name="compania" class="form-control">
                <input type="text" placeholder="RFC" name="rfc" class="form-control">
            </div>



            <h2 class="title-type">Notas</h2>
            <div class="billing-info-inputs checkbox-list">
                <textarea type="text" placeholder="Instrucciones o notas"
                          value=""
                          name="notas" class="form-control"
                          rows="5" cols="50">
                </textarea>
            </div>
        </div>
    </div>
</section>