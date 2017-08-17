;(function(){

    const opPanel = ".optionPanel";
    const  addProduct = $('#add_product');
    const  table_products = $('.table_products');
    const searchForm = $('#searchForm');

//    var url = document.URL;

   $(opPanel).on( "click", function() {
        $('.panels').show()
        $('.add_product').hide()
        

        if(!$(this).hasClass('active')){

            var valor = $(this).attr('value')

            $(this).addClass('active');
            $(this).siblings().removeClass('active');

            $('#'+valor).css('display','block').siblings().css('display','none')

        }
    });

    addProduct.on('click', function(){
        $('.panels').hide()
        $('.add_product').show()
    });

    
    searchForm.submit(function( event ) {
        event.preventDefault();
        
        var $form = $( this ),
            term = $form.find( "input[name='search']" ).val(),
            token = $form.find( "input[name='_token']" ).val(),
            url = $form.attr( "action" );
            data = {
                "_token": token,
                serch : term,
            }
        var posting = $.post( url, data );
        
        posting.done(function( data ) {
            $( ".table_products").html('');
            $.each( data, function( i, val ) {
                !val.image ?  val.image = 'images/no_photo.png'  : val.image 

                $( ".table_products").append( `
                    <th scope="row">`+ val.code +`</th> 
                    <td>`+ val.name +`</td> 
                    <td>`+ val.stock +`</td> 
                    <td>`+ val.brand +`</td> 
                    <td>`+ val.category +`</td> 
                    <td>  
                        <img class="img-responsive img-rounded" src="`+ val.image +`" alt="`+ val.name +`" style="width: 80px; height: auto;">
                    </td> 
                    <td>
                        <div class="btn-group">
                            <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Action <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="/admin/getProduct/`+val.id+`">Ver</a></li>
                                <li><a href="/admin/editProduct/`+val.id+`">Editar</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="/admin/delete/`+val.id+`">Eliminar</a></li>
                            </ul>
                        </div>
                    <td>
                 ` ) ;
                }); 
            });
        });
    
        $(document).ready(function(){
            $.get( "/api/productos", function( data ) {
                $.each( data, function(key, item) {
                    console.log(item.producto_id);
                })
                
                
            });
        })


})();