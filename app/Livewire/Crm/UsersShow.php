<?php

namespace App\Livewire\Crm;

use App\Models\User;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

#[Layout('livewire.layout.themebd')]
class UsersShow extends Component
{
    use WithPagination;

    public $search;

    public function render()
    {
        $users = User::when(strlen($this->search) > 0, function (Builder $query) {
            $query->where('name', 'like', "%$this->search%")
                ->orWhere('email', 'like', "%$this->search%");
        })
            // ->when($level < 2, function (Builder $query) {
            //     $query->where('is_admin', '=', '0');
            // })
            ->paginate(10);
            
        return view('livewire.crm.users-show', compact('users'));
    }
}
