$(document).ready(function() {
    $('#form-add-orpailleur').on('submit', function(e) {
        e.preventDefault();
        if(form_validate('#form-add-orpailleur')){
            var formdata = $( this ).serialize()
            $.ajax({
                url: base_url(true)+"orpailleur/enregistrer_orpailleur",
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
                    alert('Echec de l\'enregistrement de l\'orpailleur')
                }
            })
        }
    })

    $('#button-save-orpailleur').on('click', function() { 
         $('#form-add-orpailleur .modal-title').html('Ajouter orpailleur')
         $('#form-add-orpailleur input').val('')
    })

})

function edit_orpailleur(id) {
    console.log('#orpailleur')
    var tr = $('#orpailleur-'+id)
    $('#IDOrpailleur').val(id)
    $('#NomOrpailleur').val(tr.find('td').eq(0).html())
    $('#PrenomOrpailleur').val(tr.find('td').eq(1).html())
    $('#CINOrpailleur').val(tr.find('td').eq(2).html())
    $('#DateCINOrpailleur').val($.trim(tr.find('td').eq(3).html()))
    $('#LieuCINOrpailleur').val(tr.find('td').eq(4).html())
    $('#DuplicataCINOrpailleur').val(tr.find('td').eq(5).html())
    $('#ContactOrpailleur').val(tr.find('td').eq(6).html())
    $('#AdresseOrpailleur').val(tr.find('td').eq(7).html())
    $('#addOrpailleurModal').modal('show')
}

function delete_orpailleur(id) {
    if(confirm('Voulez-vous supprimer cet orpailleur ?')) {
        $.ajax({
            url: base_url(true)+"orpailleur/supprimer_orpailleur/"+id,
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
                alert('Echec de la suppression de l\'orpailleur')
            }
        })
    }
}