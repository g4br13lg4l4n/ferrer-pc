<div class="col-md-offset-1">
    <row>
        <h2 class="title-option">Subir Excel</h2>
    </row>
    <row>
        <p class="label-input m-r">Subir Archivo Excel</p>
        <form action="/admin/upexcel" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">  <!-- Token para formulario para el error verifyCsrfToken -->
            <input type="file" name="excel" class="btn">
            <input type="submit" Value="Cargar" class="btn btn-style btn-red">
        </form>
    </row>
</div>