$(document).ready(function() {
    $('#form-save-collecteurcat1').on('submit', function(e) {
        e.preventDefault();
        if(form_validate('#form-save-collecteurcat1')){
            var formdata = $( this ).serialize()
            $.ajax({
                url: base_url(true)+"collecteur/enregistrer_collecteur_cat1",
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
                    alert('Echec de l\'enregistrement du collecteur cat1')
                }
            })
        }
    })

    $('#button-save-collecteurcat1').on('click', function() {
        $('#form-save-collecteurcat1 .modal-title').html('Ajouter collecteur cat1')
        $('#form-save-collecteurcat1 input').val('')
        
    })

})

function edit_collecteurcat1(id) {
    var tr = $('#collecteurcat1-'+id)
    $('#form-save-collecteurcat1 .modal-title').html('Editer collecteur cat1')
    $('#IDCollecteurCat1').val(id)
    $('#NomCollecteurCat1').val(tr.find('td').eq(0).html())
    $('#PrenomCollecteurCat1').val(tr.find('td').eq(1).html())
    $('#CINCollecteurCat1').val(tr.find('td').eq(2).html())
    $('#LieuCINCollecteurCat1').val(tr.find('td').eq(3).html())
    $('#DateCINCollecteurCat1').val(tr.find('td').eq(4).html())
    $('#DuplicataCINCollecteurCat1').val(tr.find('td').eq(5).html())
    $('#ContactCollecteurCat1').val(tr.find('td').eq(6).html())
    $('#AdresseCollecteurCat1').val(tr.find('td').eq(7).html())
    $('#addCollecteurCat1Modal').modal('show')
}

function delete_collecteurcat1(id) {
    if(confirm('Voulez-vous supprimer cet collecteur catégorie1 ?')) {
        $.ajax({
            url: base_url(true)+"collecteur/supprimer_collecteur_cat1/"+id,
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
                alert('Echec de la suppression de la collecteur catégorie1')
            }
        })
    }
}