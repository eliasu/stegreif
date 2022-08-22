<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Statamic\Facades\Entry;
use Barryvdh\Debugbar\Facades\Debugbar;


class FilterV1 extends Component
{

    public $past = true;

    // this one fucking needs to be private to work with alpine lifewire entagnle
    // public $selection = "";
    public $selection;
    // public $lwResults;

    // looks like this need to be defined in php to be able to pass properties in antlers
    public $nice;

    // public $test= [];

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

       
        
       

        // Filter on tag
        // if (! empty($this->tag)) {
        //     $query->whereTaxonomyIn(["tags::{$this->tag}"]);
        // }

        $results = $query
            ->get()
            ->filter(function ($el, $key) {
                // return (strlen($this->selection)>0) ? in_array($this->selection, $el->get('tags')) : true;
                // debug("this is the return");
                // debug(is_string($this->selection) ? in_array($this->selection, $el->get('tags')) : true);
                // debug(in_array($this->selection, $el->get('tags')));

                return strlen($this->selection)>0 ? in_array($this->selection, $el->get('tags')) : true;
                // return true;
                //  return in_array($this->selection, $el->get('tags'));
            })
            // ->all()
            ;
            // ->orderBy('date', 'desc')


            debug($query->get());
            debug($results);
            debug("selection", $this->selection);

        // $query
        // ->get()
        // ->filter(function ($el, $key) {
        // //    debug($el->get('tags'));
        // //    debug("selection:", $this->selection);
        // //    debug(in_array($this->selection, $el->get('tags')));

        // //    debug($key);
        // });

        // return view('view');
        // return view('livewire.filter-v1');




        return view('livewire.filter-v1',  ['lwResults' => $results]);
    }
}
