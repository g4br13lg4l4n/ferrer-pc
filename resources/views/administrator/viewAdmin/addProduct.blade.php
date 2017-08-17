<div class="row">
    <div class="col-md-8 col-md-offset-1">
        <h2 class="title-option">Agregar producto</h2>
        <form action="/admin/addProduct/" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
            <input type="hidden"  id="id" name="id">
            <div class="form-group flex-vertical">
                <label for="code" class="col-md-2 control-label label-input">Código</label>
                <div class="col-md-8">
                    <input type="text" class="form-control text-placeholder" id="code" name="code" >
                </div>

            </div>

            <div class="form-group flex-vertical">
                <label for="name" class="col-md-2 control-label label-input">Nombre</label>
                <div class="col-md-8">    
                    <input type="text" class="form-control text-placeholder" id="name" name="name" >
                </div>
            </div>

            <div class="form-group flex-vertical">
                <label for="category" class="col-md-2 control-label label-input">Categoría</label>
                <div class="col-md-8">  
                    <select name="category" class="form-control text-placeholder" id="category">
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
            </div>

            <div class="form-group flex-vertical">
                <label for="brand" class="col-md-2 control-label label-input">Marca</label>
                <div class="col-md-8">  
                    <select name="brand" class="form-control text-placeholder" id="brand" >
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
            </div>

            <div class="form-group flex-vertical">
                <label for="cost_public" class="col-md-2 control-label label-input">Precio</label>
                <div class="col-md-8">  
                    <div class="row">
                        <div class="col-md-4">
                            <input type="number" placeholder="Público" class="form-control text-placeholder" id="cost_public" name="cost_public" >
                        </div>
                        <div class="col-md-4">
                            <input type="number" placeholder="Medio distribuidor" class="form-control text-placeholder" id="cost_middle_distributor" name="cost_middle_distributor">
                        </div>
                        <div class="col-md-4">
                            <input type="number" placeholder="Distribuidor" class="form-control text-placeholder" id="cost_distributor" name="cost_distributor">
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group flex-vertical">
                <label for="reduction_public" class="col-md-2 control-label label-input">Rebaja</label>
                <div class="col-md-8">  
                    <div class="row">
                        <div class="col-md-4">
                            <input type="text" placeholder="Público" class="form-control text-placeholder" id="reduction_public " name="reduction_public">
                        </div>
                        <div class="col-md-4">
                            <input type="text" placeholder="Medio distribuidor" class="form-control text-placeholder" id="reduction_middle_distributor" name="reduction_middle_distributor">
                        </div>
                        <div class="col-md-4">
                            <input type="text" placeholder="Distribuidor" class="form-control text-placeholder" id="reduction_distributor" name="reduction_distributor">
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group flex-vertical">
                <label for="stock" class="col-md-2 control-label label-input">Stock</label>
                <div class="col-md-8">  
                    <input type="checkbox" class="form-control" id="stock" name="stock" >
                </div>
            </div>
            <div class="form-group flex-vertical">
                <label for="description" class="col-md-2 control-label label-input">Descripción</label>
                <div class="col-md-8">  
                    <textarea  id="description" name="description" class="form-control text-placeholder" placeholder="Características" cols="60" rows="4"></textarea>
                </div>
            </div>
            <div class="form-group flex-vertical">
                <label for="image" class="col-md-2 control-label label-input">Imagen</label>
                <div class="col-md-8">  
                    <input type="file" id="image" name="image">
                </div>
            </div>
            <div class="form-group flex-vertical">
                <label for="status" class="col-md-2 control-label label-input">Status</label>
                <div class="col-md-8">  
                    <input type="checkbox" class="form-control" id="status" name="status" >
                </div>
            </div>
            <input type="submit" value="Guardar" class="btn btn-style btn-red">
        </form>
            <a href="/admin" class="col-md-offset-8 btn btn-style btn-blue"> Cancelar</a>
    </div>
</div>