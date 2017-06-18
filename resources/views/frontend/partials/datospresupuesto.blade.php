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
                        <input type="text" placeholder="Nombre" name="nombre" id="nombre" class="form-control required">
                    </div>
                    <div class="col-sm-6">
                        <input type="text" placeholder="Apellidos" name="apellidos" id="apellidos"
                               class="form-control required">
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <input type="email" placeholder="Correo" name="correo" id="correo"
                               class="form-control required">
                    </div>
                    <div class="col-sm-6">
                        <input placeholder="Teléfono" name="telefono" id="telefono" class="form-control required">
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <input type="text" placeholder="Calle" name="calle" id="calle" class="form-control required">
                    </div>
                    <div class="col-sm-6">
                        <input type="text" placeholder="Número" name="numero" id="numero" class="form-control required">
                    </div>
                </div>


                <div class="row">
                    <div class="col-sm-12">
                        <input type="text" placeholder="Colonia" name="colonia" id="colonia"
                               class="form-control required">
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <input type="text" placeholder="Municipio" name="municipio" id="municipio"
                               class="form-control required">
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <input type="text" placeholder="Estado" name="estado" id="estado" class="form-control required">
                    </div>
                    <div class="col-sm-6">
                        <input type="text" placeholder="Código Postal" name="postal" id="postal"
                               class="form-control required">
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="row">

                <h2 class="title-type">Datos empresa</h2>
                <div class="billing-info-inputs checkbox-list">
                    <input type="text" placeholder="Nombre de la Compañía" name="compania" id="compania"
                           class="form-control">
                    <input type="text" placeholder="RFC" name="rfc" id="rfc" class="form-control">
                </div>


                <h2 class="title-type">Notas</h2>
                <div class="billing-info-inputs checkbox-list">
                      <textarea  name="notas" rows=3 cols=20 class="form-control"  name="notas" rows="5"
                                 placeholder="Si necesita, escriba aquí sus observaciones"></textarea>

                </div>
            </div>
        </div>
    </div>
</section>