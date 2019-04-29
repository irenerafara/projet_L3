$(document).ready(function() {
    $('#form-save-achatcfcc').on('submit', function(e) {
        e.preventDefault();
        if(form_validate('#form-save-achatcfcc')){
            var formdata = $( this ).serialize()
            $.ajax({
                url: base_url(true)+"achatcfcc/enregistrer_achatcfcc",
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

    $('#button-save-achatcfcc').on('click', function() {
        $('#form-save-achatcfcc .modal-title').html('Ajouter achat comptoir comm')
        $('#form-save-achatcfcc input').val('')
        
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

function edit_achatcfcc(id) {
    var tr = $('#achatcfcc-'+id)
    var info = tr.attr('id').split('-')
    $('#form-save-achatcfcc .modal-title').html('Editer achatcfcc');
    $('#IDAchatCfCc').val(info[1])
    $('#IDComptoirDeFonte').val(tr.find('td').eq(0).html())
    $('#IDComptoirComm').val(tr.find('td').eq(1).html())
    $('#Date').val(tr.find('td').eq(2).html())
    $('#Quantite').val(tr.find('td').eq(3).html())
    $('#PrixUnitaire').val(tr.find('td').eq(4).html())
    $('#PrixTotale').val(tr.find('td').eq(5).html())
    $('#addachatcfccModal').modal('show')
}


function delete_achatcfcc(id) {
    if(confirm('Voulez-vous supprimer cet achatcfcc ?')) {
        $.ajax({
            url: base_url(true)+"achatcfcc/supprimer_achatcfcc/"+id,
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
                alert('Echec de la suppression des achats cmptoir comm')
            }
        })
    }
}