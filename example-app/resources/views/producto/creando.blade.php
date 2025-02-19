@extends('body.cuerpo')

@section('title', 'Creando Producto ')

@section('content')
{{-- <div class="container mt-5">
    <h2 class="mb-4">Agregar Producto</h2>
    <form action="{{ route('productos.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre del Producto</label>
            <input type="text" class="form-control" id="Nombre"  name="Nombre" placeholder="Ingrese el nombre del producto" required>
        </div>
        <div class="form-group">
            <label for="stock">Stock</label>
            <input type="number" class="form-control" id="stock" name="stock" placeholder="Ingrese la cantidad en stock" required>
        </div>
        <div class="form-group">
            <label for="precio_unitario">Precio Unitario</label>
            <input type="number" step="0.01" class="form-control" id="PrecioUnitario" name="PrecioUnitario" placeholder="Ingrese el precio unitario" required>
        </div>
        <div class="form-group">
            <label for="descripcion">Descripción</label>
            <textarea class="form-control" id="Descripcion" name="Descripcion" rows="3" placeholder="Ingrese la descripción del producto" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Agregar Producto</button>
    </form>
</div> --}}
<div class="container mt-5">
    <h2 class="mb-4">Agregar Producto</h2>
    <form action="{{ route('productos.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre del Producto</label>
            <input type="text" class="form-control" id="Nombre" name="Nombre" placeholder="Ingrese el nombre del producto" required>
        </div>
        <div class="form-group">
            <label for="stock">Stock</label>
            <input type="number" class="form-control" id="stock" name="stock" placeholder="Ingrese la cantidad en stock" required>
        </div>
        <div class="form-group">
            <label for="precio_unitario">Precio Unitario</label>
            <input type="number" step="0.01" class="form-control" id="PrecioUnitario" name="PrecioUnitario" placeholder="Ingrese el precio unitario" required>
        </div>
        <div class="form-group">
            <label for="descripcion">Descripción</label>
            <textarea class="form-control" id="Descripcion" name="Descripcion" rows="3" placeholder="Ingrese la descripción del producto"></textarea>
        </div>
        <div class="form-group">
            <label for="categoria">Categoría</label>
            <select class="form-control" id="CategoriaID" name="CategoriaID" required>
                @foreach ($categorias as $categoria)
                    <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Agregar Producto</button>
    </form>
</div>



@include('partials.navbar')
@endsection()