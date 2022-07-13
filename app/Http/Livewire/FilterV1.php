<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Statamic\Facades\Entry;
use Barryvdh\Debugbar\Facades\Debugbar;


class FilterV1 extends Component
{

    // this one fucking needs to be private to work with alpine lifewire entagnle
    public $selection = "";
    public $lwResults;

    public $test= [];

    public $collectionType;
    public $filterTax;
    public $currentLocale;

    public function mount($config)
    {
        debug($config);
        $this->collectionType = $config["collectionType"];
        $this->filterTax = $config["tax"];
        $this->currentLocale = $config["currLocale"];
    }

  
    // protected $queryString = [
    //     'tag'
    // ];

    public function render()
    {
        // /** @var \Entry $query */
        // @property Ent

        $query = Entry::query()
            ->where('collection', $this->collectionType)
            ->where('status', 'published')
            ->where('locale', $this->currentLocale)
            // ->where('tags', 'de')

            // ->whereIn($this->selection, ["hallo", "berlin", "test"])
            // ->whereIn($this->selection, ["hallo", "berlin", "test"])
            // ->whereIn('locale', ["s", "berlin", "test"])
            ;

        debug($query->get());
        debug("selection", $this->selection);

        // Filter on tag
        // if (! empty($this->tag)) {
        //     $query->whereTaxonomyIn(["tags::{$this->tag}"]);
        // }

        $this->lwResults = $query
            ->get()
            ->filter(function ($el, $key) {
                return in_array($this->selection, $el->get('tags'));
            })
            // ->all()
            ;
            // ->orderBy('date', 'desc')

        $query
        ->get()
        ->filter(function ($el, $key) {
        //    debug($el->get('tags'));
        //    debug("selection:", $this->selection);
        //    debug(in_array($this->selection, $el->get('tags')));

        //    debug($key);
        });

        // return view('view');
        return view('livewire.filter-v1');
        // return view('livewire.filter-v1',  [Debugbar::debug($this)]);
    }
}
