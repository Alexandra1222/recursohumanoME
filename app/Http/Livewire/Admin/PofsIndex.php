<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Pof;
//importo una clase ara utilizar  la paginacion 
use Livewire\WithPagination;

class PofsIndex extends Component
{    
    use WithPagination;
    //declaro esta variable para que pagine con los estilos de bootstrap
    protected $PaginationTheme="bootstrap";

    //solo se va a ctivar cuando cambie el valor de la propiedad search 
    public function updatingSearch(){
     $this->resetPage;   
    }
    
    //hago que se relaciones con la barra de busqueda
    public $search; 

    public function render()
    {
        //recupero la lista de pofs que le pertenecen al usuario actulmente autentificado
        $pofs=Pof::where('user_id',auth()->user()->id)
        ->where('dni_del_agente', 'LIKE','%'.$this->search.'%')      
        ->latest('id')
        ->paginate();
        //,compact('pofs') le paso este compact a la vista como parametro para que me recupere al usuario logueado
        return view('livewire.admin.pofs-index',compact('pofs'));
    }

}
//componente de livewire
