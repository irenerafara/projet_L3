$(document).ready(function() {
    $('#form-save-collecteurcat2').on('submit', function(e) {
        e.preventDefault();
        if(form_validate('#form-save-collecteurcat2')){
            var formdata = $( this ).serialize()
            $.ajax({
                url: base_url(true)+"collecteur/enregistrer_collecteur_cat2",
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
                    alert('Echec de l\'enregistrement du collecteur cat2')
                }
            })
        }
    })

    $('#button-save-collecteurcat2').on('click', function() {
        $('#form-save-collecteurcat2 .modal-title').html('Ajouter collecteur cat2')
        $('#form-save-collecteurcat2 input').val('')
        
    })

})

function edit_collecteurcat2(id) {
    var tr = $('#collecteurcat2-'+id)
    $('#form-save-collecteurcat2 .modal-title').html('Editer collecteur cat2')
    $('#IDCollecteurCat2').val(id)
    $('#NomCollecteurCat2').val(tr.find('td').eq(0).html())
    $('#PrenomCollecteurCat2').val(tr.find('td').eq(1).html())
    $('#CINCollecteurCat2').val(tr.find('td').eq(2).html())
    $('#LieuCINCollecteurCat2').val(tr.find('td').eq(3).html())
    $('#DateCINCollecteurCat2').val(tr.find('td').eq(4).html())
    $('#DuplicataCINCollecteurCat2').val(tr.find('td').eq(5).html())
    $('#ContactCollecteurCat2').val(tr.find('td').eq(6).html())
    $('#AdresseCollecteurCat2').val(tr.find('td').eq(7).html())
    $('#addCollecteurCat2Modal').modal('show')
}

function delete_collecteurcat2(id) {
    if(confirm('Voulez-vous supprimer cet collecteur catégorie2 ?')) {
        $.ajax({
            url: base_url(true)+"collecteur/supprimer_collecteur_cat2/"+id,
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
                alert('Echec de la suppression de la collecteur catégorie2')
            }
        })
    }
}