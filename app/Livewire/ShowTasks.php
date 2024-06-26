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

    public int $searchTasks=2;
    public int $userID;

    public function render()
    {   $this->userID = Auth::user()->id;
      
        if($this->searchTasks == 1){
            $tasks = Tasks::where([['completed','=',1], ['user_id',"=", $this->userID]])->paginate(2);
        }
        else if($this->searchTasks == 0){
            $tasks = Tasks::where([['completed','=',0], ['user_id',"=", $this->userID]])->paginate(2);
        }
        else{
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
}
