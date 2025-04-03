<?php

namespace App\Livewire\Admin;
use App\Models\Estudio;
use Livewire\WithPagination;
use Livewire\Component;

class EstudiosIndex extends Component
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
        $estudios = Estudio::where("name","LIKE","%".$this->search."%")
        ->latest('id')->paginate();
        return view('livewire.admin.estudios-index',compact("estudios"));
        
    }
}
