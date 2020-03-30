var poese = function(){
    return {
        validacionGeneral: function(id, reglas, mensajes){
            const formulario = $('#' + id);
            formulario.validate({
                rules: reglas,
                messages: mensajes,
                errorElement: 'span',
                errorClass: 'help-block held-block--error',
                focusInvalid: false,
                ignore: "",
                highlight: function(element, errorClass, validClass){
                    $(element).closest('.form-group').addClass('has-error');
                },
                unhighight: function (element) {
                    $(element).closest('.form-group').removeClass('has-error');
                },
                success: function (label) {
                    label.closest('.form-group').removeClass('has-error');
                },
                errorPlacement: function (error, element) {
                    if($(element).is('select') && element.hasClass('bs-select')){
                        error.insertAfter(element);
                    }else if ($(element).is('select') && element.hasClass('select2-hidden-accessible')){
                        element.next().after(error);
                    }else if (element.attr("data-error-container")){
                        error.appendTo(element.attr("data-error-container"));
                    }else {
                        error.insertAfter(element);
                    }
                },
                invalidHandler: function (event, validator) {
                    
                },
                submitHandler: function (form) {
                    return true;
                }
            });
        },
        notificaciones: function (mensaje, titulo, tipo) {
            toastr.options = {
                closeButton: true,
                newestOnTop: true,
                positionClass: 'toast-top-right',
                preventDuplicates: true,
                timeOut: '5000'
            };
            if (tipo == 'error') {
                toastr.error(mensaje, titulo);
            } else if (tipo == 'success') {
                toastr.success(mensaje, titulo);
            } else if (tipo == 'info') {
                toastr.info(mensaje, titulo);
            } else if (tipo == 'warning') {
                toastr.warning(mensaje, titulo);
            }
        },
    }

}();