<div class="row">
    <div class="col-md-5 col-md-offset-1">
         <h2 class="title-option">Agregar Categoría</h2>
        <form action="/admin/addCategory/" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
            <div class="form-group m-t-form-group flex-vertical">
                <label for="category" class="label-input m-r">Categoría</label>
                <input type="text" class="form-control text-placeholder w-placeholder" id="category" name="category" >
            </div>
            <input type="submit" value="Guardar" class="btn btn-style btn-red">
        </form>
    </div>
    <div class="col-md-5 col-md-offset-1">
        <div class="m-t-form-group">
            <div class="form-group">
                <form action="" class="flex-vertical">
                    <input type="text" placeholder="Buscar marca" class="form-control text-placeholder w-placeholder m-r" name="s_brand">
                    <input type="submit" value="Buscar" class="btn btn-style">
                </form>
            </div>
            <div class="cont-brand-dash">
                <ul class="list-unstyled">
                    <li class="head-dash label-input">Categorías</li>
                @if($categories)
                    @forelse($categories as $category)
                    <li class="label-input list" value="{{$category->id}}">{{$category->category}} <a href="admin/delateCategory/{{$category->id}}">__</a></li>
                    @empty
                        <p>No hay Categorías</p>
                    @endforelse  
                @endif
                </ul>
            </div>
        </div>
    </div>
</div>