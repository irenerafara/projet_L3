$(document).ready(function() {
    $('#form-save-exportation').on('submit', function(e) {
        e.preventDefault();
        if(form_validate('#form-save-exportation')){
            var formdata = $( this ).serialize()
            $.ajax({
                url: base_url(true)+"exportation/enregistrer_exportation",
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
                    alert('Echec de l\'enregistrement de l\'exportation')
                }
            })
        }
    })

    $('#button-save-exportation').on('click', function() {
        $('#form-save-exportation .modal-title').html('Ajouter exportation')
        $('#form-save-exportation input').val('')
    })

})

function edit_exportation(id) {
    var tr = $('#exportation-'+id)
    $('#form-save-exportation .modal-title').html('Editer exportation')
    $('#IDExportation').val(id)
    $('#AnneeExportation').val($.trim(tr.find('td').eq(0).html()))
    $('#QuantiteExportation').val(tr.find('td').eq(1).html())
    $('#PrixUnitaireExportation').val(tr.find('td').eq(2).html())
    $('#PrixTotaleExportation').val(tr.find('td').eq(3).html())
    $('#addExportationModal').modal('show')
}

function delete_exportation(id) {
    if(confirm('Voulez-vous supprimer cette exportation ?')) {
        $.ajax({
            url: base_url(true)+"exportation/supprimer_exportation/"+id,
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
                alert('Echec de la suppression de l\'exportation')
            }
        })
    }
}