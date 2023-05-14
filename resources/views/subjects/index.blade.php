<!DOCTYPE html>
<html lang="en">
<head>
   <link rel="stylesheet" href="{{asset('css/index.css')}}"> 
</head>
<body>
    <a href="{{ route('subjects.create')}}" class="btn">Add New Subject</a>
    
        @foreach ($sub as $subs)
        
         <div>
                <a href="{{ route('subjects.show',$subs -> id)}} " class="name">
                    {{$subs -> name}}  
                </a>
    
                <a href="{{ route('subjects.edit',$subs -> id)}}" class="edit">
                    Edit
                </a>
                <form action="{{ route('subjects.edit',$subs -> id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
         </div>
            
           
        @endforeach 
</body>
</html>
