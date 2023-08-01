<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\TemporaryUploadedFile;

class ImageUpload extends Component
{
    use WithFileUploads;

    // /**
    //  * @var \Livewire\TemporaryUploadedFile[]
    // */
    public $image = [];

    public function render()
    {
        return view('livewire.image-upload', [
            'images' => collect(Storage::files('public'))
                ->filter(function ($file) {
                    return in_array(strtolower(pathinfo($file, PATHINFO_EXTENSION)), ['png', 'jpeg', 'jpg', 'gif', 'webp']);
                })
                ->map(function ($file) {
                    return Storage::url($file);
                })
        ]);
    }

    public function save()
    {
        $this->validate([
            'image.*' => 'image|max:1024' //1MB MAX
        ]);

        foreach ($this->image as $image) {
            // $image->store('public'); // saves image with temporary name

            $image->storeAs('public', $image->getClientOriginalName()); // Saves image with original name
        }
    }
}
