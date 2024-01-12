<h1>Admin View</h1>

<table>

    <tr>
        <th>Company Name</th>
        <th>Company ID</th>
        <th>Sector</th>
        <th>No. of Employees</th>
        <th>Location</th>
        <th>Website</th>
        <th>No. of Reviews</th>
        <th> </th>
    </tr>

    @foreach ($companies as $company)
        <tr>
            <td>{{ $company->name }}</td>
            <td>{{ $company->companyID }}</td>
            <td>{{ $company->sector }}</td>
            <td>{{ $company->employees }}</td>
            <td>{{ $company->location }}</td>
            <td>{{ $company->website }}</td>
            <td>{{ $company->reviews }}</td>
        </tr>
    @endforeach

</table>

<a href="{{ route('company.form') }}">Add Company</a>

<br>

<a href="{{ route('company.choose') }}">Choose User</a>

<a href="{{ route('company.update.form') }}">Update Company Details</a>
