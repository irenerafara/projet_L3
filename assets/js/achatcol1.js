$(document).ready(function() {
    $('#form-save-achatcol1').on('submit', function(e) {
        e.preventDefault();
        if(form_validate('#form-save-achatcol1')){
            var formdata = $( this ).serialize()
            $.ajax({
                url: base_url(true)+"achatcol1/enregistrer_achatcol1",
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
                    alert('Echec de l\'enregistrement des achats col1')
                }
            })
        }
    })

    $('#button-save-achatcol1').on('click', function() {
        $('#form-save-achatcol1 .modal-title').html('Ajouter achat col1')
        $('#form-save-achatcol1 input').val('')
        
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

function edit_achatcol1(id) {
    var tr = $('#achatcol1-'+id)
    var info = tr.attr('id').split('-')
    $('#form-save-achatcol1 .modal-title').html('Editer achatcol1');
    $('#IDAchatCollecteurCat1').val(info[1])
    
    $('#IDComptoirComm').val(tr.find('td').eq(0).html())
    $('#IDCollecteurCat1').val(tr.find('td').eq(1).html())
    $('#Date').val(tr.find('td').eq(2).html())
    $('#Quantite').val(tr.find('td').eq(3).html())
    $('#PrixUnitaire').val(tr.find('td').eq(4).html())
    $('#PrixTotale').val(tr.find('td').eq(5).html())
    $('#addachatcol1Modal').modal('show')
}


function delete_achatcol1(id) {
    if(confirm('Voulez-vous supprimer cet achatcol1 ?')) {
        $.ajax({
            url: base_url(true)+"achatcol1/supprimer_achatcol1/"+id,
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