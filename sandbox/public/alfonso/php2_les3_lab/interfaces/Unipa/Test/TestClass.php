<?php 

namespace Unipa\Test;

class TestClass implements TestInterface {

     /**
     * Return a variable type.
     * NULL is NOT allowed
     * PHP does not check return type ? declared in the interface;
     * Therefore, does return type not belong to the signature of the function?
     * @param string $variable
     * @return string type
     */
    public static function getVarType($variable) : string {
        if (is_null($variable))
            return $variable;
        return gettype($variable);
    }

    public function getType() : string {
       return TestClass::getVarType($this);
    }

    static function getTestReturn($variable) : ?int {
        return 0;
    }

}