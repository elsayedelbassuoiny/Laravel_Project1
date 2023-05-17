<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
    body{
        font-family: Arial, Helvetica, sans-serif;
        margin: 0%;
        padding: 0%;

    }
.card {
  margin:30px;
  box-shadow: 0 5px 10px 0 rgba(0,0,0,0.3);
  transition: 0.3s;
  width: 65%;
  border-radius: 12px;
  align-content: center;

}

.card:hover {
  box-shadow: 0 2px 2px 0 rgba(0,0,0,0.2);
  border: 1px solid #31E1F7;
}

h3{
	color :#31E1F7;
}

.button {
  border: 1px solid #31E1F7;
  color:#31E1F7;
  background-color: rgba(256,256,256);
  padding: 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  font-weight : bold;
  margin: 4px 2px;
  border-radius: 8px;
  cursor: pointer;
}
.button:hover {
  background-color: #31E1F7;
  color: white;
}

.main_container{
    display: flex;
    align-items: center;
    justify-content: center;
}

a{
    color: #31E1F7;
    text-decoration: none;
    font-weight: bold;
    font-size: .88rem;
    font-family: Arial, Helvetica, sans-serif;
}

h1{
    color:#31E1F7;
    margin: 30px;
    text-align: center;
    font-size: 60px;
    font-family: Arial, Helvetica, sans-serif;
}

#download{
    width: calc(100% - 20px);
}

.container {
  padding: 5px 15px;
}
</style>
</head>
<body>

<h1 style="background-color:#31E1F7; color: white; margin:0% ; padding:20px; ">All Subjects</h1>
@foreach ($subjects as $subject )
<div class="main_container">
    <div class="card">
        <div class="container">
          <h2>Subject {{ $subject->id }}</h2>

          <h3><b>{{ $subject->name }} :</b></h3>
          <p>{!! $subject->code !!}</p>
          <p>{!! $subject->department->name !!}</p>
          @if ($subject->pre_requisite != null)
                  <p style="text-indent: 1.5em;">{{ App\Models\Subject::find($subject->pre_requisite)->name }}</p>

              @else
              <p style="text-indent: 1.5em;">None Pre_Requisite</p>
              @endif

              @foreach (json_decode($subject->files) as $fileName)

              <div class="row pb-3">
                  <a href="/files/{{$fileName}}" target="blank" style="display:inline-block">{{$fileName}}</a>
                  <a href="/files/{{$fileName}}" download id="download" class="button button3">Download</a>
              </div>

              @endforeach
                <hr>
              <div class="d-flex justify-content-between">

                  {{-- <small>Created at "{{ $subject->created_at }}"</small> --}}
                  <div>
                      <a href="/subjects/{{$subject->id}}/subscribe" class="button button3">Subscribe</a>

                      {{-- <form method="POST" action={{"/subjects/".$subject->id}} style="display:inline">
                          <input name="_token" value={{csrf_token()}} type="hidden"/>
                          <input name="_method" value="DELETE" type="hidden"/>
                          <button class="button button3" type="submit">Subscribe</button>
                      </form> --}}
                  </div>
              </div>
        </div>
      </div>
</div>

@endforeach
</body>
</html>
