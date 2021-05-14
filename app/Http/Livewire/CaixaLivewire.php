<?php

namespace App\Http\Livewire;

use App\Models\Produto;
use Livewire\Component;

class CaixaLivewire extends Component
{
    public $items = [];
    public $current_item = null;
    public $produto_codigo = null;

    public function render()
    {
        return view('livewire.caixa-livewire');
    }

    public function addItemByCodigo()
    {
        if(!$this->produto_codigo || !is_numeric($this->produto_codigo))
            return;

        $produto_codigo = $this->produto_codigo;
        $produto = Produto::where('codigo', $produto_codigo)->first();

        if($produto)
            $this->addItem($produto);

        $this->produto_codigo = null;
    }

    public function addItem(Produto $produto, $quantity = null)
    {
        $produto_quantity = $this->items[$produto->id] ['quantity'] ?? null;

        $this->current_item = [
            'produto_id' => $produto->id,
            'quantity' => $produto_quantity + ($quantity ?? 1),
            'produto' => $produto,
        ];

        $this->items[$produto->id] = $this->current_item;

    }

    public function removeItem($produto_id)
    {
        unset($this->items[$produto_id]);


        // update item
    }

}
