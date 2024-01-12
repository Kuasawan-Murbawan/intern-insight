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
        font-size: 32px;
        font-weight: bold;
    }

    table {
        width: 80%;
        border-collapse: collapse;
        margin-bottom: 40px;
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
    }
</style>

<body>

    @include('components.navbar')

    <h1>Reviews</h1>

    {{ $companyID }}

    <table>
        <tr>
            <th>Overall Rating</th>
            <th>Job Title</th>
            <th>Allowance</th>
            <th>Review</th>
            <th>Tips</th>
        </tr>

        @foreach ($reviews as $review)
            <tr>
                <td class="centerB">{{ $review->overallRating }}</td>
                <td>{{ $review->jobTitle }}</td>
                <td class="centerB">{{ $review->allowance }}</td>
                <td>{{ $review->review }}</td>
                <td>{{ $review->tips }}</td>
            </tr>
        @endforeach
    </table>

    <a class="addReview" href="/review/form/{{ $companyID }}">Add Review</a>

</body>
