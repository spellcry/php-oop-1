<?php
include __DIR__ . '/Actor.php';

class Movie {
    public $title;
    public $genre;
    public $language;
    public $description;
    public $poster;
    public $actors = [];

    public function __construct($title, $genre, $language, $description, $poster)
    {
        $this->setTitle($title);
        $this->setGenre($genre);
        $this->setLanguage($language);
        $this->setDescription($description);
        $this->setPoster($poster);
    }

    /**
     * Get / Set the value of title
     */ 
    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }
    
    /**
     * Get / Set the value of title
     */ 
    public function getGenre()
    {
        return $this->genre;
    }

    public function setGenre($genre)
    {
        $this->genre = $genre;
    }
    /**
     * Get / Set the value of title
     */ 
    public function getLanguage()
    {
        return $this->language;
    }

    public function setLanguage($language)
    {
        $this->language = $language;
    }
    /**
     * Get / Set the value of title
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }
    /**
     * Get / Set the value of title
     */ 
    public function getPoster()
    {
        return $this->poster;
    }

    public function setPoster($poster)
    {
        $this->poster = $poster;
    }

    /**
     * Get / Set the value of title
     */ 
    public function getActors()
    {
        return $this->actors;
    }

    public function addActor($name, $lastname, $age)
    {
        $actor = new Actor($name, $lastname, $age);
        $actors = $this->getActors();
        if ( !in_array($actor, $actors) )
            array_push($this->actors, $actor);
    }
    
    public function delActor($actor) {
        $actors = $this->getActors();
        if ( in_array($actor, $actors) )
            $pos = array_search($actor, $actors);
            array_splice($this->actors, $pos, 1);
    }

    public function printActors() {
        $actors = $this->getActors();
        $stamp = '';
        foreach ( $actors as $key => $actor ) {
            $stamp .= $actor->getFullName() . ', ';
            if ( $key == count($actors) - 1 )
                $stamp .= $actor->getFullName();
        }
        return $stamp;
    }
}