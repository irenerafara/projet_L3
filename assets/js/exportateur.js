$(document).ready(function() {
    $('#form-add-exportateur').on('submit', function(e) {
        e.preventDefault();
        if(form_validate('#form-add-exportateur')){
            var formdata = $( this ).serialize()
            $.ajax({
                url: base_url(true)+"exportateur/enregistrer_exportateur",
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
                    alert('Echec de l\'enregistrement de l\'exportateur')
                }
            })
        }
    })

    $('#button-add').on('click', function() {
        $('#form-add-exportateur input').val('')
    })

})

function edit_exportateur(id) {
    var tr = $('#exportateur-'+id)
    $('#IDExportateur').val(id)
    $('#NomSocieteExportateur').val(tr.find('td').eq(0).html())
    $('#NomExportateur').val(tr.find('td').eq(1).html())
    $('#PrenomExportateur').val(tr.find('td').eq(2).html())
    $('#StatExportateur').val(tr.find('td').eq(3).html())
    $('#NifExportateur').val($.trim(tr.find('td').eq(4).html()))
    $('#FiscalExportateur').val(tr.find('td').eq(5).html())
    $('#ContactExportateur').val(tr.find('td').eq(6).html())
    $('#AdresseExportateur').val(tr.find('td').eq(6).html())
    $('#MandataireExportateur').val(tr.find('td').eq(6).html())
    $('#addUserModal').modal('show')
}

function delete_exportateur(id) {
    if(confirm('Voulez-vous supprimer cet exportateur ?')) {
        $.ajax({
            url: base_url(true)+"exportateur/supprimer_exportateur/"+id,
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
                alert('Echec de la suppression de l\'exportateur')
            }
        })
    }
}