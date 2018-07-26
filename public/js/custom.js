$(document).ready(function(){
    
    $("#category").val('0');

    $("#category").on('change', function()
    {
       var cat_id = $(this).val();
       
       if (cat_id == 5)
       {
           $.ajax({
               url: BASE_URL + '/category',
               data: {
                   cat_id,
                   _token: TOKEN
               },
               type: 'POST',
               success: function(response)
               {
                   var text = "<div class='form-group'><label for='exampleFormControlSelect1' class='text-info'>Choice category</label><select name='sub_id' class='form-control text-secondary'>";

                   $.each(response, function(index, value){
                       text+= "<option value='"+value['id']+"'>"+value['name']+"</option>";
                   })

                   text+= "</select></div>";

                  $("#sub").html(text);
               }
           });
       }
       else
       {
        $("#sub").empty();
       }
    })

    $(".sub-ajax").on('click', function(e){
        e.preventDefault();
        
        var id = $(this).data('id');

        $.ajax({
            url: BASE_URL + "/sub-cat/"+id,
            type: 'GET',
            success: function(response){
                
                var text = "";

                if(response.length>0)
                {

                    $.each(response, function(index, value){
                        text+='<div class="col-lg-3 col-md-6 mb-4" id="ads"><div class="card"><div class="card-header"><h4 class="card-title text-info">'+value['title']+'</h4></div><img class="card-img-top" src="'+BASE_URL+'/ads/images/'+value['pictures'][0]['src']+'" alt="'+value['pictures'][0]['alt']+'"><div class="card-body"><hr><p class="text-info"></b>'+value['body']+'</p><p class="text-info">Website Location</b>'+value['website']+'</p><p class="text-warning"><b>Posted by '+value['user']['name']+' on: </b><b class="text-info">'+value['created_at']+'</b></p></div><div class="card-footer"><a href="'+BASE_URL+'ad/'+value['id']+'" class="btn btn-primary">Find Out More!</a> </div></div> </div>';
                    })
                }
                else 
                {
                    text+= "<h1>No ads for this category</h1>";
                }

                $("#car_ads").html(text);
            }
        })
})
});