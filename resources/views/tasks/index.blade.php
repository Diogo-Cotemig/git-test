<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eletro-Descarte</title>
    @vite(['resources/css/Style.css', 'resources/js/Script.js', 'resources/js/server.js'])
    <link id="favicon" rel="icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">
</head>
<body>

    <header>
        <div id="gmail">
            <div id="left">
                <img src="{{ asset('img/Logo.png') }}" alt="Logo Eletro-Descarte" id="img2">
                
                <div id="nav-drop">
                    <button id="lingua-btn">
                        <img src="https://flagcdn.com/w20/br.png" alt="Brasil" id="bandeira-br" />
                        <span id="seta">&#9660;</span>
                    </button>
                    <ul id="drop">
                        <li><img src="https://flagcdn.com/w20/es.png" alt="Espanhol" /> Espanhol</li>
                        <li><img src="https://flagcdn.com/w20/us.png" alt="Inglês" /> Inglês</li>
                    </ul>
                </div>

                <div class="menu">
                    @guest
                        <button id="log" onclick="openModal()">Logar</button>
                    @endguest
                    @auth
                        <div class="user-profile">
                            <span id="user-name">Olá, {{ Auth::user()->name }}</span>
                            <form method="POST" action="{{ route('logout') }}" style="display:inline;">
                                @csrf
                                <button type="submit" class="btn-logout">Sair</button>
                            </form>
                        </div>
                    @endauth

                    <a href="{{ route('assistencia') }}" class="btn-menu" id="ass">Assistência</a>
                    <a href="{{ route('historico') }}" class="btn-menu" id="his">Histórico</a>
                    <a href="{{ route('descartar') }}" class="btn-menu" id="des">Descartar</a>
                    <a href="{{ route('usuarios.index') }}" class="btn-menu">Ver Usuários</a>
                </div>
            </div>
        </div>
    </header>


    <div id="loginModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <h2>Entrar na sua conta</h2>
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <input type="email" name="email" placeholder="Email" required/>
                <input type="password" name="password" placeholder="Senha" required/>
                <button type="submit" class="btn-verde">Entrar</button>
            </form>
            <div class="links">
                <button type="button" class="link-btn" onclick="openRegisterModal()">Não tem uma conta?</button>
                <button type="button" class="link-btn" onclick="openForgotModal()">Esqueceu a senha?</button>
            </div>
        </div>
    </div>


    <div id="registerModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeRegisterModal()">&times;</span>
            <h2>Criar conta</h2>

            @if ($errors->any())
                <ul style="color: red;">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            <form action="{{ route('register') }}" method="POST">
                @csrf
                <input type="text" name="name" placeholder="Nome de usuário" required/>
                <input type="email" name="email" placeholder="Email" required/>
                <input type="password" name="password" placeholder="Senha" required/>
                <input type="password" name="password_confirmation" placeholder="Confirme a senha" required/>
                
                <button class="btn-verde" type="submit">Cadastrar</button>
                <div class="links">
                    <button type="button" class="link-btn" onclick="openModal()">Já tem uma conta?</button>
                    <button type="button" class="link-btn" onclick="openForgotModal()">Esqueceu a senha?</button>
                </div>
            </form>
        </div>
    </div>
    
    {{-- Modal de Recuperação de Senha --}}
    <div id="forgotModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeForgotModal()">&times;</span>
            <h2>Recuperar senha</h2>
            <form method="POST" action="#">
                <input type="email" placeholder="Digite seu email" required/>
                <button class="btn-verde">Enviar recuperação</button>
            </form>
            <div class="links">
                <button class="link-btn" onclick="openModal()">Voltar ao login</button>
            </div>
        </div>
    </div>

    {{-- Conteúdo da página --}}
    <img src="{{ asset('img/Imagem-Pessoas-Servico.png') }}" alt="Pessoas em serviço" id="banner">
    <h2 id="frase">Venha descartar seu <br> eletrônico conosco</h2>
    <button id="btn" type="button">Saiba Mais</button>

    <hr id="lv"/>

    <div id="sobre">
        <div id="foto">
            <img src="{{ asset('img/Imagem-Homem-Servico.png') }}" alt="Homem em serviço" id="pro">
        </div>
        
        <div id="texto">
            <h1 id="h1">Sobre</h1>
            <hr id="rr">
            <p id="ppp">
                <span id="preview-text"></span><span id="more-text"></span>
                <div id="toggle-container">
                    <button id="toggle-text">Leia mais</button>
                </div>
            </p>
        </div>
    </div>
    
    <div id="emp">
        <button id="openModal">Quem nós somos</button>
        <div id="myModal" class="modal" style="display:none;">
            <div class="modal-content">
                <span class="close-button" id="closeModal">&times;</span>
                <h2>Quem somos</h2>
                <div class="modal-text">
                    <p>
                        A empresa trabalha lado a lado com fabricantes de equipamentos eletrônicos, oferecendo soluções de descarte responsável. Por meio dessas parcerias, a Eletro-Descarte garante que os produtos de seus parceiros sejam corretamente reciclados ao final de sua vida útil, cumprindo as regulamentações ambientais e contribuindo para a imagem de responsabilidade social dessas marcas.
                        <br><br>
                        A Eletro-Descarte nasceu da visão de quatro empreendedores apaixonados pela causa ambiental e pela inovação tecnológica: Marco, Pedro, Diogo e Gabriel. Juntos, eles perceberam a crescente quantidade de lixo eletrônico gerado no mercado, e o impacto negativo que esse descarte inadequado poderia causar no meio ambiente e na saúde das pessoas. Foi essa preocupação com o futuro do planeta que os uniu na criação de uma solução sustentável e eficaz para lidar com os resíduos eletrônicos.
                        <br><br>
                        A ideia de fundar a Eletro-Descarte surgiu em 2025, quando Marco, Pedro, Diogo e Gabriel, cada um com experiências em áreas de empreendorismo, se encontraram em um evento sobre sustentabilidade. Ali, perceberam que havia uma grande oportunidade de unir suas habilidades para criar uma empresa que não apenas reciclasse equipamentos eletrônicos, mas que também fosse uma força transformadora na conscientização e na criação de um ciclo de vida mais sustentável para os produtos eletrônicos.
                        <br><br>
                        Ao escolher a Eletro-Descarte, você contribui para um futuro mais sustentável, ajudando a reduzir a poluição e promovendo a reutilização de materiais essenciais. A empresa não apenas cuida do lixo eletrônico, mas também da saúde do planeta, garantindo que os resíduos sejam tratados de maneira eficiente e responsável.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <hr id="lv"/>
    
    <div id="sobree">
        <div id="textoo">
            <h1 id="h1">Parcerias</h1>
            <hr id="rrr">
            <p id="pppp">
                A Eletro-Descarte mantém parcerias estratégicas com empresas...
            </p>
        </div>
        <div id="foto2">
            <img src="{{ asset('img/Ajuda-Mao.png') }}" alt="Mãos com ajuda" id="proo">
        </div>
    </div>
    
    <div id="categoria">
        <h1 id="cat">Categorias de descarte.</h1>
        <hr id="line">
        <img src="{{ asset('img/Imagem-Perifericos.png') }}" alt="Periféricos" id="ca">
    </div>

    <footer>
        <b id="bt">Telefone: (31)91111-1111</b>
        <b id="barrra">|</b>
        <b id="bb">Gmail: eletrodescarte@gmail.com.br</b>
        <a href="https://www.instagram.com/eletro_descarte?igsh=NmdqZmIxdTN4dTd6">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" id="face"><path d="M80 299.3V512H196V299.3h86.5l18-97.8H196V166.9c0-51.7 20.3-71.5 72.7-71.5c16.3 0 29.4 .4 37 1.2V7.9C291.4 4 256.4 0 236.2 0C129.3 0 80 50.5 80 159.4v42.1H14v97.8H80z"/></svg>
        </a>
        <a href="https://www.instagram.com/eletro_descarte?igsh=NmdqZmIxdTN4dTd6">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" id="tik"><path d="M448 209.9a210.1 210.1 0 0 1 -122.8-39.3V349.4A162.6 162.6 0 1 1 185 188.3V278.2a74.6 74.6 0 1 0 52.2 71.2V0l88 0a121.2 121.2 0 0 0 1.9 22.2h0A122.2 122.2 0 0 0 381 102.4a121.4 121.4 0 0 0 67 20.1z"/></svg>
        </a>
        <a href="https://www.instagram.com/eletro_descarte?igsh=NmdqZmIxdTN4dTd6">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" id="insta"><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg>
        </a>
    </footer>

    <script src="{{ asset('js/Script.js') }}"></script>
</body>
</html>