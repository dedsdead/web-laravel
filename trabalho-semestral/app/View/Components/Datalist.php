<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Datalist extends Component {
    
    public $title;
    public $crud;
    public $header;
    public $fields;
    public $data;
    public $hide;
    public $info;
    public $list;
    public $names;
    public $remove;

    public function __construct($title, $crud, $header, $fields, $data, $hide, $info, $list, $names, $remove) {
        $this->title = $title;   
        $this->crud = $crud;   
        $this->header = $header;
        $this->fields = $fields;
        $this->data = $data;    
        $this->hide = $hide;
        $this->info = (array) $info;
        $this->list = $list;
        $this->names = $names;         
        $this->remove = $remove;
    }

    public function render() {
        return view('components.datalist');
    }
}