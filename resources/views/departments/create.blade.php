<!DOCTYPE html>
<html>
  <head>
    <title>Contact Form</title>
    <link rel="stylesheet" href="{{asset('css/add_subject.css')}}">
    
  </head>
  <body>
    <div class="form-container">
      <form action="/departments" method="POST" id="my-form">
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
          <input type="submit" value="Send">
          <input type="button" value="Clear" onclick="clearForm()">
        </div>
      </form>
    </div>

    <script src="{{asset('js/add_subject.js')}}"></script>
  </body>
</html>
