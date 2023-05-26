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
        return $this->helloString;
    }
}

$foo = new Foo();
echo $foo;