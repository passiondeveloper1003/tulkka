<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\User;

class LessonModal extends Component
{
    public $show = false;
    public $current_step = 1;
    public $lesson_data;
    
    protected $listeners = ['showLessonModal'=>'showModal', 'lessonContinue' => 'proceed', 'save'=>'Save' ];

    public function proceed($val) {
        if(is_array($this->lesson_data)) {
            $this->lesson_data[$this->current_step] = $val;
        }
        
        $this->nextStep();
    }

    public function mount() {
        $this->lesson_data = array();
    }

    public function showModal($id) {
        dd($id);
        $this->doShow();
    }

    public function save() {
        if(count($this->lesson_data)) {
            $user = auth()->user();
            
            $user = User::where('id', $user->id)->get()->first();
            $user->age = $this->lesson_data[1];
            $user->education = $this->lesson_data[2];
            $user->eng_level = $this->lesson_data[3];
            $user->eng_study = $this->lesson_data[4];
            $user->what_learn = $this->lesson_data[5];
            $user->availability = $this->lesson_data[6];
            $user->save();
        }

        $this->doClose();
    }

    public function doShow()
    {
        $this->show = true;
    }

    public function doClose()
    {
        $this->current_step = 1;
        $this->show = false;
    }

    public function nextStep()
    {
        $this->current_step++;
    }

    public function previousStep()
    {
        $this->current_step--;
    }

    public function render()
    {
        return view('livewire.lesson-modal');
    }
}
