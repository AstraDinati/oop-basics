<?php 
class GrandPerentClass
{

}
class ParentClass extends GrandPerentClass
{

}
class ChildClass extends ParentClass
{

}

var_dump(is_subclass_of('ChildClass', 'GrandPerentClass'));