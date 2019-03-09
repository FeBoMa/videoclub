@extends('layouts.master')

@section('content')
<?php 
print_r($list);
/*
foreach ($list as $key) {
print_r($key->pivot);
echo "<br><br>"; 
}
*/
/*
foreach ($list as $key) {
   
    print_r($key);
    echo "<br><br>"; 
    //foreach ($key->pivot->pivotParent->movies as $dato) {
    //    print_r($dato->title);
    //    echo "<br><br>"; 
    //}
}*/
?>
<table>
    <tr>
      <th>Email</th>
      <th>Pelicula</th>
      <th>Estado</th>
    </tr>
    <tr>
      <td>Alfreds Futterkiste</td>
      <td>Maria Anders</td>
      <td>Germany</td>
    </tr>
    <tr>
      <td>Centro comercial Moctezuma</td>
      <td>Francisco Chang</td>
      <td>Mexico</td>
    </tr>
    <tr>
      <td>Ernst Handel</td>
      <td>Roland Mendel</td>
      <td>Austria</td>
    </tr>
    <tr>
      <td>Island Trading</td>
      <td>Helen Bennett</td>
      <td>UK</td>
    </tr>
    <tr>
      <td>Laughing Bacchus Winecellars</td>
      <td>Yoshi Tannamuri</td>
      <td>Canada</td>
    </tr>
    <tr>
      <td>Magazzini Alimentari Riuniti</td>
      <td>Giovanni Rovelli</td>
      <td>Italy</td>
    </tr>
  </table>


@stop