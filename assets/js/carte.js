$(document).ready(function() {
    $('#form-save-carte').on('submit', function(e) {
        e.preventDefault();
        if(form_validate('#form-save-carte')){
            var formdata = $( this ).serialize()
            $.ajax({
                url: base_url(true)+"carte/enregistrer_carte",
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
                    alert('Echec de l\'enregistrement de la carte')
                }
            })
        }
    })

    $('#button-save-carte').on('click', function() {
        $('#form-save-carte .modal-title').html('Ajouter carte')
        $('#form-save-carte input').val('')
    })

})

function edit_carte(id) {
    var tr = $('#carte-'+id)
    $('#IDCarte').val(id)
    $('#NumCarte').val(tr.find('td').eq(0).html())
    $('#DateDemandeCarte').val(tr.find('td').eq(2).html())
    $('#DateObtentionCarte').val(tr.find('td').eq(3).html())
    $('#Statut').val($.trim(tr.find('td').eq(4).html()))
    $('#addCommuneModal').modal('show')
}

function delete_carte(id) {
    if(confirm('Voulez-vous supprimer cet carte ?')) {
        $.ajax({
            url: base_url(true)+"carte/supprimer_carte/"+id,
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
                alert('Echec de la suppression de la carte')
            }
        })
    }
}