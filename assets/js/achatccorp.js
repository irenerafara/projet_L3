$(document).ready(function() {
    $('#form-save-achatccorp').on('submit', function(e) {
        e.preventDefault();
        if(form_validate('#form-save-achatccorp')){
            var formdata = $( this ).serialize()
            $.ajax({
                url: base_url(true)+"achatccorp/enregistrer_achatccorp",
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
                    alert('Echec de l\'enregistrement des achats orpailleur')
                }
            })
        }
    })

    $('#button-save-achatccorp').on('click', function() {
        $('#form-save-achatccorp .modal-title').html('Ajouter achat comptoircomm_orp')
        $('#form-save-achatccorp input').val('')
        
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

function edit_achatccorp(id) {
    var tr = $('#achatccorp-'+id)
    var info = tr.attr('id').split('-')
    $('#form-save-achatccorp .modal-title').html('Editer achatccorp');
    $('#IDAchatCcOrp').val(info[1])
    
    $('#IDComptoirComm').val(tr.find('td').eq(0).html())
    $('#IDOrpailleur').val(tr.find('td').eq(1).html())
    $('#Date').val(tr.find('td').eq(2).html())
    $('#Quantite').val(tr.find('td').eq(3).html())
    $('#PrixUnitaire').val(tr.find('td').eq(4).html())
    $('#PrixTotale').val(tr.find('td').eq(5).html())
    $('#addachatccorpModal').modal('show')
}


function delete_achatccorp(id) {
    if(confirm('Voulez-vous supprimer cet achatccorp ?')) {
        $.ajax({
            url: base_url(true)+"achatccorp/supprimer_achatccorp/"+id,
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