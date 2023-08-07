<?php

namespace Hakhant\Converter\Contracts;

interface ConverterInterface
{
    public function mm($data);

    public function en($data);

    public function mmDate($date);

    public function mmDateNumber($date);

    public function year($date);

    public function month($date);

    public function day($date);
}