<div class="row">
    <div class="col-md-2">
        <h2>Productos</h2> 
    </div>
    <div class="col-md-2">
        <button type="button" id="add_product" class="btn btn-default">Agregar Producto</button>
    </div>
</div>
<div class="row">
    <div class="col-md-4 col-md-offset-8">
        <form action="admin/search" method="post" id="searchForm">
            <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
            <label for="searh">Buscar producto</label>
            <input type="text" class="form-control" id="search" name="search" placeholder="Buscar">
            <input type="submit" id="btn_search" value="Buscar" class="btn btn-primary">
        </form>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <p>Filtrar</p>
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
                    <ht>Opciones</ht>
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
        @if(count($products))
            {{ $products->links() }} <!-- Muestra la paginación y le decimos que use bootstrap 4 -->
        @endif 
    </div>
</div>