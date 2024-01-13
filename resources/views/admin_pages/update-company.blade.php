<style>
    body {
        font-family: sans-serif;
        margin: 20px;
    }

    h1 {
        text-align: center;
        margin-bottom: 20px;
    }

    form {
        width: 400px;
        margin: 0 auto;
        border: 1px solid #ccc;
        padding: 20px;
        border-radius: 5px;
    }

    label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
    }

    input[type="text"],
    input[type="submit"] {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 3px;
        margin-bottom: 10px;
        box-sizing: border-box;
        /* Ensure consistent width */
    }

    button {
        background-color: #4CAF50;
        /* Green */
        color: white;
        cursor: pointer;
    }

    button:hover {
        background-color: #3e8e41;
        /* Darker green */
    }

    a {
        display: block;
        text-align: center;
        margin-top: 15px;
        color: #333;
        text-decoration: none;
    }

    a:hover {
        color: #111;
    }
</style>

<form id="update-company-form" action="{{ route('company.update', ['companyID' => $company->companyID]) }} "
    method="POST">

    @csrf

    <h1>Update Company</h1>

    <label for="companyID">Company ID</label>
    <input type="text" name="companyID" id="companyID" value="{{ $company->companyID }}">

    <label for="name">Name</label>
    <input type="text" name="name" id="name" value="{{ $company->name }}">

    <label for="sector">Sector</label>
    <input type="text" name="sector" id="sector" value="{{ $company->sector }}">

    <label for="employees">No of Employees</label>
    <input type="text" name="employees" id="employees" value="{{ $company->employees }}">

    <label for="location">Location</label>
    <input type="text" name="location" id="location" value="{{ $company->location }}">

    <label for="website">Website</label>
    <input type="text" name="website" id="website" value="{{ $company->website }}">

    <label for="reviews">No. of Reviews</label>
    <input type="text" name="reviews" id="reviews" value="{{ $company->reviews }}">

    <label for="logo">Logo</label>
    <input type="text" name="logo" id="logo" value="{{ $company->logo }}">

    <button type="submit">Submit</button>

    <a href="{{ route('company.admin') }}">List of Companies</a>

</form>

<script>
    const companyIDInput = document.getElementById("companyID");
    const form = document.getElementById("update-company-form");

    companyIDInput.addEventListener("change", () => {
        const companyIDValue = companyIDInput.value;
        form.action = `/companies/update/${companyIDValue}`;
        document.getElementById("hidden-companyID").value = companyIDValue; // Also set hidden field
    });
</script>
