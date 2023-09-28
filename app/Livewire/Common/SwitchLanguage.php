<?php

namespace App\Livewire\Common;

use Livewire\Component;

class SwitchLanguage extends Component
{
    public $languageArray = [];
    public $selectedLanguage = '';

    // protected $listeners = ['languageChangeListener' => 'changeToSelecetedLanguage'];

    public function render()
    {
        $this->selectedLanguage = session()->get(SESSION_LANGUAGE_KEY);
        $this->languageArray = LANGUAGE_ASSOCIATIVE_ARRAY;
        return view('livewire.common.switch-language');
    }

    public function changeToSelecetedLanguage() {
        setLanguage($this->selectedLanguage);
        $this->dispatch('languageChangeListener');
        // $this->emitTo('CategoryComponent', 'languageChangeListener');
        // return redirect(request()->header('Referer'));
    }
}
