@extends('layouts.master')

@section('content')
<?php 
//print_r($list);

foreach ($list as $key) {
    print_r($key);
    echo "<br><br>";
}
?>

@stop