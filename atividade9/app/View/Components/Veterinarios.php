<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Clientes extends Component {

    public $header;
    public $data;
    public $hide;

    public function __construct($header, $data, $hide) {
        $this->header = $header;
        $this->data = $data;    
        $this->hide = $hide;   
    }

    public function render() {

        return view('components.vdatalist');
    }
}