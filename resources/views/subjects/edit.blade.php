<!DOCTYPE html>
<html>
  <head>
    <title>Contact Form</title>
    <link rel="stylesheet" href="{{asset('css/add_subject.css')}}">

  </head>
  <body>
    <div class="form-container">
      <form action="{{ route('subjects.update',$subject->id)}}" method="POST" id="my-form">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label for="name">Name:</label>
          <input type="text" id="name" name="name" value="{{$subject->name}}" required>
        </div>
        <div class="form-group">
          <label for="code">Code:</label>
          <input type="text" id="code" name="code" value="{{$subject->code}}" required>
        </div>
        <div class="form-group">
          <label for="dep">Department ID:</label>
          <select name="dep" id="dep">
            @foreach ($departmets as $departmet)
             <option value="{{$departmet -> id}}">{{$departmet -> name}}</option>
            @endforeach
          </select>
        </div>
          <div class="form-group">
            <label for="pre">Pre_requisite:</label>
            <select name="pre" id="pre">

              <option value="{{$subject->id}}">{{$subject-> pre_requisite }}</option>
              @foreach ($subjects as $subject)
              <option value="{{$subject->id}}">{{$subject-> name   }}</option>
              @endforeach
            </select>
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
