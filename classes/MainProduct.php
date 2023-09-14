<?php

abstract class MainProduct
{
    use DataConn;

    abstract protected function validateProduct();
}
