$(document).ready(function() {
    $('#form-save-achatcccol2').on('submit', function(e) {
        e.preventDefault();
        if(form_validate('#form-save-achatcccol2')){
            var formdata = $( this ).serialize()
            $.ajax({
                url: base_url(true)+"achatcccol2/enregistrer_achatcccol2",
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
                    alert('Echec de l\'enregistrement des achats col2')
                }
            })
        }
    })

    $('#button-save-achatcccol2').on('click', function() {
        $('#form-save-achatcccol2 .modal-title').html('Ajouter achat col2')
        $('#form-save-achatcccol2 input').val('')
        
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

function edit_achatcccol2(id) {
    var tr = $('#achatcccol2-'+id)
    var info = tr.attr('id').split('-')
    $('#form-save-achatcccol2 .modal-title').html('Editer achatcccol2');
    $('#IDAchatCcCol2').val(info[1])
    
    $('#IDComptoirComm').val(tr.find('td').eq(0).html())
    $('#IDCollecteurCat2').val(tr.find('td').eq(1).html())
    $('#Date').val(tr.find('td').eq(2).html())
    $('#Quantite').val(tr.find('td').eq(3).html())
    $('#PrixUnitaire').val(tr.find('td').eq(4).html())
    $('#PrixTotale').val(tr.find('td').eq(5).html())
    $('#addachatcccol2Modal').modal('show')
}


function delete_achatcccol2(id) {
    if(confirm('Voulez-vous supprimer cet achatcol2 ?')) {
        $.ajax({
            url: base_url(true)+"achatcccol2/supprimer_achatcccol2/"+id,
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
                alert('Echec de la suppression des achats ahat col1')
            }
        })
    }
}