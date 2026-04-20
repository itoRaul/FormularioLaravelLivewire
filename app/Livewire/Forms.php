<?php

namespace App\Livewire;

use App\Models\City;
use Livewire\Component;
use App\Models\Data;
use App\Models\EstadoCivil;
use App\Models\GrauInstrucao;
use App\Models\Sexo;
use Livewire\WithPagination;

class Forms extends Component
{

    use WithPagination;

    protected $rules = [
        'fullname' => 'required|string|max:255',
        'socialname' => 'nullable|string|max:255',
        'marital_status_id' => 'required|exists:estados_civis,id',
        'education_level_id' => 'required|exists:graus_instrucaos,id',
        'gender_id' => 'required|exists:sexos,id',
        'nationality' => 'required|in:Brasileira,Estrangeira',
        'city_id' => 'required|exists:cities,id',
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
    public $estadosCivis = [];
    public ?int $marital_status_id = null;
    public $grausInstrucaos = [];
    public ?int $education_level_id = null;
    public $sexos = [];
    public ?int $gender_id = null;
    public ?string $nationality = 'Brasileira';
    public $cities = [];
    public ?int $city_id = null;
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
                $this->nationality = $data->nationality;
                $this->marital_status_id = $data->marital_status_id;
                $this->education_level_id = $data->education_level_id;
                $this->gender_id = $data->gender_id;
                $this->city_id = $data->city_id;
            }
        }
        $this->estadosCivis = EstadoCivil::whereIn('status', [true, 1])->get();
        $this->grausInstrucaos = GrauInstrucao::whereIn('status', [true, 1])->get();
        $this->sexos = Sexo::whereIn('status', [true, 1])->get();
        $this->cities = City::whereIn('status', [true, 1])->get();
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
            'fullname', 'socialname', 'cpf', 'rg', 'email', 'phone',
            'cep', 'marital_status_id', 'nationality', 'city_id','education_level_id', 'gender_id', 'address', 'number', 'neighborhood', 'complement'
        ]));

        $this->reset();
    }

    public function update()
    {
        $this->validate();

        $data = Data::find($this->data_id);

        if ($data) {
            $data->update($this->only([
                'fullname', 'socialname', 'cpf', 'rg', 'email', 'phone',
                'cep', 'marital_status_id', 'city_id', 'nationality', 'education_level_id', 'gender_id', 'address', 'number', 'neighborhood', 'complement'
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
