<?php

namespace App\Livewire\Admin;
use App\Models\Departamento;
use Livewire\WithPagination;
use Livewire\Component;

class DepartamentosIndex extends Component
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
        $departamentos = Departamento::where("departamento","LIKE","%".$this->search."%")
        ->latest('departamento_id')->paginate();
        return view('livewire.admin.departamentos-index',compact("departamentos"));
        
    }
}
