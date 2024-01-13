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


<form action="{{ route('company.create') }}" method="POST">

    @csrf

    <label for="companyID">Company ID</label>
    <br>
    <input type="text" name="companyID" id="companyID">

    <br>

    <label for="name">Name</label>
    <br>
    <input type="text" name="name" id="name">

    <br>

    <label for="sector">Sector</label>
    <br>
    <input type="text" name="sector" id="sector">

    <br>

    <label for="employees">No of Employees</label>
    <br>
    <input type="text" name="employees" id="employeed">

    <br>

    <label for="location">Location</label>
    <br>
    <input type="text" name="location" id="location">

    <br>

    <label for="website">Website</label>
    <br>
    <input type="text" name="website" id="website">

    <br>

    <label for="review">No. of Reviews</label>
    <br>
    <input type="text" name="reviews" id="review">

    <br>

    <button type="submit">Submit</button>

    <br>

    <a href="{{ route('company.admin') }}">List of Companies</a>

</form>
