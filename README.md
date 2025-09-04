Eletro-Descarte
Realizado por :
Gabriel Henrique - 12302961
Pedro Henrique Moreira - 12303020
Marco Antônio - 12302260
Diogo Rodrigues - 12302678
Turma 3E1

- [x] Tela Inicial 
- [x] Tela de cadastro de usuários
- [x] Tela de login com autenticação
- [x] Tela de esqueceu a senha
- [x] Busca eficiente
- [x] Pontos de descarte em formato de maps
- [x] Sistema de maps
- [x] Informações em dashBoards
- [x] Assistência tecnica
- [x] Tela de histórico do usuário

# Nome do Projeto
<!-- Eletro-Descarte -->

## Descrição
<!-- Eletro-Descarte é uma empresa com o intuito de combater a poluição da terra devido ao descarte indevido do Lixo eletrônico, nossa empresa acolhe, separa e entrega a matéria prima de volta á empresas que vão reutilizar-las, tudo isso afim de diminuir o consumo excessivo de matéria prima em mineradoras (Ferro, Litio, cobre, ouro) e incentivar ás pessoas a cuidar do futuro da geração, jogando o lixo no local correto -->

## Integrantes
<!-- Liste todos os integrantes do grupo no formato Nome - Matrícula -->
Diogo Rodriguês da Silva - Direção; BackEnd e FrontEnd  - 12302678
Marco Antônio Mendes Pines - Planejamento; BackEnd e Planilhas - 1230XXXX
Pedro Henrique de Souza -Organização; Planilha e FrontEnd - 1230XXXX
Gabriel Henrique Tokonku Navara - Controle de Qualidade; BackEnd e FrontEnd - 1230XXXX

## Estrutura de Diretórios (é tipo um Docker: a grosso modo, funciona como Máquina virtual em um sistema, é um contêiner. Põe cada pedaço do sistema em uma máquina virtual diferente)

<!-- Vamos Criar a Pasta Models, fazer a Model do Cliente-->


src/UsuarioLogin

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsuarioLogin extends Model {
    use HasFactory;

    protected $Preencher = [
        'Nome',
        'Email',
        'Senha',
    ];
}
<!-- Vamos Criar a tabela Criar Cliente-->
src/CreateClients

<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('CreateClients', function (Blueprint $tabela) {
            $tabela->id();
            $tabela->string('Nome');
            $tabela->string('Email')->nullable();
            $tabela->string('Senha')
            $tabela->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('CreateClients');
    }
};
<!-- Vamos criar a Controller do Cliente-->
src/ClientController


use App\Models\UsuarioLogin;
use Illuminate\Http\Request;

class ClientController extends Controller {
    public function index() {
        $ViewClient = UsuarioLogin::all();
        return view('Cliente.index', compact('ViewClient')); <!--AVISO ! A View cliente(Cliente.index) ainda não foi criada, eu coloquei de exemplo-->
    }


    public function create() {
        return view('Cliente.index');
    }


    public function store(Request $requisicao) {
        $requisicao->validate([
            'Nome' => 'required|string|max:100',
            'Email' => 'nullable|string',
            'Senha' => 'required|string',
        ]);

        UsuarioLogin::create($requisicao->all());

        return redirect()->route('Cliente.index')->with('successo', 'Yeahhhh ! Cliente Cadastrado com sucesso');
    }
}

<!--Fim da Controller do Cliente-->

projeto/
├── src/               # Código-fonte principal
├── docs/              # Documentação
├── tests/
tests/UsuarioLogin
tests/CreateClients
tests/ClientController
├── README.md          # Arquivo de descrição do projeto
└── requirements.txt   # Dependências do projeto (se houver)


## Como Executar o Projeto

### 1. Pré-requisitos
<!-- Liste os requisitos necessários, como linguagens, frameworks, bibliotecas, banco de dados, etc. -->
Linguagem/Versão utilizada: Blade, php, Html, Css e JavaScript
Dependências necessárias
Banco de dados

### 2. Instalação
<!-- Explique como preparar o ambiente -->
bash
# Clone o repositório
git clone https://diogo-cotemig.github.io/EletroDescarte/

# Acesse a pasta do projeto
cd View/Index.Blaze.php

# Instale as dependências (se houver)
comando-de-instalação:
php artisan test
composer global require laravel/installer
laravel new example-app
npm install && npm run build

### 3. Execução
<!-- Explique como rodar o projeto -->
bash
# Execute o projeto
comando-de-execucao


### 4. Acesso
<!-- Informe como acessar a aplicação (por exemplo, URL local ou credenciais de teste) -->
URL local: http://localhost:3000  
Usuário padrão: admin  
Senha padrão: admin123  

---

## Observações
<!-- Coloque aqui informações adicionais, como problemas conhecidos, melhorias futuras ou instruções extras -->

