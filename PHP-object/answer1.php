<?php
class Foo
{
    /** @var string **/
    private $helloString = 'Hello world!';
    
    /** @var array **/
    public $aArray = [];

    public function printString(): void
    {
        echo $this->helloString;
    }
	
	/** Write here the method */
    public function __toString(): string
    {
        $properties = get_object_vars($this);
        $output = '';
        
        foreach ($properties as $name => $value) {
            $output .= $name . ': ' . var_export($value, true) . PHP_EOL;
        }
        
        return $output;
    }
}

$foo = new Foo();
echo $foo;