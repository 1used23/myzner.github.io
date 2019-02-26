<?php

class General
{
    const APIKEY = "49dcd9ba";
    const SENDREQUEST = "http://www.omdbapi.com/?apikey=" . self::APIKEY . "&plot=full&t=";

    private $movieName;

    private $movieData = [];

    private $neededKeys = [
        'Title',
        'Year',
        'Released',
        'Genre',
        'Director',
        'Plot',
        'Poster'
    ];

    public function __construct($movieName) {
        $this->movieName = $movieName;
        $this->ifGetCorrect($this->movieName);
    }

    public function getMovieName() {
        echo $this->movieData->Title;
    }

    private function ifGetCorrect() {
        if(trim($this->movieName) != '') {
            $this->getMovieData($this->movieName);
        } else {
            echo "Проверьте данные";
            throw new Exception('Данные неверны');
        }
    }
    
    private function getMovieData($movieName) {
        $this->movieData = json_decode(file_get_contents(self::SENDREQUEST . $movieName));
        //$this->echoMovieData($this->movieData, $this->neededKeys);
    }

    public function echoMovieData() {
        $movieData = $this->movieData;
        $neededKeys = $this->neededKeys;
        foreach($neededKeys as $key) {
            switch($key) {
                case $key != 'Poster':
                    echo "<p сlass='$key'>" . $movieData->$key . "</p>";
                    break;

                case $key == 'Poster':
                    echo "<img src=" . $movieData->$key . "сlass='$key'>" ;

            }
        }
        }
    }


$movieNameFromGet = $_GET['movieName'];
$data = new General($movieNameFromGet);