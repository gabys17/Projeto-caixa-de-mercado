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
    public $current_item_id  = null;
    public $current_item_quantidade = null;
    public $current_item_codigo = null;
    public $current_item_valor = null;
    public $current_item_estoque = null;
    public $edicao = false;

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

        $produto_quantidade = $this->produto_quantidade && is_numeric($this->produto_quantidade)
                                    ? (int) $this->produto_quantidade : 1;

        if($produto)
            $this->addItem($produto, $produto_quantidade);

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

        $this->current_item_id = $this->current_item['produto_id'];
        $this->current_item_quantidade = $this->current_item['quantidade'];
        $this->current_item_codigo = $this->current_item['produto']['codigo'];
        $this->current_item_valor = $this->current_item['produto']['valor'];
        $this->current_item_estoque = $this->current_item['produto']['codigo'];

        $this->items[$produto->id] = $this->current_item;

    }

    public function removeItem($produto_id)
    {
        unset($this->items[$produto_id]);
    }

    public function edit($produto_id)
    {
        $this->edicao = true;
    }

    public function cancelEdit()
    {
        $this->edicao = false;
    }

    public function updateItemById()
    {
        $this->edicao = false;
        $produto_quantidade = $this->current_item_quantidade;

        $this->current_item['quantidade'] = $produto_quantidade + ($quantidade ?? 1);

        // $this->current_item_id = $this->current_item['produto_id'];
        // $this->current_item_quantidade = $this->current_item['quantidade'];
        // $this->current_item_codigo = $this->current_item['produto']['codigo'];
        // $this->current_item_valor = $this->current_item['produto']['valor'];
        // $this->current_item_estoque = $this->current_item['produto']['codigo'];

        // $this->items[$produto->id] = $this->current_item;
    }

}
