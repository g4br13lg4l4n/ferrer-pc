<th scope="row">{{ $product->code }}</th> 
<td>{{ $product->name }}</td> 
<td>{{ $product->stock }}</td> 
<td>{{ $product->brand['nameBrand'] }}</td> 
<td>{{ $product->category['category'] }}</td> 
    @if($product->image)
        <td> <img class="img-responsive img-rounded" src="{{ $product->image }}" alt="{{ $product->name}}" style="width: 80px; height: auto;"></td>
    @else 
        <td> <img class="img-responsive img-rounded" src="{{asset('images/no_photo.png') }}" alt="{{ $product->name}}" style="width: 80px; height: auto;"></td>
    @endif
<td>
    <div class="btn-group">
        <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Action <span class="caret"></span>
        </button>
        <ul class="dropdown-menu">
            <li><a href="/admin/getProduct/{{$product->id}}">Ver</a></li>
            <li><a href="/admin/editProduct/{{$product->id}}">Editar</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="/admin/delete/{{$product->id}}">Eliminar</a></li>
        </ul>
    </div>
</td>