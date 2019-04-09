$(document).ready(function() {
    $('#form-save-formation').on('submit', function(e) {
        e.preventDefault();
        if(form_validate('#form-save-formation')){
            var formdata = $( this ).serialize()
            $.ajax({
                url: base_url(true)+"formation/enregistrer_formation",
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
                    alert('Echec de l\'enregistrement de la formation')
                }
            })
        }
    })

    $('#button-save-formation').on('click', function() {
        $('#form-save-formation .modal-title').html('Ajouter formation')
        $('#form-save-formation input').val('')
    })

    $('.edit-details-formation').on('click', function() {
        var idformation = $(this).attr('id').split('-')[1]
        var tr = $(this).parent().parent().parent()
        var info_formation = tr.find('td').eq(3).html()+" ( "+tr.find('td').eq(1).html()+" à "+tr.find('td').eq(2).html()+" )"
        $('#title-formation').html(info_formation)
        $('#list-container').hide()
        $.ajax({
            url: base_url(true)+'formation/load_detailsformation/'+idformation,
            success: function(data) {
                $('#details-container').show()
                $('#details-content').html(data)
            },
            error: function(err) {
                alert('Echec du chargement de la page')
            }
        })
    })

    $('#back-formation').on('click', function() {
        $('#details-container').hide()
        $('#list-container').show()
    })

    $(document).on('change', '#choix-assistants', function() {
        $('input[type=checkbox]').prop('checked', false)
        if($(this).val() == 1) {
            $('#list-cc1').show()
            $('#list-orp').hide()
        } else {
            $('#list-cc1').hide()
            $('#list-orp').show()
        }
    })

    $(document).on('click', '#affectation-formateur', function(){
        console.log('call')
        $('.check-user:checked').each(function() {
            console.log('checked')
            var iduser = $(this).attr('id').split('-')[1]
            var idformation = $('#formation-edit').val()
            var li = $(this).parent()
            var nomPrenom = li.find('label').html()
            $.ajax({
                url: base_url(true)+'formation/update_formation',
                type: "POST",
                data: {iduser: iduser, idformation: idformation, type: "add", infos: "formateur"},
                dataType: "JSON",
                success: function(data) {
                    if(data.status == 1) {
                        li.remove()
                        $('#formateur .wrapper-affected ul').append('<li class="list-group-item d-flex justify-content-between align-items-center">'+
                                                                        '<span class = "nom-prenom">'+nomPrenom+'</span>'+
                                                                        '<i class="fas fa-user-times float-right remove-formateur" id = "rmuser-'+iduser+'"></i>'+
                                                                    '</li>')
                    } else {
                        alert('Une erreur s\'est produite ')
                    }
                },
                error: function() {
                    alert('Echec de l\'affectation')
                }
            })
        })
    })

    $(document).on('click', '.remove-formateur', function() {
        var iduser = $(this).attr('id').split('-')[1]
        var idformation = $('#formation-edit').val()
        var li = $(this).parent()
        var nomPrenom = li.find('.nom-prenom').html()
        $.ajax({
            url: base_url(true)+'formation/update_formation',
            type: "POST",
            data: {iduser: iduser, idformation: idformation, type: "delete", infos: "formateur"},
            dataType: "JSON",
            success: function(data) {
                if(data.status == 1) {
                    li.remove()
                    $('#formateur .wrapper-affect ul').append('<li class="list-group-item d-flex justify-content-between align-items-center">'+
                                                                    '<input type = "checkbox" class = "check-user" id = "user-'+iduser+'">'+
                                                                    '<label for = "user-'+iduser+'">'+
                                                                        nomPrenom+
                                                                    '</label>'+
                                                                '</li>')
                } else {
                    alert("Une erreur s'est produite")
                }
            },
            error: function() {
                alert('Echec de la désaffectation')
            }
        })
    })
    
    

    $(document).on('click', '#affectation-assistant', function() {
        var typeAssistant = $('#choix-assistants').val()
        var idformation = $('#formation-edit').val()
        $('#assistants .wrapper-affect input[type=checkbox]:checked').each(function() {
            var iduser = $(this).attr('id').split('-')[1]
            var li = $(this).parent()
            var nomPrenom = li.find('label').html()
            $.ajax({
                url: base_url(true)+'formation/update_formation',
                type: "POST",
                data: {iduser: iduser, idformation: idformation, type: "add", infos: typeAssistant == 1 ? "assister_collecteurcat1" : "assister_orpailleur"},
                dataType: "JSON",
                success: function(data) {
                    if(data.status == 1) {
                        li.remove()
                        $('#assistants .wrapper-affected ul').append('<li class="list-group-item d-flex justify-content-between align-items-center" type-assistant = "'+typeAssistant+'">'+
                                                                        '<span class = "nom-prenom">'+nomPrenom+'</span>'+
                                                                        '<i class="fas fa-user-times remove-assistant float-right" id = "rmassist-'+iduser+'"></i>'+
                                                                    '</li>')
                    } else {
                        alert('Une erreur s\'est produite ')
                    }
                },
                error: function() {
                    alert('Echec de l\'affectation')
                }
            })
        })
    })
})
$(document).on('click', '.remove-assistant', function() {
    var iduser = $(this).attr('id').split('-')[1]
    var idformation = $('#formation-edit').val()
    var li = $(this).parent()
    var nomPrenom = li.find('.nom-prenom').html()
    var typeAssistant = li.attr('type-assistant')
    $.ajax({
        url: base_url(true)+'formation/update_formation',
        type: "POST",
        data: {iduser: iduser, idformation: idformation, type: "delete", infos: typeAssistant == 1 ? "assister_collecteurcat1" : "assister_orpailleur"},
        dataType: "JSON",
        success: function(data) {
            if(data.status == 1) {
                li.remove()
                $('#assistants .wrapper-affect ul').append('<li class="list-group-item d-flex justify-content-between align-items-center">'+
                                                                '<input type = "checkbox" class = "check-user" id = "user-'+iduser+'">'+
                                                                '<label for = "user-'+iduser+'">'+
                                                                    nomPrenom+
                                                                '</label>'+
                                                            '</li>')
            } else {
                alert("Une erreur s'est produite")
            }
        },
        error: function() {
            alert('Echec de la désaffectation')
        }
    })
})


function edit_formation(id) {
    var tr = $('#formation-'+id)
    $('#form-save-formation .modal-title').html('Editer formation')
    $('#IDFormation').val(id)
    $('#DateDebutFormation').val(tr.find('td').eq(0).html())
    $('#DateFinFormation').val(tr.find('td').eq(1).html())
    $('#MotifMissionFormation').val(tr.find('td').eq(2).html())
    $('#DetailFormation').val(tr.find('td').eq(3).html())
    $('#addFormationModal').modal('show')
}

function delete_formation(id) {
    if(confirm('Voulez-vous supprimer cette formation ?')) {
        $.ajax({
            url: base_url(true)+"formation/supprimer_formation/"+id,
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
                alert('Echec de la suppression de la formation')
            }
        })
    }
}