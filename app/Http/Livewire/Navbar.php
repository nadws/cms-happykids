<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Navbar extends Component
{
    public $input_h1, $h1, $img, $teks1, $teks2;
    public function mount()
    {
        $h1 = DB::table('h1')->where('id_h1', 1)->first();
        $img = DB::table('h1')->where('id_h1', 2)->first();
        $teks1 = DB::table('h1')->where('id_h1', 3)->first();
        $teks2 = DB::table('h1')->where('id_h1', 4)->first();

        $this->h1 = $h1->isi;
        $this->img = $img->isi;
        $this->teks1 = $teks1->isi;
        $this->teks2 = $teks2->isi;

        // dd($this->h1->isi);
    }
    public function save_h1()
    {
        DB::table('h1')->where('id_h1', 1)->update(['isi' => $this->input_h1]);
        $this->dispatchBrowserEvent('close-modal');
        // $this->emit('refreshParent');
        // $input_h1 = $this->input_h1;
        // dd($input_h1);
    }
    public function render()
    {
        $data = [
            'ti' => 1
        ];
        return view('livewire.navbar', $data);
    }
}
