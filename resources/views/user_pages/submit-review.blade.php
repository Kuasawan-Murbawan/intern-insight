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

<h1>Submit Review for {{ $companyID }}</h1>


<form action="{{ route('review.create') }}" method="POST">

    @csrf


    <label for="userID">User ID</label>
    <br>
    <input type="text" name="userID" id="userID" value="{{ $userID }}" readonly>

    <br>

    <label for="companyID">Company ID</label>
    <br>
    <input type="text" name="companyID" id="companyID" value="{{ $companyID }}" readonly>

    <br>

    <label for="jobTitle">Job Title</label>
    <br>
    <input type="text" name="jobTitle" id="jobTitle">

    <br>

    <label for="overallRating">Overall Rating</label>
    <br>
    <input type="number" name="overallRating" id="overallRating" min="1" max="5">

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

    <a href="/review/{{ $companyID }}">List of Reviews</a>

</form>
