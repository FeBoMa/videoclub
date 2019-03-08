@extends('layouts.master')

@section('content')
<?php 
foreach ($list as $key) {
    print_r($list);
    echo "<br><br>";
}

?>
@stop