function base_url(withindex) {
    var baseUrl = $('#base-url').val()
    return withindex ? baseUrl+"index.php/" : baseUrl
}

function form_validate(selector) {
    var form = $(selector)
    var formValide = true
    form.find('input').each(function() {
        var input = $(this)
        if(input.attr('type') == "text") {
            if(input.attr('required') && $.trim(input.val()) == "") {
                input.addClass('hasError')
                input.parent().find('small.error').html('Champ requis').show()
                formValide = false
            } else {
                input.removeClass('hasError')
                input.parent().find('small.error').hide()
            }

            if(input.attr('validation-type')) {//Add here if there is exception of validation
                if(input.attr('validation-type') == "phone-number") {
                    if(!input.val().match(/^\+\d{12}$/) && !input.val().match(/^0\d{9}$/)) {
                        input.addClass('hasError')
                        input.parent().find('small.error').html('Numéro de téléphone incorrect').show()
                        formValide = false
                    }
                } else if(input.attr('validation-type') == "cin") {
                    if(!input.val().match(/^[1-9]\d{11}$/)) {
                        input.addClass('hasError')
                        input.parent().find('small.error').html('Numéro CIN incorrect').show()
                        formValide = false
                    }
                }
            }
        } else if(input.attr('type') == "email") {
            if(input.attr('required') && $.trim(input.val()) == "") {
                input.addClass('hasError')
                input.parent().find('small.error').html('Champ requis').show()
                formValide = false
            } else if(!$.trim(input.val()).match(/\S+@\S+\.\S+/)) {
                input.addClass('hasError')
                input.parent().find('small.error').html('Email invalide').show()
                formValide = false
            } else {
                input.removeClass('hasError')
                input.parent().find('small.error').hide()
            }
        } else if(input.attr('type') == "number") {
            if(input.attr('required') && $.trim(input.val()) == "") {
                input.addClass('hasError')
                input.parent().find('small.error').html('Champ requis').show()
                formValide = false
            } else if(!$.trim(input.val()).match(/\d+\.?\d*/)) {
                input.addClass('hasError')
                input.parent().find('small.error').html('Valeur incorrect').show()
                formValide = false
            } else {
                input.removeClass('hasError')
                input.parent().find('small.error').hide()
            }
        } else if(input.attr('type') == "password" && input.is(':visible')) {
            var strongPassRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.{8,})/
            if($.trim(input.val()) == "") {
                input.addClass('hasError')
                input.parent().find('small.error').html('Champ requis').show()
                formValide = false
            } else if(!$.trim(input.val()).match(strongPassRegex)) {
                input.addClass('hasError')
                input.parent().find('small.error').html('Un mot de passe doit être composé de lettres minuscules, majuscules, au moins un chiffre et de longueur 8 caractères minimum').show()
                formValide = false
            } else {
                input.removeClass('hasError')
                input.parent().find('small.error').hide()
            }
        }
    })
    return formValide
}

function getRandomInteger(min, max) {
    return Math.floor(Math.random() * (max - min) ) + min;
}