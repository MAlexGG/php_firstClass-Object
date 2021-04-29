<?php

class Card {
    public $img;
    public $title;
    public $txt;
    public $template;

    public function __construct($img, $title, $txt)
    {
        $this->img = $img;
        $this->title = $title;
        $this->txt = $txt;
    }
    private function makeTemplate(){
        $this->template =   <<<TAG
    
        <div class="col-lg-4 mb-4">
            <div class="card">
                <img style="width:350px; height:300px"; object-fit:cover" src= {$this->img}>
                <div class="card-body">
                    <h5 class="card-title">{$this->title}</h5>
                    <p class="card-text">{$this->txt}</p>
                    <a href="" class="btn btn-outline-success btn-sm">Read More</a>
                </div>
            </div>
        </div>
     
      TAG;
    }

    public function print(){
        $this->makeTemplate(); echo $this->template;
    }
}

$sunset = new Card("https://images.unsplash.com/photo-1477862096227-3a1bb3b08330?ixlib=rb-1.2.1&auto=format&fit=crop&w=700&q=60", "Sunset", "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut eum similique repellat a laborum, rerum voluptates ipsam eos quo tempore iusto dolore modi dolorum in pariatur. Incidunt repellendus praesentium quae!");

echo $sunset->print();

$forest = new Card("https://images.unsplash.com/photo-1516214104703-d870798883c5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=700&q=60", "Forest", "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut eum similique repellat a laborum, rerum voluptates ipsam eos quo tempore iusto dolore modi dolorum in pariatur. Incidunt repellendus praesentium quae!");

echo $forest->print();

$nationalPark = new Card("https://source.unsplash.com/700x455/?nature", "National Park", "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut eum similique repellat a laborum, rerum voluptates ipsam eos quo tempore iusto dolore modi dolorum in pariatur. Incidunt repellendus praesentium quae!");

echo $nationalPark->print();


?>