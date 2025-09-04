<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Histórico e Configurações</title>
    <link rel="stylesheet" href="http://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
         @vite(['resources/css/historico.css', 'resources/js/assistec.js'])
</head>
<body>

<div class="page-container">
        <a href="{{ route('EletroDescarte')}}" class="close-btn material-symbols-outlined">close</a>

        <div class="page-header">
            <h2>Historico e Configurações adicionais</h2>
            <hr>
        </div>

        <div class="collapsible-container">
            <div class="collapsible-header" onclick="toggleCollapse(this)">
                <h3>Concluídas</h3>
                <span class="material-symbols-outlined">expand_more</span>
            </div>
            <div class="collapsible-content">
                <p>Nenhum descarte foi concluído...</p>
            </div>
        </div>

        <div class="collapsible-container">
            <div class="collapsible-header" onclick="toggleCollapse(this)">
                <h3>Em andamento</h3>
                <span class="material-symbols-outlined">expand_more</span>
            </div>
            <div class="collapsible-content">
                <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d73871.26743357012!2d-44.116967027736564!3d-19.874139918137224!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1scotemig!5e1!3m2!1spt-BR!2sbr!4v1754012693317!5m2!1spt-BR!2sbr" class="map-iframe" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                
                <div class="status-box">
                    <h3>Status</h3>
                    <p>Não a nenhum descarte em andamento</p>
                </div>
            </div>
        </div>

        <div class="collapsible-container">
            <h3 class="notificacoes-header">Notificações</h3>
            <div class="notificacoes-content">
                <div class="notificacoes-options">
                    <div class="option">
                        <label for="status-real">Status em tempo real</label>
                        <input type="checkbox" id="status-real" checked>
                    </div>
                    <div class="option">
                        <label for="ofertas">Ofertas</label>
                        <input type="checkbox" id="ofertas" checked>
                    </div>
                    <div class="option">
                        <label for="assistente-virtual">Assistente Virtual</label>
                        <input type="checkbox" id="assistente-virtual">
                    </div>
                </div>
            </div>
        </div>

        <div class="collapsible-container">
            <div class="collapsible-header" onclick="toggleCollapse(this)">
                <h3>Retirar nota Fiscal</h3>
                <span class="material-symbols-outlined">expand_more</span>
            </div>
            <div class="collapsible-content">
                <div class="descarte-form-container">
                    <div class="descarte-header">
                        <h4>Nota Fiscal de Saída - Remessa para Descarte</h4>
                    </div>

                    <div class="section-box">
                        <h5>Dados do Emitente</h5>
                        <div class="form-group">
                            <label for="emitente-nome">Razão Social:</label>
                            <input type="text" id="emitente-nome" placeholder="Sua Empresa Ltda">
                        </div>
                        <div class="form-group">
                            <label for="emitente-cnpj">CNPJ:</label>
                            <input type="text" id="emitente-cnpj" placeholder="00.000.000/0001-00">
                        </div>
                        <div class="form-group">
                            <label for="emitente-endereco">Endereço:</label>
                            <input type="text" id="emitente-endereco" placeholder="Rua Exemplo, 123 - Cidade/UF">
                        </div>
                    </div>

                    <div class="section-box">
                        <h5>Dados do Destinatário</h5>
                        <div class="form-group">
                            <label for="destinatario-nome">Razão Social:</label>
                            <input type="text" id="destinatario-nome" placeholder="Empresa de Reciclagem S.A.">
                        </div>
                        <div class="form-group">
                            <label for="destinatario-cnpj">CNPJ:</label>
                            <input type="text" id="destinatario-cnpj" placeholder="11.111.111/0001-11">
                        </div>
                        <div class="form-group">
                            <label for="destinatario-endereco">Endereço:</label>
                            <input type="text" id="destinatario-endereco" placeholder="Av. Destino, 456 - Cidade/UF">
                        </div>
                    </div>

                    <div class="section-box">
                        <h5>Dados do Produto</h5>
                        <div class="form-group">
                            <label for="produto-descricao">Descrição:</label>
                            <input type="text" id="produto-descricao" placeholder="Computador obsoleto para descarte">
                        </div>
                        <div class="form-group double-field">
                            <div class="field">
                                <label for="produto-quantidade">Quantidade:</label>
                                <input type="text" id="produto-quantidade" placeholder="10">
                            </div>
                            <div class="field">
                                <label for="produto-unidade">Unidade:</label>
                                <input type="text" id="produto-unidade" placeholder="unidades">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="natureza-operacao">Natureza da Operação:</label>
                            <input type="text" id="natureza-operacao" value="Remessa para Descarte" disabled>
                        </div>
                    </div>

                    <div class="form-buttons">
                        <button class="btn-blue">Imprimir</button>
                        <button class="btn-white">Limpar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
     
    </script>
</body>
</html>
</html>