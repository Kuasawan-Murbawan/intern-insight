<form id="update-company-form" action="/companies/update" method="POST">

    @csrf

    <label for="companyID">Company ID</label>
    <input type="text" name="companyID" id="companyID">

    <br>

    <label for="name">Name</label>
    <input type="text" name="name" id="name">

    <br>

    <label for="sector">Sector</label>
    <input type="text" name="sector" id="sector">

    <br>

    <label for="employees">No of Employees</label>
    <input type="text" name="employees" id="employeed">

    <br>

    <label for="location">Location</label>
    <input type="text" name="location" id="location">

    <br>

    <label for="website">Website</label>
    <input type="text" name="website" id="website">

    <br>

    <label for="review">No. of Reviews</label>
    <input type="text" name="reviews" id="review">

    <br>

    <button type="submit">Submit</button>

    <br>

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
