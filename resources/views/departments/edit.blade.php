<!DOCTYPE html>
<html>
  <head>
    <title>Contact Form</title>
    <link rel="stylesheet" href="{{asset('css/add_subject.css')}}">
    
  </head>
  <body>
    <div class="form-container">
      <form action="{{ route('departments.update',$department->id)}}" method="POST" id="my-form">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label for="name">Name:</label>
          <input type="text" id="name" name="name" value="{{$department->name}}" required>
        </div>
        <div class="form-group">
          <label for="code">Code:</label>
          <input type="text" id="code" name="code" value="{{$department->code}}" required>
        </div>
        
        <div class="form-group">
          <input type="submit" value="Send">
          <input type="button" value="Clear" onclick="clearForm()">
        </div>
      </form>
    </div>

    <script src="{{asset('js/add_subject.js')}}"></script>
  </body>
</html>
