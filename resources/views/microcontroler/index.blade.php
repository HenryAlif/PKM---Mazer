@extends('layouts.template_default')

@section('content')
@include('includes.header')

<div class="card">
    <div class="card-header">
      <h4 class="card-title">Microcontroler Monitoring</h4>
    </div>
    <div class="card-content">
      <div class="card-body">
        {{-- <p class="card-text">
          Using the most basic table up, here’s how
          <code>.table</code>-based tables look in Bootstrap. You
          can use any example of below table for your table and it
          can be use with any type of bootstrap tables.
        </p> --}}
        <!-- Table with outer spacing -->
        <div class="table-responsive">
          <table class="table table-lg">
            <thead class="text-center">
              <tr>
                <th>#</th>
                <th>NAME</th>
                <th>CODE</th>
                <th>POSITION</th>
                <th>CONNECTION</th>
                <th>STATUS</th>
              </tr>
            </thead>
            <tbody class="text-center">
                <tr>
                    <td class="text-bold-500">1</td>
                    <td>MICON 1</td>
                    <td>MC1A</td>
                    <td>Carriage 1</td>
                    <td>Connect</td>
                    <td>
                        <button type="button" class="btn btn-success btn-block">Good</button>
                    <td>
                </tr>
                <tr>
                    <td class="text-bold-500">1</td>
                    <td>MICON 2</td>
                    <td>MC1B</td>
                    <td>Carriage 1</td>
                    <td>Connect</td>
                    <td>
                        <button type="button" class="btn btn-danger btn-block">Repair</button>
                    <td>
                </tr>
                <tr>
                    <td class="text-bold-500">1</td>
                    <td>MICON 3</td>
                    <td>MC2A</td>
                    <td>Carriage 2</td>
                    <td>Connect</td>
                    <td>
                        <button type="button" class="btn btn-warning btn-block">Need Check</button>
                    <td>
                </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
</div>
@endsection
