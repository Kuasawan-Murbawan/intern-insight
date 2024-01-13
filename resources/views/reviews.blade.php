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
        height: 100%;
        background-color: #6DA4AA;
    }

    h1 {
        text-align: center;
        font-size: 32px;
        font-weight: bold;
        margin-top: 20px;
    }

    table {
        width: 80%;
        border-collapse: collapse;
        margin: 40px auto;
        border-radius: 20px;
        box-shadow: #0F1035 0px 0px 10px;
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
        background-color: #b1abab;
    }

    td {
        vertical-align: top;
        /* Adjust for long text in cells */

    }

    .centerB {
        text-align: center;
    }

    .addReview {
        display: block;
        width: 200px;
        margin: 0 auto;
        padding: 10px;
        text-align: center;
        border-radius: 5px;
        background-color: #AAD9BB;
        color: #0F1035;
        font-weight: bold;
        text-decoration: none;
        margin-bottom: 20px;
    }

    .delete-link {
        color: red;
    }
</style>

<body>

    @include('components.navbar')

    <h1>Reviews for {{ $companies->name }}</h1>

    <table>
        <tr>
            <th>Overall Rating</th>
            <th>Job Title</th>
            <th>Allowance</th>
            <th>Review</th>
            <th>Tips</th>
            <th>Actions</th>
        </tr>

        @foreach ($reviews as $review)
            <tr>
                <td class="centerB">{{ $review->overallRating }}</td>
                <td>{{ $review->jobTitle }}</td>
                <td class="centerB">{{ $review->allowance }}</td>
                <td>{{ $review->review }}</td>
                <td>{{ $review->tips }}</td>
                <td class="delete">
                    @if ($review->userID == Auth::user()->id || Auth::user()->name === 'admin')
                        <a class="delete-link" href="/review/delete/{{ $review->reviewID }}">Delete</a>
                    @endif
                </td>
            </tr>
        @endforeach
    </table>

    @if (Auth::user()->name !== 'admin')
        <a class="addReview" href="/review/form/{{ $companyIDcurrent }}">Add Review</a>
    @endif


</body>
