<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{asset('css/adding-department.css')}}">
    <link href="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css')}}" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    @foreach ($dep as $deps)
    {{-- <a href=""> --}}
        <div class="departmet-box">
            {{-- <img src="{{asset('images/i1.gif')}}" alt=""class="dep-img"> --}}
            <h3 class="dep-title">{{$deps -> name}} - {{$deps -> code}} </h3>

        </div>
    {{-- </a>     --}}
@endforeach
<br><br><br>
 <div class="add">
   <button type="button" class="btn-add" id="show-form-btn">Add New Department</button>
 </div>
<form id="my-form" action="/create" method="POST">
    <input name="_token" value="{{ csrf_token() }}" type="hidden" />
        <input name="_method" value="POST" type="hidden"/>
        <label for="department">Name</label>
        <input type="text" id="name" name="name"><br>
        <label>
            Code
            <input type="text" id="code" name="code"><br>
        </label>

    <button type="submit" class="button">Submit</button>
</form>


<script src="{{asset('js/add.js')}}"></script>
</body>
</html>
