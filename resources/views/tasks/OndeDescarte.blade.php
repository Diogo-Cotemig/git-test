<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Destino de Descarte</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    
    @vite(['resources/css/Ondedescarte.css'])
</head>
<body>

    <div class="mapa" id="mapa">
        <div id="distancia-destino"></div>
    </div>

    <div class="conteudo">
        <h2>O que você deseja fazer?</h2>
        <div class="opcoes">
            <div class="opcao">Buscar no Local</div>
            <div class="opcao" onclick="abrirModal()">Ponto de coleta mais próximo</div>
            <div class="opcao" onclick="abrirRota()">Levar na empresa</div>
        </div>
    </div>

    <div class="modal" id="modal">
        <div class="modal-content" id="modalContent">
            <button class="close-btn" onclick="fecharModal()">×</button>
            <h3>Qual item será descartado?</h3>
            <div class="botoes-itens">
                <button onclick="mostrarMensagem('Hardware')">Hardware</button>
                <button onclick="mostrarMensagem('Eletrodomésticos')">Eletrodomésticos</button>
                <button onclick="mostrarMensagem('Monitores')">Monitores</button>
                <button onclick="mostrarMensagem('Computador')">Computador</button>
                <button onclick="mostrarMensagem('Pilhas')">Pilhas</button>
            </div>
        </div>
    </div>

    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    
    @vite(['resources/js/OndeDescarteJava.js'])

</body>
</html>