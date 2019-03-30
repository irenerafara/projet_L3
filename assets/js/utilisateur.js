var randomPassWord = ['TempPass484YS5','TempPassP45Y95','TempPassT7Uw58', 'TempPassU1313FG', 'PassTemp1516UhUs', "PassTempU1516X", "PassX156Temp4R", "TempEX1564Gpass"]
$(document).ready(function() {
    $('#form-add-user').on('submit', function(e) {
        e.preventDefault();
        var formdata = $( this ).serialize()
        if(form_validate('#form-add-user')) {
            $.ajax({
                url: base_url(true)+"utilisateur/enregistrer_utilisateur",
                type: "POST",
                dataType: "JSON",
                data: formdata,
                success: function(data) {
                    if(data.status == 1) {
                        window.location.reload()
                    } else {
                        alert('Une erreur est survenue. Veuillez réessayer!')
                    }
                },
                error: function(err) {
                    console.log(err)
                    alert('Echec de l\'enregistrement de l\'utilisateur')
                }
            })
        }
    })

    $('#button-add').on('click', function() {
        $('#form-add-user input').val('')
        $('#check-group, #reinit-group').hide()
        $('#password-group').show()
    })

    $('#reinit-password').on('change', function() {
        if($(this).is(':checked')) {
            $('#reinit-group').show()
            var indexpass = getRandomInteger(0, randomPassWord.length)
            var passWord = randomPassWord[indexpass]
            $("#random-input, #MotDePasseUtilisateur").val(passWord)
        } else {
            $('#reinit-group').hide()
            $("#random-input, #MotDePasseUtilisateur").val("")
        }
    })
})

function edit_user(id) {
    var tr = $('#user-'+id)
    $('#IDUtilisateur').val(id)
    $('#NomUtilisateur').val(tr.find('td').eq(0).html())
    $('#PrenomUtilisateur').val(tr.find('td').eq(1).html())
    $('#AdresseUtilisateur').val(tr.find('td').eq(2).html())
    $('#ContactUtilisateur').val(tr.find('td').eq(3).html())
    $('#TypeUtilisateur').val($.trim(tr.find('td').eq(4).html()))
    $('#EmailUtilisateur').val(tr.find('td').eq(5).html())
    $('#MotDePasseUtilisateur').val('').parent().hide()
    $('#check-group').show()
    $('#reinit-group').hide()
    $('#addUserModal').modal('show')
}

function delete_user(id) {
    if(confirm('Voulez-vous supprimer cet utilisateur ?')) {
        $.ajax({
            url: base_url(true)+"utilisateur/supprimer_utilisateur/"+id,
            type: "POST",
            dataType: "JSON",
            success: function(data) {
                if(data.status == 1) {
                    window.location.reload()
                } else {
                    alert('Une erreur est survenue. Veuillez réessayer!')
                }
            },
            error: function(err) {
                console.log(err)
                alert('Echec de la suppression de l\'utilisateur')
            }
        })
    }
}