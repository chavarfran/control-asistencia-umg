<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Livewire\WithFileUploads;
use Livewire\Component;

class UserProfile extends Component
{
    use WithFileUploads;
    
    public User $user;
    public $profile_photo;
    public $showSuccesNotification  = false;
    public $showDemoNotification = false;
    
    protected $rules = [
        'user.name' => 'max:40|min:3',
        'user.email' => 'email:rfc,dns',
        'user.phone' => 'max:10',
        'user.about' => 'max:200',
        'user.location' => 'min:3',
        'user.profile_photo' => 'image|max:10240',
    ];

    public function mount() { 
        $this->user = auth()->user();
    }

    public function save() {
        if(env('IS_DEMO')) {
            $this->showDemoNotification = true;
        } else {
            $this->validate();
            
            if ($this->profile_photo) {
                $this->user->profile_photo = $this->profile_photo->store('profile-photos', 'public');
            }
            
            $this->user->save();
            $this->showSuccesNotification = true;
        }
    }

    public function savePhoto() {
        // Aquí el código para guardar la foto.
        if ($this->profile_photo) {
            $this->user->profile_photo = $this->profile_photo->store('profile-photos', 'public');
            $this->user->save();
            $this->showSuccesNotification = true;
        }
    }

    public function render()
    {
        return view('livewire.user.user-profile');
    }
}
