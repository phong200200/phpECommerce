$.ajaxSetup({
    headers:{
        'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
    }
});

function RemoveRow(id, url){
    if(confirm('Xoa cai nay??')){
        $.ajax({
            type: 'DELETE',
            datatype: 'JSON',
            data: {id},
            url:url,
            success: function(result){
                if(result.error === false){
                    alert(result.message);
                    location.reload();
                }else{
                    alert('Delete Errorrrrr');
                }   
            }
        });
    }
}