<h1>Submit Review for {{ $companyID }}</h1>


<form action="{{ route('review.create') }}" method="POST">

    @csrf


    <label for="userID">User ID</label>
    <br>
    <input type="text" name="userID" id="userID" value="{{ $userID }}">

    <br>

    <label for="companyID">Company ID</label>
    <br>
    <input type="text" name="companyID" id="companyID" value="{{ $companyID }}">

    <br>

    <label for="jobTitle">Job Title</label>
    <br>
    <input type="text" name="jobTitle" id="jobTitle">

    <br>

    <label for="overallRating">Overall Rating</label>
    <br>
    <input type="number" name="overallRating" id="overallRating">

    <br>

    <label for="allowance">Allowance</label>
    <br>
    <input type="text" name="allowance" id="allowance">

    <br>

    <label for="review">Review</label>
    <br>
    <input type="text" name="review" id="review">

    <br>

    <label for="tips">Tips</label>
    <br>
    <input type="text" name="tips" id="tips">

    <br>


    <button type="submit">Submit</button>

    <br>

    <a href="/review/{{ $companyID }}">List of Companies</a>

</form>
