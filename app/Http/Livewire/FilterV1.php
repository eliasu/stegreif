<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Statamic\Facades\Entry;

class FilterV1 extends Component
{
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
        $this->selection = $config["preselection"];
    }

    public function checkHayStackForAllElements($needleArray, $hayStack)
    {
        if (!($needleArray && $hayStack)) return;

        $needleLength = count($needleArray);
        $intersectLength = count(array_intersect($needleArray, $hayStack));

        if ($needleLength == $intersectLength) return true;
    }

    public function render()
    {

        $query = Entry::query()
            ->where('collection', $this->collectionType)
            ->where('status', 'published')
            ->where('locale', $this->currentLocale);

        if (count($this->selection) > 0) {
            $results = $query
                ->get()
                ->filter(function ($el) {
                    $taxoTerms = $el->get($this->filterTax);
                    return $this->checkHayStackForAllElements($this->selection, $taxoTerms);
                });
        } else {
            $results = $query->get();
        }

        debug($query->get());
        debug($results);
        debug("selection", $this->selection);

        return view('livewire.filter-v1',  ['lwResults' => $results]);
    }
}
