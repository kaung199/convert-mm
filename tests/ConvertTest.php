<?php

use Hakhant\Converter\Facades\Convert;

it('can convert to myanmar number', function(){
    $convert = Convert::mm('1234567');

    expect($convert)->toBeString('၁၂၃၄၅၆၇');
});

it('can convert to english number', function(){
    $convert = Convert::en('၁၂၃၄၅၆၇');

    expect($convert)->toBeString('1234567');
});

it('can get all regions for nrc', function(){
    $convert = Convert::regions();

    expect($convert)->toBeArray();
});

it('can convert nrc number to myanmar number', function(){
    $convert = Convert::nrcNumber('215686');

    expect($convert)->toBeString('၂၁၅၆၈၆');
});

it('can convert myanmar date format', function(){
    $today = now();

    $convert = Convert::mmDate($today);

    expect($convert)->toBeString('၂၀၂၃ ခုနှစ်၊သြဂုတ်လ၊ ၀၇ ရက်');
});