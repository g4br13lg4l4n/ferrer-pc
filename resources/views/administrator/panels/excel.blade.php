<row>
    <h2>Subir Excel</h2>
</row>
<row>
    <p>Subir Archivo Excel</p>
    <form action="/admin/upexcel" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">  <!-- Token para formulario para el error verifyCsrfToken -->
        <input type="file" name="excel">
        <input type="submit" Value="Cargar">
    </form>
</row>