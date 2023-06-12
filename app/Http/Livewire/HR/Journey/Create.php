<?php

namespace App\Http\Livewire\Hr\Journey;

use App\Models\Jornada;
use Livewire\Component;

class Create extends Component
{
    public $jornada;
    public $chs;

    public function store()
    {
        $rules = [
            'jornada' => 'required|regex:/^(\d{1,2}+[x]+\d{1,3})$/|min:3',
            // 'chs' => 'required|integer|digits_between:2,2'
        ];

        $messages = [
            'jornada.required' => 'O campo jornada é obrigatório',
            'jornada.regex' => 'Formato do campo jornada está inválido.',
            'jornada.min' => 'O campo jornada deve conter ao menos 3 caracteres',
            // 'chs.required' => 'O campo carga horária semanal é obrigatório',
            // 'chs.integer' => 'Somente números é permitido',
            // 'chs.digits_between' => 'O campo deve conter no minimo 2 caracteres numéricos',
            // 'chs.digits_between' => 'O campo deve conter no máximo 2 caracteres numéricos',
        ];


        $this->resetValidation();

        $this->validate($rules, $messages);

        list($horas_trab, $horas_desc) = explode('x',$this->jornada);
        $horas_no_mes = 720;

        //dd($horas_trab, $horas_desc);

        if($horas_trab >=12){
            $horas_diaria = $horas_trab;
            $horas_mensais = $horas_no_mes / (($horas_trab+$horas_desc)/ $horas_trab);            
            $horas_semanal = $horas_mensais / 5;
            $terco = ($horas_trab+$horas_desc)/ $horas_trab;
        }else{
            $horas_diaria = 44 / $horas_trab;
            $horas_semanal = ($horas_diaria * $horas_trab);
            $horas_mensais = 44 * 5;
            $terco =null;
        }

        $horas_extras_convecionais = $horas_mensais > 189 ? $horas_mensais - 189 : 0;

        dd([
            'horas_diaria' => $horas_diaria?? null,
            'horas_samanal' => $horas_semanal,
            'horas_mensais' => $horas_mensais,
            'terco_equivalente' => '1/'. $terco,
            'horas_extras_convecionais' => $horas_extras_convecionais,
            'sem_acordo_coletivo' => $horas_mensais / $horas_trab * 4
        ]);

        // Jornada::create([
        //     'jornada' => $this->jornada,
        //     'carga_horaria_semanal' => $this->chs,
        //     'carga_horaria_mensal' => $this->chs * 5,
        // ]);

        $this->resetUI();
        $this->emit('load_jornada');
        $this->emit('created', ["journey_create", "Excelente, registro foi adicionado!"]);
    }

    public function resetUI()
    {
        $this->reset();
        $this->resetErrorBag();
        $this->resetValidation();
    }
    public function render()
    {
        return view('livewire.hr.journey.create');
    }
}
