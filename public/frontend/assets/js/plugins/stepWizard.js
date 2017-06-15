
var StepWizard = function () {

    return {


        initStepWizard: function () {

            var form = $(".shopping-cart");
            console.log($('.shopping-cart'));
                form.validate({
                    rules: {
                        nombre: {
                            required: true,
                            minlength: 3,
                            letters: true
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
                        },
                    },
                    messages: {
                        nombre: "Please specify your name (only letters and spaces are allowed)",
                        correo: "Please specify a valid email address"
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
