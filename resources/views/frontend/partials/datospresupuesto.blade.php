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
                        <input id="name" type="text" placeholder="Nombre" name="firstname" class="form-control required">
                        <input id="email" type="text" placeholder="Correo" name="email" class="form-control required email">
                    </div>
                    <div class="col-sm-6">
                        <input id="surname" type="text" placeholder="Apellidos" name="lastname" class="form-control required">
                        <input id="phone" type="tel" placeholder="Teléfono" name="phone" class="form-control required">
                    </div>
                </div>
                <div class="row">
                	<div class="col-sm-6">
                		<input id="billingAddress" type="text" placeholder="Calle" name="address1" class="form-control required">		
                	</div>
                	<div class="col-sm-6">
                		<input  type="text" placeholder="Número" name="address1" class="form-control required">
                	</div>
                </div>
                
                
                <input  type="text" placeholder="Colonia" name="address2" class="form-control required">
                <input type="text" placeholder="Municipio" name="address2" class="form-control required">
                <div class="row">
                    <div class="col-sm-6">
                        <input id="city" type="text" placeholder="Estado" name="city" class="form-control required">
                    </div>
                    <div class="col-sm-6">
                        <input id="zip" type="text" placeholder="Código Postal" name="zip" class="form-control required">
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <h2 class="title-type">Datos empresa</h2>
            <div class="billing-info-inputs checkbox-list">

                <input id="shippingAddress" type="text" placeholder="Nombre de la Compañía" name="address1" class="form-control">
                <input id="shippingAddress2" type="text" placeholder="RFC" name="address2" class="form-control">
            </div>



            <h2 class="title-type">Notas</h2>
            <div class="billing-info-inputs checkbox-list">

                <textarea id="shippingAddress" type="text" placeholder="Instrucciones o notas"
                          name="address1" class="form-control"
                          rows="5" cols="50">
                </textarea>
            </div>
        </div>
    </div>
</section>