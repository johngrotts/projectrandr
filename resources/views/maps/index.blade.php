@extends('layouts.app')

@section('title', 'Page Title')

@section('content')
  
<style>  
  #info {
    float:left;
	width:300;px
	margin: auto;
  text-align:center;
 
}
#gmap {
  float: left;
    margin: auto;
}
</style>
<div id="info" >
<h4> Find a Resource </h4>
 <h5> Click on a Marker for More Information </h5>
</div>


<div id="gmap" >
<iframe src="http://www.productivetechnical.com/mapapp/phpsqlajax_map_v3.html" style="width: 775px; height: 500px; border: 0; margin:auto; overflow-y:hidden;"></iframe>
</div>
@stop