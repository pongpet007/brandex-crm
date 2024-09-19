<?php

namespace App\Livewire\Crm;

use App\Models\User;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

#[Layout('livewire.layout.themebd')]
class UsersShow extends Component
{
    use WithPagination;

    public $search;

    public function delete($id){
        $user = User::find($id);
        $user->delete();
        $this->setRefresh();
    }

    public function render()
    {
         // ->when($level < 2, function (Builder $query) {
            //     $query->where('is_admin', '=', '0');
            // })
        $users = User::when(strlen($this->search) > 0, function (Builder $query) {
            $query->where('name', 'like', "%$this->search%")
                ->orWhere('email', 'like', "%$this->search%");
        })
        ->orderBy('name','asc')           
        ->paginate(10);
            
        return view('livewire.crm.users-show', compact('users'));
    }

    #[On('user-refresh')]
    public function setRefresh()
    {
        $this->dispatch('$refresh');
    }

}
