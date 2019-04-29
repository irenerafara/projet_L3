$(document).ready(function() {
    $(function() {  
        $('#TypeCollecteurCat1').trigger('change'); 
    })
    $('#form-save-carte').on('submit', function(e) {
        e.preventDefault();
        if(form_validate('#form-save-carte')){
            var formdata = $( this ).serialize()
            $.ajax({
                url: base_url(true)+"carte/enregistrer_carte",
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
                    alert('Echec de l\'enregistrement de la carte')
                }
            })
        }
    })

    $('#button-save-carte').on('click', function() {
        $('#form-save-carte .modal-title').html('Ajouter carte')
        $('#form-save-carte input').val('')
    })
    $('#TypeCollecteurCat1').on('change', function() {
        var idType = $(this).val()
        $.ajax({
            url: base_url(true)+"carte/load_collecteur_cat1/"+idType, 
            success: function(data) {
                $('#IDCollecteurCat1').html(data)
            },
            error: function() {
                alert('Impossible de charger les '+$('#TypeCollecteurCat1 option[value='+idType+']').html())
            }
        })
    })

$('.btn-edit').on('click', function() {
    var tr = $(this).parent().parent().parent()
    var info = tr.attr('id').split('-')
    $('#form-save-carte .modal-title').html('Editer carte')
    $('#IDCarte').val(info[1])
    $('#TypeCollecteurCat1').val(info[2]).trigger('change')
    $('#IDCollecteurCat1').val(info[3])
    $('#NumCarte').val(tr.find('td').eq(4).html())
    $('#DateDemandeCarte').val(tr.find('td').eq(5).html())
    $('#DateObtentionCarte').val(tr.find('td').eq(6).html())
    $('#DateExpirationCarte').val(tr.find('td').eq(7).html())
    $('#StatutCarte').val(tr.find('td').eq(8).html())
    $('#addCarteModal').modal('show')

})
})
function delete_carte(id) {
    if(confirm('Voulez-vous supprimer cet carte ?')) {
        $.ajax({
            url: base_url(true)+"carte/supprimer_carte/"+id,
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
                alert('Echec de la suppression de la carte')
            }
        })
    }
}
