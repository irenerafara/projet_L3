$(document).ready(function() {
    $('#form-save-achatcol2col1').on('submit', function(e) {
        e.preventDefault();
        if(form_validate('#form-save-achatcol2col1')){
            var formdata = $( this ).serialize()
            $.ajax({
                url: base_url(true)+"achatcol2col1/enregistrer_achatcol2col1",
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

    $('#button-save-achatcol2col1').on('click', function() {
        $('#form-save-achatcol2col1 .modal-title').html('Ajouter achat orpailleur')
        $('#form-save-achatcol2col1 input').val('')
        
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

function edit_achatcol2col1(id) {
    var tr = $('#achatcol2col1-'+id)
    var info = tr.attr('id').split('-')
    $('#form-save-achatcol2col1 .modal-title').html('Editer achatcollecteur');
    $('#IDAchatCol2Col1').val(info[1])
    
    $('#IDCollecteurCat2').val(tr.find('td').eq(0).html())
    $('#IDCollecteurCat1').val(tr.find('td').eq(1).html())
    $('#Date').val(tr.find('td').eq(2).html())
    $('#Quantite').val(tr.find('td').eq(3).html())
    $('#PrixUnitaire').val(tr.find('td').eq(4).html())
    $('#PrixTotale').val(tr.find('td').eq(5).html())
    $('#addachatcol2col1Modal').modal('show')
}


function delete_achatcol2col1(id) {
    if(confirm('Voulez-vous supprimer cet achatcollecteur ?')) {
        $.ajax({
            url: base_url(true)+"achatcol2col1/supprimer_achatcol2col1/"+id,
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
                alert('Echec de la suppression des achats collecteurs')
            }
        })
    }
}