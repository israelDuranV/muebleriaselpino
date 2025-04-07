<?php

namespace App\Livewire\Admin;
use App\Models\Materiale;
use Livewire\WithPagination;
use Livewire\Component;

class MaterialesIndex extends Component
{
    use WithPagination;
    protected $paginationTheme = "bootstrap";
	
	public $search;
	
	public function updatingSearch()
	{
		$this->resetPage();
	}
    public function render()
    {
        $materiales = Materiale::where("material","LIKE","%".$this->search."%")
        ->latest('materiales_id')->paginate();
        return view('livewire.admin.materiales-index',compact("materiales"));
        
    }
}
