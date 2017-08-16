<div class="row">
    <div class="col-md-8 col-md-offset-1">
        <h2 class="title-option">Agregar producto</h2>
        <form action="/admin/addProduct/" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
            <input type="hidden"  id="id" name="id">
            <div class="form-group flex-vertical">
                <div class="row">
                    <div class="col-md-4">
                        <label for="code" class="label-input m-r">Código</label>
                    </div>
                    <div class="col-md-8">
                        <input type="text" class="form-control text-placeholder m-r" id="code" name="code" >
                    </div>
                </div>
            </div>
            <div class="form-group flex-vertical">
                <label for="name" class="label-input m-r">Nombre</label>
                <input type="text" class="form-control text-placeholder w-placeholder m-r" id="name" name="name" >
            </div>

            <div class="form-group flex-vertical">
                <label for="category" class="label-input m-r">Categoría</label>
                <select name="category" class="form-control text-placeholder w-placeholder m-r" id="category">
                <option value="">Agregar una categoría</option> 
                @if(!empty($categories))
                     @forelse($categories as $category)
                    <option value="{{$category->id}}">{{$category->category}}</option> 
                        @empty
                        <option value="">No ha registrado ninguna marca</option> 
                    @endforelse
                @endif
                </select>
            </div>

            <div class="form-group flex-vertical">
                <label for="brand" class="label-input m-r">Marca</label>
                <select name="brand" class="form-control text-placeholder w-placeholder m-r" id="brand" >
                <option value="">Agregar una marca</option> 
                @if(!empty($brands))
                     @forelse($brands as $brand)
                    <option value="{{$brand->id}}">{{$brand->nameBrand}}</option> 
                        @empty
                        <option value="">No ha registrado ninguna marca</option> 
                    @endforelse
                @endif
                </select>
            </div>

            <div class="form-group flex-vertical">
                <label for="cost_public" class="label-input m-r">Precio</label>
                <input type="text" class="form-control" id="cost_public" name="cost_public" >
                <input type="text" class="form-control" id="cost_middle_distributor" name="cost_middle_distributor">
                <input type="text" class="form-control" id="cost_distributor" name="cost_distributor">
            </div>
            <div class="form-group flex-vertical">
                <label for="reduction_public" class="label-input m-r">Rebaja</label>
                <input type="text" class="form-control" id="reduction_public" name="reduction_public">
                <input type="text" class="form-control" id="reduction_middle_distributor" name="reduction_middle_distributor">
                <input type="text" class="form-control" id="reduction_distributor" name="reduction_distributor">
            </div>
            <div class="form-group flex-vertical">
                <label for="stock" class="label-input m-r">Stock</label>
                <input type="text" class="form-control" id="stock" name="stock" >
            </div>
            <div class="form-group flex-vertical">
                <label for="description" class="label-input m-r">Descripción</label>
                <input type="text" class="form-control text-placeholder w-placeholder m-r" id="description" name="description">
            </div>
            <div class="form-group flex-vertical">
                <label for="image" class="label-input m-r">Imagen</label>
                <input type="file" id="image" name="image">
            </div>
            <div class="form-group flex-vertical">
                <label for="status" class="label-input m-r">Status</label>
                <input type="checkbox" class="form-control" id="status" name="status" >
            </div>
            <input type="submit" value="Guardar" class="btn btn-style btn-red">
        </form>
            <a href="/admin" class="btn btn-style btn-blue"> Cancelar</a>
    </div>
</div>