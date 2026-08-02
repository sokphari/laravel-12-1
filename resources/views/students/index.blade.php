<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>NAME</th>
                <th>GENDER</th>
                <th>PHONE</th>
                <th>ADDRESS</th>
                <th>IMAGE</th>
                <th>CREATED AT</th>
                <th>UPDATED AT</th>
                <th>ACTIONS</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->gender }}</td>
                    <td>{{ $student->phone }}</td>
                    <td>{{ $student->address }}</td>
                    <td>
                        @if ($student->image)
                            <img src="{{ asset('storage/' . $student->image) }}" alt="Image" width="100">
                        @endif
                    </td>
                    <td>{{ $student->created_at }}</td>
                    <td>{{ $student->updated_at }}</td>
                    <td>
                        <form action="{{route('student.destroy',$student->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick= "return confirm('Are you sure?')">DELETE</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>