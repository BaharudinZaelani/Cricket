<?php 

class Home extends Views{

    function index(){
        // set FE views
        Views::setContentBody([
            "contents/welcome"
        ]);
        
    }

}