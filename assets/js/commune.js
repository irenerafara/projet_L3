$(document).ready(function() {
    $('#form-save-commune').on('submit', function(e) {
        e.preventDefault();
        if(form_validate('#form-save-commune')){
            var formdata = $( this ).serialize()
            $.ajax({
                url: base_url(true)+"commune/enregistrer_commune",
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
                    alert('Echec de l\'enregistrement de la commune')
                }
            })
        }
    })

    $('#button-save-commune').on('click', function() {
        $('#form-save-commune .modal-title').html('Ajouter commune')
        $('#form-save-commune input').val('')
    })

})

function edit_commune(id) {
    var tr = $('#commune-'+id)
    $('#form-save-commune .modal-title').html('Editer commune')
    $('#IDCommune').val(id)
    $('#NomCommune').val(tr.find('td').eq(0).html())
    $('#NomMaire').val(tr.find('td').eq(1).html())
    $('#PrenomMaire').val(tr.find('td').eq(2).html())
    $('#ContactMaire').val($.trim(tr.find('td').eq(3).html()))
    $('#addCommuneModal').modal('show')
}

function delete_commune(id) {
    if(confirm('Voulez-vous supprimer cette commune ?')) {
        $.ajax({
            url: base_url(true)+"commune/supprimer_commune/"+id,
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
                alert('Echec de la suppression de la commune')
            }
        })
    }
}