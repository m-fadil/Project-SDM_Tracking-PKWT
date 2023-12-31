<?php

namespace App\Http\Livewire;

use App\Models\Bagian;
use App\Models\Departemen;
use App\Models\Divisi;
use App\Models\Karyawan;
use Livewire\Component;

class Sto extends Component
{
    public $hasDivisi;
    public $hasDepartemen;

    public function updatedHasDivisi($newValue)
    {
        $this->hasDepartemen = Departemen::where('divisi_id', $newValue)->first()->id;
    }

    public function mount()
    {
        $this->hasDivisi = 1;
        $this->hasDepartemen = 1;
    }

    public function render()
    {
        $divisis = Divisi::all();
        $departemens = Departemen::all();
        $bagians = Bagian::all();

        return view('livewire.sto', compact('divisis', 'departemens', 'bagians'));
    }
}
