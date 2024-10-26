<!-- resources/views/products.blade.php -->


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <style>
        .encabezado { background-color: #007bff; color: white; padding: 5px; display: flex; justify-content: space-between; align-items: center; gap: 20px;  }
        .encabezado h2 { font-size: 18px}
        .social {display: flex; gap: 15px; }
        .social a{ text-decoration: none; color: white; font-size: 24px }
        .social a:hover{ color: red;  }
        nav{ margin-left:10px; margin-top: 5px; padding:1px; color:#000; text-transform: uppercase;}
        nav a { padding-left: 20px; text-decoration: none; }
        nav a:hover {background: blue; margin: 10px; padding: 1px; border-radius: 5px; color: white; }
        footer { background-color: #007bff; color: white; padding: 5px; display: flex; justify-content: space-between; align-items: center; gap: 20px;  }
        .buscador{ background-color: white; text-align: right; border-radius: 5px; box-shadow: 0 2px 5px rgb(0,0,0,0.2); } 
        .buscador h2{ font-size: 25px; margin-bottom: 20px; text-align: right; margin-right: 30%; }
        input[type="text"]{ width: 50%; padding: 10px; border: 1px solid #ccc; border-radius: 5px; margin-bottom: 10px; }
        .contenedor{ padding: 180px; margin: 0; }
        .filter { padding: 10px; margin: auto; }
        .filtro-categoria { padding: 10px; font-size: 18px; }
        .filtro-marca { padding: 10px; font-size: 16px; }
        form{ text-align; left;}
        form label{ color: black; font-size: 18px; }
        form option { font-size: 16px; }
        /* Estilos para la cuadrícula de productos */
        .row { display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; }
        h1{ text-align: center; }
        img{ width: 70%; display: block; margin: 0 auto; }
        .card { border: 1px solid #ccc; padding: 20px; text-align: center; border-radius: 5px; }
        .card-body h2{ text-align: center; font-size: 20px; }
        .card-body p { margin-bottom: 15px; }
        .card-body a{ color: white; text-decoration: none; }
        .card-body .btn { display: inline-block; text-align: center; background-color: red; color: white; border-radius: 25px; cursor: pointer; padding: 10px 20px; font-size: 16px; }
        footer { background-color: grey; color: white; padding: 5px; margin: auto; display: flex; justify-content: space-between; align-items: center; gap: 20px;  }
        .foo-social a { margin: 10px; justify-content: space-between; }
        .foo-social a:hover { cursor: pointer; color: blue; }
        .foo-dir p:hover { color: blue; cursor: pointer; }
        .footer-foo p:hover { color: blue; cursor: pointer; }


    </style>
</head>
<body>
    <div class="encabezado">
            <h2>Logo</h2>
            <a><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-at-fill" viewBox="0 0 16 16">
            <path d="M2 2A2 2 0 0 0 .05 3.555L8 8.414l7.95-4.859A2 2 0 0 0 14 2zm-2 9.8V4.698l5.803 3.546zm6.761-2.97-6.57 4.026A2 2 0 0 0 2 14h6.256A4.5 4.5 0 0 1 8 12.5a4.49 4.49 0 0 1 1.606-3.446l-.367-.225L8 9.586zM16 9.671V4.697l-5.803 3.546.338.208A4.5 4.5 0 0 1 12.5 8c1.414 0 2.675.652 3.5 1.671"/>
            <path d="M15.834 12.244c0 1.168-.577 2.025-1.587 2.025-.503 0-1.002-.228-1.12-.648h-.043c-.118.416-.543.643-1.015.643-.77 0-1.259-.542-1.259-1.434v-.529c0-.844.481-1.4 1.26-1.4.585 0 .87.333.953.63h.03v-.568h.905v2.19c0 .272.18.42.411.42.315 0 .639-.415.639-1.39v-.118c0-1.277-.95-2.326-2.484-2.326h-.04c-1.582 0-2.64 1.067-2.64 2.724v.157c0 1.867 1.237 2.654 2.57 2.654h.045c.507 0 .935-.07 1.18-.18v.731c-.219.1-.643.175-1.237.175h-.044C10.438 16 9 14.82 9 12.646v-.214C9 10.36 10.421 9 12.485 9h.035c2.12 0 3.314 1.43 3.314 3.034zm-4.04.21v.227c0 .586.227.8.581.8.31 0 .564-.17.564-.743v-.367c0-.516-.275-.708-.572-.708-.346 0-.573.245-.573.791"/>
            </svg>  cascoalberto@hotmail.com</a>
            <div class="social">
                <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
                </svg></a>
                <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
                </svg></a>
            </div>
    </div>
    <div>
        <nav>
            <a href="http://localhost:8000/">Inicio</a>
            <a href="{{ route('nosotros') }}">Nosotros</a>
            <a href="{{ route('products') }}">Productos</a>
            <a href="{{ route('promotions') }}">Ofertas</a>
            <a href="{{ route('contacto') }}">Contacto</a>
        </nav>
    </div>
    <div class="filter">
        <div class="filtro-categoria">
            <form method="GET" action="{{ url('/products') }}">
                <label for="category">Filtrar por categoría:</label>
                <select name="category_id" id="category" onchange="this.form.submit()">
                    <option value="">Todas las categorías</option>
                    @foreach($categoryId as $category)
                        <option value="{{ $category->id }}" {{ request('category_id') == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </form>
        </div>
        <div class="filtro-marca">
          <form method="GET" action="{{ url('/products') }}">
            <label for="marca">Filtrar Marca:</label>
            <select name="brand_id" id="marca" onchange="this.form.submit()">
                <option value="">Todas las marcas</option>
                @foreach($marcaId as $marca)
                    <option value="{{ $marca->id }}" {{ request('brand_id') ==  $marca->id ? 'selected' : '' }}>
                        {{ $marca->name }}
                    </option>
                @endforeach
            </select>
          </form>
        </div>

        <div class="buscador">
            <h2>Buscar</h2>
            <input type="text" id="busqueda" placeholder="Buscar productos..." onkeyup="filtrarProductos()">
        </div>
    </div>
<div class="container mt-5">
        <h1 class="text-center">Productos Disponibles</h1>
        <div class="row">
        @foreach ($products as $product)
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            @if($product->discount_percentage && $product->promotions_start_date >= now())
                                <span class="badge bg-danger" style="position: absolute; top: 10px; right: 10px;">Promoción</span>
                            @endif
                            <h2 class="card-title">{{ $product->name }}</h2>
                            <img src="{{ asset('storage/' . $product->imagen) }}" class="card-img-top" style="width: 70%; display: block; margin: 0 auto;">
                            <p class="card-text">
                                <strong>Precio:</strong>
                                @if($product->promotion && $product->promotion->isActive())
                                    <span style="text-decoration: line-through;">${{ number_format($product->regular_price, 2) }}</span> 
                                    <span class="text-danger">${{ number_format($product->getPriceAfterDiscount(), 2) }}</span>
                                    <small class="text-success">({{ $product->promotion->discount_percentage }}% de descuento)</small>
                                @else
                                    ${{ number_format($product->regular_price, 2) }}
                                @endif
                            </p>
                            <p class="card-text"><strong>Marca:</strong> {{ $product->brand->name }}</p>
                            <a href="#" class="btn btn-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-dash-fill" viewBox="0 0 16 16">
                                    <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0M6.5 7h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1 0-1"/>
                                </svg>
                                Add to Cart
                            </a>
                            <label for="quantity-{{ $product->id }}"><strong>Cantidad:</strong></label>
                            <input type="number" id="quantity-{{ $product->id }}" class="form-control" name="quantity" value="1" min="1" style="width: 80px; margin-bottom: 10px;">
                        </div>
                    </div>
                </div>
        @endforeach

        </div>
    </div>
    <footer>
        <div class="footer-foo">
            <h4>Telefono</h4>
            <p>0973254154</p>
        </div>
        <div class="foo-dir">
            <h4>Direccion</h4>
            <p>Calle 4</p>
        </div>
        <div class="foo-social">
            <h4>Redes Sociales</h4>
                <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
                </svg></a>
                <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
                </svg></a>
                <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-tiktok" viewBox="0 0 16 16">
                <path d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3z"/>
                </svg></a>
        </div>
    </footer>
</body>
</html>
