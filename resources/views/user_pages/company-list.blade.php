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
        background-color: #6DA4AA;
    }


    h1 {
        text-align: center;
        margin: 30px;
    }

    table {
        width: 80%;
        border-collapse: collapse;
        margin-bottom: 40px;
        margin: 40px auto;
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

    tr {
        background-color: #ffffff;
    }

    a {
        text-decoration: none;
        color: #007bff;
    }

    .compNavbar {
        background-color: #AAD9BB;
    }

    .centerA {
        text-align: center;
    }
</style>

<body>

    @include('components.navbar')

    <h1>Companies Summary</h1>

    <table>
        <tr>
            <th>Company Name</th>
            <th>Sector</th>
            <th>No. of Employees</th>
            <th>Location</th>
            <th>Website</th>
            <th>No. of Reviews</th>
        </tr>

        @foreach ($companies as $company)
            <tr>
                <td>{{ $company->name }}</td>
                <td>{{ $company->sector }}</td>
                <td class="centerA">{{ $company->employees }}</td>
                <td>{{ $company->location }}</td>
                <td>{{ $company->website }}</td>
                <td class="centerA"><a href="/review/{{ $company->companyID }}">{{ $company->reviews }}</a></td>
            </tr>
        @endforeach
    </table>




</body
