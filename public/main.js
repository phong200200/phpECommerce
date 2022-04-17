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

function ChangeCate(id, url){
    $.ajax({
        type: 'POST',
        datatype: 'JSON',
        data: {id},
        url: url,
        success: function(result){
            if(result.error == false){
                location.reload();
            }else{
                alert('We got error when load by Cate sirrr...');
            }
        }
    });
}

function DelecartItem(id){
    $.ajax({
        type: 'GET',
        url: '/shopping/cart/delete/{id}/',
        success: function(response){
            $("#changeable-list-cart").empty();
            $("#changeable-list-cart").html(response);
            console.log('Success');
            location.reload();
        },
        fail: function(){
            console.log('failed');
        }
    });
}


