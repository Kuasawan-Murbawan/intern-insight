<style>
    * {
        margin: 0px;
        padding: 0px;
        box-sizing: border-box;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        text-decoration: none;
        list-style: none;
    }

    body {
        max-width: 100%;
        background-color: #96d0d6;

    }

    .container {
        max-width: 100%;
        background-color: #96d0d6;
        text-align: center;
    }


    h1 {
        text-align: center;
        margin: 20px auto;
    }

    table {
        border-collapse: collapse;
        width: 90%;
        margin: 20px auto;
    }

    th,
    td {
        padding: 10px;
        text-align: left;
        border: 1px solid #ddd;
    }

    th {
        background-color: #f2f2f2;
        font-weight: bold;
        text-align: center;
    }

    tr:nth-child(even) {
        background-color: #f5f5f5;
    }

    tr:nth-child(odd) {
        background-color: #d6cece;
    }

    .adminNavbar {
        background-color: #AAD9BB;
    }

    .another {
        display: inline-block;
        padding: 10px 15px;
        background-color: #4CAF50;
        color: white;
        text-decoration: none;
        border-radius: 5px;
        margin-top: 15px;
        text-align: center;
    }

    .centerC {
        text-align: center;
    }
</style>

@include('components.navbar')

<div class="container">
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
            <th>Actions</th>
        </tr>

        @foreach ($companies as $company)
            <tr>
                <td>{{ $company->name }}</td>
                <td class="centerC">{{ $company->companyID }}</td>
                <td>{{ $company->sector }}</td>
                <td class="centerC">{{ $company->employees }}</td>
                <td>{{ $company->location }}</td>
                <td>{{ $company->website }}</td>
                <td class="centerC"><a href="/review/{{ $company->companyID }}">{{ $company->reviews }}</td>
                <td><a href="/companies/delete/{{ $company->companyID }}">Delete </a><a
                        href="/companies/updateform/{{ $company->companyID }}">Edit</a></td>
            </tr>
        @endforeach
    </table>

    <a class="another" href="{{ route('company.form') }}">Add Company</a>

    <a class="another" href="{{ route('review.init') }}">Initialize Rows</a>
</div>
