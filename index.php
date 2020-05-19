<?php

class Collection
{

    protected $items =[];

    /**
     * Collection constructor.
     * @param array $items
     */
    public function __construct(array $items)
    {
        $this->items = $items;
    }

    public function sum($key)
    {
        return array_sum(array_column($this->items, $key));
    }

}

class VideosCollection extends Collection
{
    public function length()
    {
        return $this->sum('length');
    }
}

class Video
{
    protected $title;
    public $length;

    public function __construct($title, $length)
    {
        $this->title = $title;
        $this->length = $length;
    }
}

$videos= new VideosCollection([
    new Video('video 1', 100),
    new Video('video 2', 150),
    new Video('video 3', 200),
    new Video('video 4', 300),
]);

echo $videos->length();


