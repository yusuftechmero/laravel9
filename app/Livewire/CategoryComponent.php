<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;

class CategoryComponent extends Component
{
    use WithPagination;

    public $selectedLanguage = '';
    public $search = '';

    protected $listeners = ['languageChangeListener' => 'languageChange'];
    
    public function render()
    {
        $this->selectedLanguage = getSelectedLanguage();
        $categories = Category::select('id','category_name','sort_desc')->paginate(10);
        return view('livewire.category-component',[
            'categories' => $categories
        ]);
    }

    public function updatingSearch() {
        $this->resetPage();
    }

    public function languageChange() {
        $this->selectedLanguage = getSelectedLanguage();
        $this->updatingSearch();
    }
    public function delete(Category $category) {
        $category->delete();
    }

}
