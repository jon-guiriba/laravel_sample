@extends('layouts.app')

@section('content')

<div id="addEventModal">
 	<form>
 		<table>
 			<thead>
 				<tr>
 					<th>#</th>
 					<th>Name</th>
 				</tr>
 			</thead>
 			<tbody>
 				<tr>
 					<td>1</td>
 					<td>Pwet</td>
 				</tr>
 			</tbody>
 		</table>
 	</form>
</div>

<div class="container-fluid">
  <div class="height-fullscreen padding-bottom-40 padding-top-20">
    <div id="calendar"></div>
  </div>
</div>
@endsection

