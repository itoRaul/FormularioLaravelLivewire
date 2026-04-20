<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Data;
use Livewire\WithPagination;

class Forms extends Component
{

    use WithPagination;

    protected $rules = [
        'fullname' => 'required|string|max:255',
        'socialname' => 'nullable|string|max:255',
        'cpf' => 'required|string|max:14',
        'rg' => 'required|string|max:20',
        'email' => 'required|string|max:255',
        'phone' => 'required|string|max:15',
        'cep' => 'required|string|max:9',
        'address' => 'required|string|max:255',
        'number' => 'required|string|max:10',
        'neighborhood' => 'required|string|max:100',
        'complement' => 'nullable|string|max:255',
    ];

    public string $fullname = '';
    public string $socialname = '';
    public string $cpf = '';
    public string $rg = '';
    public string $email = '';
    public string $phone = '';
    public string $cep = '';
    public string $address = '';
    public string $number = '';
    public string $neighborhood = '';
    public string $complement = '';

    public ?int $data_id = null;

    public function mount($id = null)
    {
        if ($id) {
            $this->data_id = $id;
            $data = Data::find($this->data_id);
            if ($data) {
                $this->fullname = $data->fullname;
                $this->socialname = $data->socialname;
                $this->cpf = $data->cpf;
                $this->rg = $data->rg;
                $this->email = $data->email;
                $this->phone = $data->phone;
                $this->cep = $data->cep;
                $this->address = $data->address;
                $this->number = $data->number;
                $this->neighborhood = $data->neighborhood;
                $this->complement = $data->complement;
            }
        }
    }

    public function render()
    {
        if ($this->data_id) {
            return view('livewire.edit');
        }

        $data = Data::latest()->paginate(1);
        return view('livewire.forms', compact('data'));
    }

    public function create()
    {

        $this->validate();

        Data::create($this->only([
            'fullname',
            'socialname',
            'cpf',
            'rg',
            'email',
            'phone',
            'cep',
            'address',
            'number',
            'neighborhood',
            'complement'
        ]));

        $this->reset();
    }

    public function update()
    {
        $this->validate();

        $data = Data::find($this->data_id);

        if ($data) {
            $data->update($this->only([
                'fullname',
                'socialname',
                'cpf',
                'rg',
                'email',
                'phone',
                'cep',
                'address',
                'number',
                'neighborhood',
                'complement'
            ]));

            return redirect('/form');
        }
    }

    public function delete($id)
    {
        $data = Data::find($id);

        if ($data) {
            $data->delete();
        }
    }
}
