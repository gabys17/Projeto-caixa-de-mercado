<?php

namespace App\Http\Livewire;

use App\Models\Produto;
use Livewire\Component;

class CaixaLivewire extends Component
{
    public $items = [];
    public $current_item = null;
    public $produto_codigo = null;
    public $produto_ultimo_codigo = null;
    public $produto_quantidade = 1;

    public function mount()
    {
        $this->addItem(Produto::where('codigo', 789 )->first());
        $this->addItem(Produto::where('codigo', 123456 )->first());
        $this->addItem(Produto::where('codigo', 789 )->first());
        $this->addItem(Produto::where('codigo', 123456 )->first());
        $this->addItem(Produto::where('codigo', 123456 )->first());
        $this->addItem(Produto::where('codigo', 123456 )->first());
        $this->addItem(Produto::where('codigo', 123456 )->first());
        $this->addItem(Produto::where('codigo', 123456 )->first());

    }

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

        $this->produto_ultimo_codigo = $this->produto_codigo;
        $this->produto_codigo = null;
    }

    public function addItem(Produto $produto, $quantidade = null)
    {
        $produto_quantidade = $this->items[$produto->id] ['quantidade'] ?? null;

        $this->current_item = [
            'produto_id' => $produto->id,
            'quantidade' => $produto_quantidade + ($quantidade ?? 1),
            'produto'    => $produto->toArray(),
        ];

        $this->items[$produto->id] = $this->current_item;

    }

    public function removeItem($produto_id)
    {
        unset($this->items[$produto_id]);


        // update item
    }

}
