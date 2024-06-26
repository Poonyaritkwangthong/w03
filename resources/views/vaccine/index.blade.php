@extends('layouts.app')

@section('title')
Faculty
@endsection

@section('content')
<b><h1 class="text-center text-4xl">Vaccine Page</h1></b>
<div class="flex justify-center mt-5">
    <table class="text-center text-2xl  ">
    <thead class="border-spacing-2 border-collapse border border-slate-500  ">
        <tr>
            <th>V.No</th>
            <th>Vaccine</th>
        </tr>
    </thead>
    <tbody class="border-spacing-2 border-collapse border border-slate-500  ">
        @foreach ($vaccines as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->vaccine_name }}</td>
            </tr>
            @endforeach
    </tbody>
</table>
</div>
<div class="text-xl mt-10 text-center">
    <a href="{{url('/faculty')}}"class=" hover:text-red-500">Faculty Page</a></br>
    <a href="{{url('/program')}}"class=" hover:text-red-500">Program Page</a></br>
    <a href="{{url('/student')}}"class=" hover:text-red-500">Student Page</a></br>
    <a href="{{url('/vaccine')}}"class=" hover:text-red-500">Vaccine Page</a></br>
    <a href=""class=" hover:text-red-500">VaccineRecord Page</a></br>
</div>
@endsection