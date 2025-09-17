<?php

namespace App\Livewire;

use App\Models\City;
use Livewire\Component;
use App\Models\Dados;
use App\Models\EstadoCivil;
use App\Models\GrauInstrucao;
use App\Models\Sexo;
use Livewire\WithPagination;

class Forms extends Component
{

    use WithPagination; 

    protected $rules = [
        'nomecompleto' => 'required|string|max:255',
        'nomesocial' => 'nullable|string|max:255',
        'estado_civil_id' => 'required|exists:estados_civis,id',
        'grau_instrucao_id' => 'required|exists:graus_instrucaos,id',
        'sexo_id' => 'required|exists:sexos,id',
        'nacionalidade' => 'required|in:Brasileira,Estrangeira',
        'city_id' => 'required|exists:cities,id',
        'cpf' => 'required|string|max:14',
        'rg' => 'required|string|max:20',
        'email' => 'required|string|max:255',
        'telefone' => 'required|string|max:15',
        'cep' => 'required|string|max:9',
        'logradouro' => 'required|string|max:255',
        'numero' => 'required|string|max:10',
        'bairro' => 'required|string|max:100',
        'complemento' => 'nullable|string|max:255',
    ];

    public string $nomecompleto = '';
    public string $nomesocial = '';
    public $estadosCivis = [];
    public ?int $estado_civil_id = null;
    public $grausInstrucaos = [];
    public ?int $grau_instrucao_id = null;
    public $sexos = [];
    public ?int $sexo_id = null;
    public ?string $nacionalidade = 'Brasileira';
    public $cities = [];
    public ?int $city_id = null;
    public string $cpf = '';
    public string $rg = '';
    public string $email = '';
    public string $telefone = '';
    public string $cep = '';
    public string $logradouro = '';
    public string $numero = '';
    public string $bairro = '';
    public string $complemento = '';

    public ?int $pessoa_id = null;

    public function mount($id = null)
    {
        if ($id) {
            $this->pessoa_id = $id;
            $pessoa = Dados::find($this->pessoa_id);
            if ($pessoa) {
                $this->nomecompleto = $pessoa->nomecompleto;
                $this->nomesocial = $pessoa->nomesocial;
                $this->cpf = $pessoa->cpf;
                $this->rg = $pessoa->rg;
                $this->email = $pessoa->email;
                $this->telefone = $pessoa->telefone;
                $this->cep = $pessoa->cep;
                $this->logradouro = $pessoa->logradouro;
                $this->numero = $pessoa->numero;
                $this->bairro = $pessoa->bairro;
                $this->complemento = $pessoa->complemento;
                $this->nacionalidade = $pessoa->nacionalidade;
                $this->estado_civil_id = $pessoa->estado_civil_id;
                $this->grau_instrucao_id = $pessoa->grau_instrucao_id;
                $this->sexo_id = $pessoa->sexo_id;
                $this->city_id = $pessoa->city_id;
            }
        }
        $this->estadosCivis = EstadoCivil::whereIn('status', [true, 1])->get();
        $this->grausInstrucaos = GrauInstrucao::whereIn('status', [true, 1])->get();
        $this->sexos = Sexo::whereIn('status', [true, 1])->get();
        $this->cities = City::whereIn('status', [true, 1])->get();
    }

    public function render()
    {
        if ($this->pessoa_id) {
            return view('livewire.edit');
        }

        $dados = Dados::latest()->paginate(1);
        return view('livewire.forms', compact('dados'));

    }

    public function create()
    {

        $this->validate();

        Dados::create($this->only([
            'nomecompleto', 'nomesocial', 'cpf', 'rg', 'email', 'telefone',
            'cep', 'estado_civil_id', 'nacionalidade', 'city_id','grau_instrucao_id', 'sexo_id', 'logradouro', 'numero', 'bairro', 'complemento'
        ]));

        $this->reset();
    }

    public function update()
    {
        $this->validate();

        $pessoa = Dados::find($this->pessoa_id);

        if ($pessoa) {
            $pessoa->update($this->only([
                'nomecompleto', 'nomesocial', 'cpf', 'rg', 'email', 'telefone',
                'cep', 'estado_civil_id', 'city_id', 'nacionalidade', 'grau_instrucao_id', 'sexo_id', 'logradouro', 'numero', 'bairro', 'complemento'
            ]));

            return redirect('/form');
        }
    }

    public function delete($id)
    {
        $pessoa = Dados::find($id);

        if ($pessoa) {
            $pessoa->delete();
        }
    }

}
