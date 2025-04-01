<?php

namespace App\Livewire\Admin;
use App\Models\Terminado;
use Livewire\WithPagination;
use Livewire\Component;

class TerminadosIndex extends Component
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
        $terminados = Terminado::where("terminado","LIKE","%".$this->search."%")
        ->latest('terminado_id')->paginate();
        return view('livewire.admin.terminados-index',compact("terminados"));
        
    }
}
