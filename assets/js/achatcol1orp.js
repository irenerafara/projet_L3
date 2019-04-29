$(document).ready(function() {
    $('#form-save-achatcol1orp').on('submit', function(e) {
        e.preventDefault();
        if(form_validate('#form-save-achatcol1orp')){
            var formdata = $( this ).serialize()
            $.ajax({
                url: base_url(true)+"achatcol1orp/enregistrer_achatcol1orp",
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

    $('#button-save-achatcol1orp').on('click', function() {
        $('#form-save-achatcol1orp .modal-title').html('Ajouter achat orpailleur')
        $('#form-save-achatcol1orp input').val('')
        
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

function edit_achatcol1orp(id) {
    var tr = $('#achatcol1orp-'+id)
    var info = tr.attr('id').split('-')
    $('#form-save-achatcol1orp .modal-title').html('Editer achatcol1');
    $('#IDAchatCol1Orp').val(info[1])
    
    $('#IDCollecteurCat1').val(tr.find('td').eq(0).html())
    $('#IDOrpailleur').val(tr.find('td').eq(1).html())
    $('#Date').val(tr.find('td').eq(2).html())
    $('#Quantite').val(tr.find('td').eq(3).html())
    $('#PrixUnitaire').val(tr.find('td').eq(4).html())
    $('#PrixTotale').val(tr.find('td').eq(5).html())
    $('#addachatcol1orpModal').modal('show')
}


function delete_achatcol1orp(id) {
    if(confirm('Voulez-vous supprimer cet achatorpailleur ?')) {
        $.ajax({
            url: base_url(true)+"achatcol1orp/supprimer_achatcol1orp/"+id,
            type: "POST",
            dataType: "JSON",
            success: function(data) {
                if(data.status == 1) {
                    window.location.reload
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