<div class="row">
    <div class="col-md-2">
        <h2 class="title-option">Productos</h2> 
    </div>
    <div class="col-md-2">
        <button type="button" id="add_product" class="btn btn-style btn-m-t">Agregar Producto</button>
    </div>
</div>
<div class="row m-t-form-group">
    <div class="col-md-4 col-md-offset-8">
        <form action="admin/search" method="post" id="searchForm">
            <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
            <div class="row">
                <div class="col-md-8">
                    <input type="text" class="form-control text-placeholder" id="search" name="search" placeholder="Buscar producto">
                </div>
                <div class="col-md-4">
                    <input type="submit" id="btn_search" value="Buscar" class="btn btn-style">
                </div>
            </div>
        </form>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <p class="label-input">Todos(12)</p>
        <form class="form-filter-producs" action="">
            <select name="filter" id="filter">
                <option value="brand">Marca</option>
                <option value="category">Categoría</option>
                <input type="submit" value="Filtrar" class="btn-style">
            </select>
        </form>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <table class="table table-hover">
            <thead> 
                <tr> 
                    <th>#</th> 
                    <th>Nombre</th> 
                    <th>Stock</th> 
                    <th>Marca</th> 
                    <th>Categoría</th> 
                    <th>Imagen</th> 
                    <th>Opciones</th>
                </tr> 
            </thead>
            <tbody class="table_products">
        @if($products)
            @forelse($products as $product)
                <tr id="{{ $product->id }}"> 
                    @include('administrator.viewAdmin.listTableProduct')
                </tr> 
            @empty
                <p>No hay Productos Agregados</p>
            @endforelse 
        @endif   
            </tbody>
        </table>
        <div class="cont-pagination">
        @if(count($products))
            {{ $products->links() }} <!-- Muestra la paginación y le decimos que use bootstrap 4 -->
        @endif 
        </div>
    </div>
</div>