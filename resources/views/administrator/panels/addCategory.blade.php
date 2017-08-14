<div class="row">
    <div class="col-md-5 col-md-offset-1">
        <form action="/admin/addCategory/" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
            <div class="form-group">
                <label for="category">Categoría</label>
                <input type="text" class="form-control" id="category" name="category" >
            </div>
            <input type="submit" value="Guardar" class="btn btn-primary">
        </form>
    </div>
    <div class="col-md-5 col-md-offset-1">
        <ul class="list-unstyled">
         @if($categories)
            @forelse($categories as $category)
            <li  value="{{$category->id}}">{{$category->category}} <a href="admin/delateCategory/{{$category->id}}">-</a></li>
            @empty
                <p>No hay Categorías</p>
            @endforelse  
        @endif
        </ul>
    </div>
</div>