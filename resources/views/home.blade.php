@extends('layouts.default')

@section('header')
    <h2>This is the header</h2>

    @include('sidemenu')
@endsection

@section('maincontent')

    <h1>Home</h1>
    <p>This is the home page.</p>
    <a href="{{ route("testpage") }}">Go to Named Route</a>
    <br><br>
    <!-- <?php echo url('/formsubmit') ?> -->

    <form action="{{ route('formsubmit') }}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" placeholder="Enter your name" required><br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Enter your email" required><br><br>
        <input type="submit" class="submit-btn" value="Submit"><br>
    </form>
@endsection


@section('footer')

    <h2>This is the footer</h2>
@endsection