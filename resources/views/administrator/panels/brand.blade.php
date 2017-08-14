<div class="row">
    <div class="col-md-5 col-md-offset-1">
        <form action="/admin/addBrand/" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
            <div class="form-group">
                <label for="brand">Marca</label>
                <input type="text" class="form-control" id="brand" name="brand" >
            </div>
            <input type="submit" value="Guardar" class="btn btn-primary">
        </form>
    </div>
    <div class="col-md-5 col-md-offset-1">
        <ul class="list-unstyled">
        @if($brands)
            @forelse($brands as $brand)
            <li  value="{{$brand->id}}">{{$brand->nameBrand}} <a href="admin/deleteBrand/{{$brand->id}}">-</a></li>
            @empty
                <p>No hay marcas</p>
            @endforelse  
        @endif
        </ul>
    </div>
</div>