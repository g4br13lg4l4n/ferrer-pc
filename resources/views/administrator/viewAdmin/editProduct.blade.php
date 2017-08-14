@extends('layouts.appAdmin')

@section('content')

<div class="row">
<div class="clearfix visible-xs-block"></div>
    <div class="col-md-8 col-md-offset-2">
        <form action="/admin/updateProduct/{{$product->id}}" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
            <input type="hidden"  id="id" name="id" value="{{$product->id}}">
            <div class="form-group">
                <label for="code">Código</label>
                <input type="text" class="form-control" id="code" name="code" value="{{$product->code}}">
            </div>
            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" class="form-control" id="name" name="name" value="{{$product->name}}">
            </div>

            <div class="form-group">
                <label for="category">Categoría</label>
                <select name="category" class="form-control" id="category" value="{{$product->category_id}}">
                    @if($categorySelect)
                       <option value="{{$categorySelect->id}}">{{$categorySelect->category}}</option>
                    @else
                        <option value="">Agregar categoría</option>
                    @endif
                    @forelse($category as $categories)
                    <option value="{{$categories->id}}">{{$categories->category}}</option> 
                        @empty
                        <p>No hay categorias</p>
                    @endforelse   
                </select>
            </div>

            <div class="form-group">
                <label for="brand">Marca</label>
                <select name="brand" class="form-control" id="brand" value="{{$product->brand_id}}">
                    @if($brandSelect)
                       <option value="{{$brandSelect->id}}">{{$brandSelect->nameBrand}}</option>
                    @else
                        <option value="">Agregar una marca</option>
                    @endif
                    @forelse($brands as $brand)
                    <option value="{{$brand->id}}">{{$brand->nameBrand}}</option> 
                        @empty
                        <p>No hay marcas</p>
                    @endforelse   
                </select>
            </div>
            
            <div class="form-group">
                <label for="cost_public">Precio</label>
                <input type="text" class="form-control" id="cost_public" name="cost_public" value="{{$product->cost_public}}">
                <input type="text" class="form-control" id="cost_middle_distributor" name="cost_middle_distributor" value="{{$product->cost_middle_distributor}}">
                <input type="text" class="form-control" id="cost_distributor" name="cost_distributor" value="{{$product->cost_distributor}}">
            </div>
            <div class="form-group">
                <label for="reduction_public">Rebaja</label>
                <input type="text" class="form-control" id="reduction_public" name="reduction_public" value="{{$product->reduction_public}}">
                <input type="text" class="form-control" id="reduction_middle_distributor" name="reduction_middle_distributor" value="{{$product->reduction_middle_distributor}}">
                <input type="text" class="form-control" id="reduction_distributor" name="reduction_distributor" value="{{$product->reduction_distributor}}">
            </div>
            <div class="form-group">
                <label for="stock">Stock</label>
                <input type="text" class="form-control" id="stock" name="stock" value="{{$product->stock}}">
            </div>
            <div class="form-group">
                <label for="description">Descripción</label>
                <input type="text" class="form-control" id="description" name="description" value="{{$product->description}}">
            </div>
            <div class="form-group">
                <label for="image">Imagen</label>
                <input type="file" class="form-control" id="image" name="image" value="{{$product->image}}">
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <input type="text" class="form-control" id="status" name="status" value="{{$product->status}}">
            </div>
            <input type="submit" value="Guardar" class="btn btn-primary">
        </form>
    </div>
</div>
@endsection