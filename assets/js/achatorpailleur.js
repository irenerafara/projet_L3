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
    $('#PrixUnitaire, #Quantite').on('keyup',function(){
        var quantite = $('#Quantite').val()
        var prixUnitaire = $('#PrixUnitaire').val()
        if (quantite != "" && prixUnitaire != "") {
            quantite = parseFloat(quantite)
            prixUnitaire = parseFloat(prixUnitaire)
            $('#PrixTotale').val(quantite*prixUnitaire*1000)

        }
})

function edit_achatorpailleur(id) {
    var tr = $('#achatorpailleur-'+id)
    var info = tr.attr('id').split('-')
    $('#form-save-achatorpailleur .modal-title').html('Editer achatorpailleur');
    $('#IDAchatOrpailleur').val(info[1])
    
    $('#IDComptoirDeFonte').val(tr.find('td').eq(0).html())
    $('#IDOrpailleur').val(tr.find('td').eq(1).html())
    $('#Date').val($.trim(tr.find('td').eq(2).html()))
    $('#Quantite').val(tr.find('td').eq(3).html())
    $('#PrixUnitaire').val(tr.find('td').eq(4).html())
    $('#PrixTotale').val(tr.find('td').eq(5).html())
    $('#addachatorpailleurModal').modal('show')
}


function delete_achatorpailleur(id) {
    if(confirm('Voulez-vous supprimer cet achatorpailleur ?')) {
        $.ajax({
            url: base_url(true)+"achatorpailleur/supprimer_achatorpailleur/"+id,
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