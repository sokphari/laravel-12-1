<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border="2px">
        <thead>
            <tr>
                <th>#</th>
                <th>name</th>
                <th>gender</th>
                <th>address</th>
                <th>email</th>
                <th>salary</th>
                <th>position</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <!-- class foreach -->
             @foreach ($employees as $employee)
             <tr>
                 <td>{{$employee->id}}</td>
                 <td>{{$employee->name}}</td>
                 <td>{{$employee->gender}}</td>
                 <td>{{$employee->address}}</td>
                 <td>{{$employee->email}}</td>
                 <td>{{$employee->salary}}</td>
                 <td>{{$employee->position}}</td>
                 <td>
                    <form action="{{ route('destroy',$employee->id) }}" method="post" >
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('are you sure ?')" >DELETE</button>
                    </form>
                    <a href="{{ route('edit.get',$employee->id) }}">Edit</a>
                 </td>
             </tr>  
             @endforeach
        </tbody>
    </table>
</body>

</html>
