<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Statamic\Facades\Entry;

class FilterV1 extends Component
{
    // looks like this need to be defined in php to be able to pass properties in antlers
    public $nice;

    public $past = false;
    public $selection;

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

    public function render()
    {

        $query = Entry::query()
            ->where('collection', $this->collectionType)
            ->where('status', 'published')
            ->where('locale', $this->currentLocale);

        $results = $query
            ->get()
            ->filter(function ($el) {
                // if string == '' treat as is no filter, return always true
                return strlen($this->selection) > 0 ? in_array($this->selection, $el->get('tags')) : true;
            })
            // ->orderBy('date', 'desc')
        ;


        debug($query->get());
        debug($results);
        debug("selection", $this->selection);

        return view('livewire.filter-v1',  ['lwResults' => $results]);
    }
}
