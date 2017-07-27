<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <form action="/admin/addProduct/" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
            <input type="hidden"  id="id" name="id">
            <div class="form-group">
                <label for="code">Código</label>
                <input type="text" class="form-control" id="code" name="code" >
            </div>
            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" class="form-control" id="name" name="name" >
            </div>
            <div class="form-group">
                <label for="brand">Marca</label>
                <select name="brand" class="form-control" id="brand" >
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
            <div class="form-group">
                <label for="category">Categoría</label>
                <input type="text" class="form-control" id="category" name="category">
            </div>
            <div class="form-group">
                <label for="sub_category">Subcategoría</label>
                <input type="text" class="form-control" id="sub_category" name="sub_category">
            </div>
            <div class="form-group">
            
                <label for="cost_public">Precio</label>
                <input type="text" class="form-control" id="cost_public" name="cost_public" >
                <input type="text" class="form-control" id="cost_middle_distributor" name="cost_middle_distributor">
                <input type="text" class="form-control" id="cost_distributor" name="cost_distributor">
            </div>
            <div class="form-group">
                <label for="reduction_public">Rebaja</label>
                <input type="text" class="form-control" id="reduction_public" name="reduction_public">
                <input type="text" class="form-control" id="reduction_middle_distributor" name="reduction_middle_distributor">
                <input type="text" class="form-control" id="reduction_distributor" name="reduction_distributor">
            </div>
            <div class="form-group">
                <label for="stock">Stock</label>
                <input type="text" class="form-control" id="stock" name="stock" >
            </div>
            <div class="form-group">
                <label for="description">Descripción</label>
                <input type="text" class="form-control" id="description" name="description">
            </div>
            <div class="form-group">
                <label for="image">Imagen</label>
                <input type="file" class="form-control" id="image" name="image">
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <input type="text" class="form-control" id="status" name="status" >
            </div>
            <input type="submit" value="Guardar" class="btn btn-primary">
        </form>
    </div>
</div>