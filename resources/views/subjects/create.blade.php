<!DOCTYPE html>
<html>
  <head>
    <title>Contact Form</title>
    <link rel="stylesheet" href="{{asset('css/add_subject.css')}}">

  </head>
  <body>
    <div class="form-container">
      <form action="/subjects" method="POST" id="my-form">
        <input name="_token" value="{{ csrf_token() }}" type="hidden" />
        <input name="_method" value="POST" type="hidden"/>
        <div class="form-group">
          <label for="name">Name:</label>
          <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
          <label for="code">Code:</label>
          <input type="text" id="code" name="code" required>
        </div>
        <div class="form-group">
          <label for="dep">Department:</label>
          <select name="dep" id="dep">
            @foreach ($departmets as $departmet)
             <option value="{{$departmet -> id}}">{{$departmet -> name}}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="pre">Pre_requisite:</label>
          <select name="pre" id="pre">
            @foreach ($subjects as $subject)
             <option value="{{$subject -> id}}">{{$subject -> name }}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
            <label for="doc">Doctors:</label>
            <select name="doc" id="doc">
              @foreach ($doctors as $doctor)
               <option value="{{$doctor -> id}}">{{$doctor -> name }}</option>
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
