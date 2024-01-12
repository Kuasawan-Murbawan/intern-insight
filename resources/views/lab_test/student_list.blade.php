<table>
    <tr>
        <th>Name</th>
        <th>Matric Number</th>
        <th>Phone Number</th>
        <th>Address</th>
    </tr>

    @foreach ($students as $student)
        <tr>
            <td>{{ $student->name }}</td>
            <td>{{ $student->matricNo }}</td>
            <td>{{ $student->phoneNo }}</td>
            <td>{{ $student->address }}</td>
            <td>{{ $student->created_at->format('M d, Y') }}</td>
        </tr>
    @endforeach
</table>
