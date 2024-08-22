<?php

namespace App\Livewire;

use App\Models\Items;
use Livewire\Component;

class ItemManager extends Component
{
    public $items;
    public $name, $description, $STR, $DEX, $CON, $INT, $SAG, $CHA;
    public $item_id;
    public $isOpen = 0;

    public function render()
    {
        $this->items = Items::all(); // Utilise le modèle Item
        return view('livewire.item-manager');
    }

    public function create()
    {
        $this->resetInputFields();
        $this->openModal();
    }

    public function openModal()
    {
        $this->isOpen = true;
    }

    public function closeModal()
    {
        $this->isOpen = false;
    }

    private function resetInputFields()
    {
        $this->name = '';
        $this->description = '';
        $this->STR = '';
        $this->DEX = '';
        $this->CON = '';
        $this->INT = '';
        $this->SAG = '';
        $this->CHA = '';
        $this->item_id = null;
    }

    public function store()
    {
        $this->validate([
            'name' => 'required',
            'STR' => 'required|integer',
            'DEX' => 'required|integer',
            'CON' => 'required|integer',
            'INT' => 'required|integer',
            'SAG' => 'required|integer',
            'CHA' => 'required|integer',
        ]);

        Items::updateOrCreate(['id' => $this->item_id], [ // Utilise le modèle Item
            'name' => $this->name,
            'description' => $this->description,
            'STR' => $this->STR,
            'DEX' => $this->DEX,
            'CON' => $this->CON,
            'INT' => $this->INT,
            'SAG' => $this->SAG,
            'CHA' => $this->CHA,
        ]);

        session()->flash('message',
            $this->item_id ? 'Item Updated Successfully.' : 'Item Created Successfully.');

        $this->closeModal();
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $item = Items::findOrFail($id); // Utilise le modèle Item
        $this->item_id = $id;
        $this->name = $item->name;
        $this->description = $item->description;
        $this->STR = $item->STR;
        $this->DEX = $item->DEX;
        $this->CON = $item->CON;
        $this->INT = $item->INT;
        $this->SAG = $item->SAG;
        $this->CHA = $item->CHA;

        $this->openModal();
    }

    public function delete($id)
    {
        Items::find($id)->delete(); // Utilise le modèle Item
        session()->flash('message', 'Item Deleted Successfully.');
    }
}
