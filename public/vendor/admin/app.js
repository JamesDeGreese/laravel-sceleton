$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$(function() {
    $('.delete-button').on('click', function () {
        const modelId = $(this).data('modelId')
        const url = $(location).attr('pathname') + '/' + modelId
        if(confirm("Do you want to delete the item?")){
            $.ajax({
                url: url,
                type: 'DELETE',
                success: function(result) {
                    location.reload()
                }
            })
        }
    })

    ClassicEditor.create(document.querySelector('#ck-editor'))
        .catch(error => {
            console.error(error)
        })
})
