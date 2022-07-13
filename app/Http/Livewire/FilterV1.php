<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Statamic\Facades\Entry;
use Barryvdh\Debugbar\Facades\Debugbar;


class FilterV1 extends Component
{

    public $selection = "";
    public $lwResults;
    public $config;
    // ["collectionType" => "programme", "tax" => "", "currLocale" => site:short_locale ]

    public function mount($config)
    {
        debug($config);
        $this->config = $config;
        // $this->email = $contact->email;
    }

    // protected $queryString = [
    //     'tag'
    // ];

    public function render()
    {
        // /** @var \Entry $query */
        // @property Ent

        $query = Entry::query()
            ->where('collection', $this->config["collectionType"])
            ->where('status', 'published')
            ->where('locale', $this->config["currLocale"]);

        debug($query->get());

        // Filter on tag
        // if (! empty($this->tag)) {
        //     $query->whereTaxonomyIn(["tags::{$this->tag}"]);
        // }

        $this->lwResults = $query
            ->orderBy('date', 'desc')
            ->get();

        // return view('view');
        return view('livewire.filter-v1');
        // return view('livewire.filter-v1',  [Debugbar::debug($this)]);
    }
}
