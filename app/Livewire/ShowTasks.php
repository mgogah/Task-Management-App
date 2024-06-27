<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Tasks;
use Illuminate\Support\Facades\Auth;
use Livewire\WithPagination;
use Livewire\Attributes\Title;

class ShowTasks extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public int $searchTasks=3;
    public int $userID;
    //public $tasks;
   // protected $listeners = ['reloadTasks'];
   /* public function mount(){
        $this->userID = Auth::user()->id;
        $this->tasks = Tasks::where('user_id', $this->userID);
    }*/

    public function render()
    {   
       $tasks = "";
       $this->userID = Auth::user()->id;
       switch($this->searchTasks){
             case 0: 
                $tasks = Tasks::where([['completed','=',0], ['user_id',"=", $this->userID]])->paginate(25);break;
             case 1:
                $tasks = Tasks::where([['completed','=',1], ['user_id',"=", $this->userID]])->paginate(25);break;
             default:
             $tasks = Tasks::where('user_id', $this->userID)->paginate(25);
        }
      
        return view('livewire.show-tasks', [ 'tasks' => $tasks]);
    }

    public function updating($key): void
    {
        if ($key === 'searchTasks') {
            $this->resetPage();
        }
    }

    public function reloadTasks($searchTasks){
        if($searchTasks)
         $this->tasks = $this->tasks->where(['completed','=',$searchTasks]);
       
         //$this->tasks = $this->tasks;
    }
}
