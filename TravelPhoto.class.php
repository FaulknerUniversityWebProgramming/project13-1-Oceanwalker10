<?php
    /*
       Represents a single travel photo
     */
    class Travelphoto {
        private $date;
        private $fileName;
        private $description;
        private $title;
        private $latitude;
        private $longitude;
        private $ID;

        function __construct($fi, $ti, $de, $la, $lo) {
            static $photoID = 0;
            ++$photoID;
            $this->fileName = $fi;
            $this->title = $ti;
            $this->description = $de;
            $this->latitude = $la;
            $this->longitude = $lo;
            $this->ID = $photoID;
        }

        public function __toString() {
            return '<li>
                        <a href="detail.php?id=' .$this->ID. '" class="img-responsive">
                            <img src="' .$this->fileName. '" alt="' .$this->title. '">
                            <div class="caption">
                                <div class="blur"></div>
                                <div class="caption-text">
                                    <h1>' .$this->title. '</h1>
                                </div>
                            </div>
                        </a>
                    </li>';
        }
    }



?>