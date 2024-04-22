<?php
    class Arrayvalue implements jsonserializable
        {
            public function __construct(array $array)
                {
                    $this->array=$array;
                }
            public function jsonserialize()
                {
                    return $this->array;
                }

        }
        $array=[1,2,3];
        echo json_encode(new Arrayvalue($array));
        
?>