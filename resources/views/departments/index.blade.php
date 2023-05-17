<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{asset('css/adding-department.css')}}">
    
    <title>Document</title>
</head>
<body>
    
        @foreach ($dep as $deps)
        <div class="container">
            <a href="{{ route('departments.show',$deps -> id)}} " class="dep-title">{{$deps -> name}} </a>
            <a href="{{ route('departments.edit',$deps -> id)}}" class="edit">
                Edit
            </a>
        </div>    
        
        @endforeach 

        <div class="add">
            <a href="{{ route('departments.create')}}">
              <button type="button" class="btn-add" id="show-form-btn">Add New Department</button>
            </a>
         </div> 
</body>
</html>