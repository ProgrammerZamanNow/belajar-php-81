<?php

class Foo {
    final const XX = "Foo";
}

class Bar extends Foo {
    // const XX = "Bar";
}

var_dump(Bar::XX);
