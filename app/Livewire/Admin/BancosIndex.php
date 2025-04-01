<?php

namespace App\Livewire\Admin;
use App\Models\Banco;
use Livewire\WithPagination;
use Livewire\Component;

class BancosIndex extends Component
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
        $bancos = Banco::where("banco","LIKE","%".$this->search."%")
        ->latest('banco_id')->paginate();
        return view('livewire.admin.bancos-index',compact("bancos"));
        
    }
}
