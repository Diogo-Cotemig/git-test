<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Mapa de Descarte</title>
    
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />

    @vite(['resources/css/DescartarBtn.css', 'resources/js/Descartar.js'])
</head>
<body>
    <div class="container">
        <aside class="sidebar">
            <h2>Menu de Descarte</h2>
            <label for="start">Endereço de origem:</label>
            <input type="text" id="start" placeholder="Ex: Rua A, Belo Horizonte" />
            <label for="end">Endereço de destino:</label>
            <input type="text" id="end" placeholder="Ex: Av. Paulista, São Paulo" />
            <button onclick="calcularRota()">Calcular Rota</button>
            <button onclick="irParaDescarte()">Ir para Descarte</button>

            <h3>Pontos de Coleta:</h3>
            <ul class="coleta-lista">
                <li><a href="#" onclick="setDestino('R. Santa Cruz, 546 - Belo Horizonte')">--- Cotemig, Sou Tech</a></li>
                <li><a href="#" onclick="setDestino('Av. Barão Homem de Melo, 1619 - Belo Horizonte')">--- Galpão, Barão Homem de Melo, 1619</a></li>
                <li><a href="#" onclick="setDestino('Av. Barão Homem de Melo, 1579 - Belo Horizonte')">--- Galpão, Barão Homem de Melo, 1579</a></li>
                <li><a href="#" onclick="setDestino('BR-356, 3049 - Belo Horizonte')">--- Shopping, BH Shopping, 3049</a></li>
            </ul>
            <img id="logoEle" src="{{ asset('logo.png') }}" alt="Logo Eletro Descarte" />
        </aside>

        <section class="map-area">
            <div id="distancia"></div>
            <div id="map"></div>
        </section>
    </div>

    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    
</body>
</html>