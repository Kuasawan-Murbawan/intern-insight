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
