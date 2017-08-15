@extends('layouts.dashAdmin')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2">
            <div class="row">
            <div class="group-options">
                <div class="btn-group-vertical" role="group" aria-label="...">
                    <button type="button" class="btn btn-option active optionPanel" value="product">Productos</button>
                    <button type="button" class="btn btn-option optionPanel"  value="add_brand">Agregar Marca</button>
                    <button type="button" class="btn btn-option optionPanel" value="category">Agregar Categoría</button>
                    <button type="button" class="btn btn-option optionPanel" value="upexcel">Subir Excel</button>
                    <button type="button" class="btn btn-option optionPanel" value="createUser">Slider</button>
                    <button type="button" class="btn btn-option optionPanel" value="createUser">Crear Usuarios</button>
                </div>
               </div> 
            </div>
            
        </div>
        <div class="col-md-10">
            <div class="panel panels">
                <section id="product">
                     @include('administrator.panels.prducts')
                </section>
                <section id="add_brand" style="display:none">
                     @include('administrator.panels.brand')
                </section> 
                <section id="category" style="display:none">
                     @include('administrator.panels.addCategory')
                </section>
                <section id="upexcel" style="display:none">
                     @include('administrator.panels.excel')
                </section>
                <section id="createUser" style="display:none">
                     @include('administrator.panels.createUser')
                </section>
            </div>
            <div class="panel add_product" style="display:none;">
                @include('administrator.viewAdmin.addProduct') 
            </div>
        </div>
    </div>
</div>
@endsection