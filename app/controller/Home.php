<?php 

class Home extends Views{

    function index(){
        // var_dump(PATH);
        // set FE views
        Views::setContentBody([
            "contents/welcome"
        ]);
        
    }

}