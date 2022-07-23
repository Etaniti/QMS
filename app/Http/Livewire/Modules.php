<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Module;
use App\Http\Livewire\Field;
use Illuminate\Http\Request;

class Modules extends Component
{
    public $currentStep = 1;
    public $modules, $post_1, $post_2, $post_3, $post_4, $post_5,
    $post_6, $post_7, $post_8, $post_9, $post_10, $structure_id;
    public $updateMode = false;
    public $inputs = [];
    public $i = 1;

    public function render()
    {
        $this->posts = Module::all();
        return view('livewire.modules');
    }

    public function firstStepSubmit()
    {
        $validatedData = $this->validate([
            'post_1' => 'string',
        ]);

        $this->currentStep = 2;
    }

    public function secondStepSubmit()
    {
        $validatedData = $this->validate([
            'post_2' => 'string',
        ]);

        $this->currentStep = 3;
    }

    public function thirdStepSubmit()
    {
        $validatedData = $this->validate([
            'post_3' => 'string',
        ]);

        $this->currentStep = 4;
    }

    public function fourthStepSubmit()
    {
        $validatedData = $this->validate([
            'post_4' => 'string',
        ]);

        $this->currentStep = 5;
    }

    public function fifthStepSubmit()
    {
        $validatedData = $this->validate([
            'post_5' => 'string',
        ]);

        $this->currentStep = 6;
    }

    public function sixthStepSubmit()
    {
        $validatedData = $this->validate([
            'post_6' => 'string',
        ]);

        $this->currentStep = 7;
    }

    public function seventhStepSubmit()
    {
        $validatedData = $this->validate([
            'post_7' => 'string',
        ]);

        $this->currentStep = 8;
    }

    public function eighthStepSubmit()
    {
        $validatedData = $this->validate([
            'post_8' => 'string',
        ]);

        $this->currentStep = 9;
    }

    public function ninethStepSubmit()
    {
        $validatedData = $this->validate([
            'post_9' => 'string',
        ]);

        $this->currentStep = 10;
    }

    public function tenthStepSubmit()
    {
        $validatedData = $this->validate([
            'post_10' => 'string',
        ]);

        $this->currentStep = 11;
    }

    public function submitForm()
    {
        Module::create([
            'post_1' => $this->post_1,
            'post_2' => $this->post_2,
            'post_3' => $this->post_3,
            'post_4' => $this->post_4,
            'post_5' => $this->post_5,
            'post_6' => $this->post_6,
            'post_7' => $this->post_7,
            'post_8' => $this->post_8,
            'post_9' => $this->post_9,
            'post_10' => $this->post_10,
        ]);

        $this->clearForm();

        $this->currentStep = 1;
    }

    public function back($step)
    {
        $this->currentStep = $step;
    }

    public function clearForm()
    {
        $this->post_1 = '';
        $this->post_2 = '';
        $this->post_3 = '';
        $this->post_4 = '';
        $this->post_5 = '';
        $this->post_6 = '';
        $this->post_7 = '';
        $this->post_8 = '';
        $this->post_9 = '';
        $this->post_10 = '';
    }

    public function add($i)
    {
        $i = $i + 1;
        $this->i = $i;
        array_push($this->inputs ,$i);
    }

    public function remove($i)
    {
        unset($this->inputs[$i]);
    }

    private function resetInputFields(){
        $this->post_1 = '';
        $this->post_2 = '';
        $this->post_3 = '';
        $this->post_4 = '';
        $this->post_5 = '';
        $this->post_6 = '';
        $this->post_7 = '';
        $this->post_8 = '';
        $this->post_9 = '';
        $this->post_10 = '';
    }

    public function store()
    {
        $validatedDate = $this->validate([
                'post_1.0' => 'string',
                'post_2.0' => 'string',
                'post_3.0' => 'string',
                'post_4.0' => 'string',
                'post_5.0' => 'string',
                'post_6.0' => 'string',
                'post_7.0' => 'string',
                'post_8.0' => 'string',
                'post_9.0' => 'string',
                'post_10.0' => 'string',

                'post_1.*' => 'string',
                'post_2.*' => 'string',
                'post_3.*' => 'string',
                'post_4.*' => 'string',
                'post_5.*' => 'string',
                'post_6.*' => 'string',
                'post_7.*' => 'string',
                'post_8.*' => 'string',
                'post_9.*' => 'string',
                'post_10.*' => 'string',
            ],
            [
                'post_1.0' => 'Значение поля некорректно.',
                'post_2.0' => 'Значение поля некорректно.',
                'post_3.0' => 'Значение поля некорректно.',
                'post_4.0' => 'Значение поля некорректно.',
                'post_5.0' => 'Значение поля некорректно.',
                'post_6.0' => 'Значение поля некорректно.',
                'post_7.0' => 'Значение поля некорректно.',
                'post_8.0' => 'Значение поля некорректно.',
                'post_9.0' => 'Значение поля некорректно.',
                'post_10.0' => 'Значение поля некорректно.',

                'post_1.*' => 'Значение поля некорректно.',
                'post_2.*' => 'Значение поля некорректно.',
                'post_3.*' => 'Значение поля некорректно.',
                'post_4.*' => 'Значение поля некорректно.',
                'post_5.*' => 'Значение поля некорректно.',
                'post_6.*' => 'Значение поля некорректно.',
                'post_7.*' => 'Значение поля некорректно.',
                'post_8.*' => 'Значение поля некорректно.',
                'post_9.*' => 'Значение поля некорректно.',
                'post_10.*' => 'Значение поля некорректно.',
            ]
        );

        foreach ($this->post_1 as $key => $value) {
            Module::create([
                'post_1' => $this->post_1[$key],
                'post_2' => $this->post_2[$key],
                'post_3' => $this->post_3[$key],
                'post_4' => $this->post_3[$key],
                'post_5' => $this->post_5[$key],
                'post_6' => $this->post_6[$key],
                'post_7' => $this->post_7[$key],
                'post_8' => $this->post_8[$key],
                'post_9' => $this->post_9[$key],
                'post_10' => $this->post_10[$key],
                'structure_id' => $this->structure_id,
            ]);
        }

        $this->inputs = [];

        $this->resetInputFields();

        $this->dispatchBrowserEvent('refresh-page');
    }
}
