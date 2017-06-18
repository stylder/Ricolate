
    var StepWizard = function () {

        return {


            initStepWizard: function () {

                var form = $(".shopping-cart");

                form.validate({
                    rules: {
                        confirm: {
                            equalTo: "#password"
                        }
                    },
/*                    rules: {
                        nombre: {
                            required: true
                        },
                        correo: {
                            required: true,
                            email: true
                        },
                        apellidos: {
                            required: true
                        },
                        telefono: {
                            required: true
                        },
                        calle: {
                            required: true
                        },
                        numero: {
                            required: true
                        },
                        colonia: {
                            required: true
                        },
                        municipio: {
                            required: true
                        },
                        estado: {
                            required: true
                        },
                        postal: {
                            required: true
                        }
                    },
 */
                    messages: {
                        nombre: "Campo necesario",
                        apellidos: "Campo necesario",
                        correo: {
                            required: "Campo necesario",
                            email: "Inserta un correo valido"
                        },
                        telefono: "Campo necesario",
                        calle: "Campo necesario",
                        numero: "Campo necesario",
                        colonia: "Campo necesario",
                        municipio: "Campo necesario",
                        estado: "Campo necesario",
                        postal: "Campo necesario",
                    },
                    errorPlacement: function errorPlacement(error, element) { element.before(error); }
                });


                form.children("div").steps({
                    headerTag: ".header-tags",
                    bodyTag: "section",
                    transitionEffect: "fade",
                    onStepChanging: function (event, currentIndex, newIndex) {
                        // Allways allow previous action even if the current form is not valid!
                        if (currentIndex > newIndex)
                        {
                            return true;
                        }
                        form.validate().settings.ignore = ":disabled,:hidden";
                        return form.valid();
                    },
                    onFinishing: function (event, currentIndex) {
                        form.validate().settings.ignore = ":disabled";
                        return form.valid();
                    },
                    onFinished: function (event, currentIndex) {
                        form.submit();
                        alert("Enviado!");
                    }
                });
            }

        };
    }();
