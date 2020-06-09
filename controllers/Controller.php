<?php
class Controller extends Database {

    //autoloads views
    public static function CreateView($viewName) {
        require_once("./Views/$viewName.php");
    }

}
?>