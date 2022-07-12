<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Statamic\Facades\Entry;
use Barryvdh\Debugbar\Facades\Debugbar;


class FilterV1 extends Component
{

    public $filter = "";
    public $results;
    public $tag;

    protected $queryString = [
        'tag'
    ];

    public function render()
    {
        // /** @var \Entry $query */
        // @property Ent
 
        $query = Entry::query()
        ->where('collection', 'programme')
        ->where('status', 'published')

        //TODO: locale should be dynamic
        ->where('locale', 'de')

        // ->where('title', 'like' ,'p%');
        ->where('title', '=', '#freebrahms');

        // debug($page->locale());
        debug($query->get());
        // Debug::debug($query->get('title'));

    // Filter on tag
    // if (! empty($this->tag)) {
    //     $query->whereTaxonomyIn(["tags::{$this->tag}"]);
    // }

    $this->results = $query
        ->orderBy('date', 'desc')
        ->get();

    // return view('view');
        return view('livewire.filter-v1');
        // return view('livewire.filter-v1',  [Debugbar::debug($this)]);
    }
}



