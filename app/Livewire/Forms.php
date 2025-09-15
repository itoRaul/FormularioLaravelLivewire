<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Dados;
use Livewire\WithPagination;

class Forms extends Component
{

    use WithPagination; 

    protected $rules = [
        'nomecompleto' => 'required|string|max:255',
        'nomesocial' => 'nullable|string|max:255',
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
            }
        }
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
            'cep', 'logradouro', 'numero', 'bairro', 'complemento'
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
                'cep', 'logradouro', 'numero', 'bairro', 'complemento'
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
