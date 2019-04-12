$(document).ready(function() {
    $('#form-save-achatorpailleur').on('submit', function(e) {
        e.preventDefault();
        if(form_validate('#form-save-achatorpailleur')){
            var formdata = $( this ).serialize()
            $.ajax({
                url: base_url(true)+"achatorpailleur/enregistrer_achatorpailleur",
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
                    alert('Echec de l\'enregistrement des achats orpailleurs')
                }
            })
        }
    })

    $('#button-save-achatorpailleur').on('click', function() {
        $('#form-save-achatorpailleur .modal-title').html('Ajouter achat orpailleur')
        $('#form-save-achatorpailleur input').val('')
        
    })

})

function edit_achatorpailleur(id) {
    var tr = $('#achatorpailleur-'+id)
    $('#form-save-achatorpailleur .modal-title').html('Editer achatorpailleur')
    $('#IDOrpailleur').val(id)
    $('#IDComptoirDeFonte').val(id)
    $('#Date').val(tr.find('td').eq(0).html())
    $('#Quantite').val(tr.find('td').eq(1).html())
    $('#PrixUnitaire').val(tr.find('td').eq(2).html())
    $('#PrixTotale').val(tr.find('td').eq(3).html())
    $('#addCollecteurCat1Modal').modal('show')
}

function delete_achatorpailleur(id) {
    if(confirm('Voulez-vous supprimer cet achat orpailleur ?')) {
        $.ajax({
            url: base_url(true)+"achatorpailleur/supprimer_collecteur_cat1/"+id,
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
                alert('Echec de la suppression des achats orpailleurs')
            }
        })
    }
}