<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Listings</title>

    <style>
        * {
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            text-decoration: none;
            list-style: none;
        }

        a.active,
        a:hover {
            background-color: #AAD9BB;
        }

        body {
            max-width: 100%;
            background-color: #6DA4AA;
        }

        .title h1 {
            text-align: center;
            padding-top: 50px;
            font-size: 45px;
            color: #0F1035;
        }

        .title h1::after {
            content: "";
            height: 5px;
            width: 350px;
            background-color: #E5E1DA;
            display: block;
            margin: auto;
        }

        .companies {
            width: 90%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 90px auto;
            text-align: center;
        }

        .card {
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-direction: column;
            margin: 0px 20px;
            padding: 20px 20px;
            background-color: white;
            border-radius: 10px;
            cursor: pointer;
        }

        .card .icon {
            font-size: 35px;
            margin-bottom: 7px;
        }

        .card h2 {
            font-size: 25px;
            color: #365486;
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .card h4 {
            text-align: left;
            font-size: 20px;
            color: #29ADB2;
            margin-bottom: 5px;
        }

        .card ul {
            margin-bottom: 10px;
            margin-right: 25px;
            margin-left: 25px;
        }

        .card ul li {
            color: #0F1035;
            font-size: 15px;
            font-weight: 90px;
            line-height: 15px;
            padding: 8px 12px;
            border-radius: 5px;
        }

        .button {
            font-size: 15px;
            font-weight: 5px;
            text-decoration: none;
            color: #fff;
            background-color: #2c677c;
            padding: 8px 12px;
            border-radius: 7px;
            letter-spacing: 1px;
        }

        .button:hover {
            background-color: #0062cc;
        }

        .container {
            width: 90%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 90px auto;
            text-align: center;
        }

        .alpha {
            width: 50%;
            margin: 70px 350px;
            padding: 20px 20px;
            border-radius: 10px;
            color: #fff;
        }

        .alpha h2 {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-size: 50px;
            line-height: 50px;
        }

        .alpha h1 {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-size: 45px;
            line-height: 90px;
        }

        .alpha p {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-size: 25px;
            line-height: 40px;
        }
    </style>
</head>

<body>

    <div class="section">
        <div class = "title">
            <h1>List of Companies</h1>
        </div>
    </div>

    <div class="companies">
        @foreach ($companies as $company)
            <div class="card">
                <img src="{{ URL('images/' . $company->logo) }}" alt="">
                <h2>{{ $company->name }}</h2>
                <h4>{{ $company->sector }}</h4>
                <ul>
                    <li>Employee: {{ $company->employees }}</li>
                    <li>Location: {{ $company->location }}</li>
                </ul>
                <a href="/details/{{ $company->companyID }}" class="button">Get Insight</a>
            </div>
        @endforeach

    </div>


</body>

</html>
