<?php
class Str{
    public static $test="Test";
    static function makeSlug($name)
    {
        $slug=str_replace(" ","-",$name);
        return $slug;
    }
    static function test()
    {
        echo self::$test;
    }
}
echo Str::makeSlug("The New Product");
Str::test();


?>



