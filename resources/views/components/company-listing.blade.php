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

        nav {
            background-color: #F8FAE5;
            height: 80px;
            width: 100%;
        }

        label.logo {
            color: #43766C;
            font-size: 40px;
            line-height: 80px;
            padding: 60px;
            font-weight: bold;
        }

        nav ul {
            float: right;
            margin-right: 25px;
        }

        nav ul li {
            display: inline-block;
            line-height: 80px;
            margin: 0 30px;
        }

        nav ul li a {
            color: #0F1035;
            font-size: 15px;
            font-weight: 90px;
            padding: 8px 12px;
            border-radius: 5px;
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
            height: 500px;
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
            margin-bottom: 20px;
        }

        .card p {
            font-size: 15px;
            margin-bottom: 20px;
            line-height: 1.5;
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
            justify-content: end;
        }

        .button:hover {
            background-color: #0062cc;
        }

        @media screen and (max-width: 940px) {
            .companies {
                display: flex;
                flex-direction: column;
            }

            .card {
                width: 85%;
                display: flex;
                margin: 20px 0px;
            }

        }


        .dashboardNavbar {
            background-color: #AAD9BB;
        }

        img {
            width: 100%;
            height: fit-content;
            object-fit: cover;
            border-radius: 10px;
        }
    </style>
</head>

<body>

    @include('components.navbar')


    <div class="section">
        <div class = "title">
            <h1>List of Companies</h1>
        </div>
        <div class="companies">
            <div class="card">
                <img src="{{ URL('images/maybank-logo.jpg') }}" alt="maybank logo">
                <h2>Maybank</h2>
                <p>Malaysia's largest bank, reigns supreme in Southeast Asia, boasting vast assets and millions
                    of customers. Maybank empowers both individuals and businesses, driving Malaysia's economic growth.
                </p>
                <a href="{{ route('company.details.maybank') }}" class="button">Get Insight</a>
            </div>
            <div class="card">
                <img src="{{ URL('images/tm-logo.png') }}" alt="cimb logo">
                <h2>TM</h2>
                <p>Malaysia's communication provider, connects people and powers. It delivers
                    high-speed internet, and innovative solutions, fueling the nation's
                    digital transformation from cities to remote villages. </p>
                <a href="{{ route('company.details.tm') }}" class="button">Get Insight</a>
            </div>
            <div class="card">
                <img src="{{ URL('images/petronas-logo.jpg') }}" alt="cimb logo">
                <h2>Petronas</h2>
                <p>Malaysia's energy giant, fuels progress globally.It explores, refines, and
                    delivers oil and gas, powering industries and homes worldwide. Its commitment to sustainability
                    guides innovations in green energy.</p>
                <a href="{{ route('company.details.petronas') }}" class="button">Get Insight</a>
            </div>
            <div class="card">
                <img src="{{ URL('images/shell-logo.jpg') }}" alt="cimb logo">
                <h2>Shell</h2>
                <p> Shell, a global energy leader fuels progress from land to sea. A pioneer in oil
                    & gas, it refines and delivers fuel, powering vehicles, and industries. Shell invests in cleaner
                    alternatives like solar and wind energy</p>
                <a href="{{ route('company.details.shell') }}" class="button">Get Insight</a>
            </div>
            <div class="card">
                <img src="{{ URL('images/tnb-logo.jpg') }}" alt="cimb logo">
                <h2>TNB</h2>
                <p> Malaysia's electricity titan, illuminates lives nationwide. It generates, transmits,
                    and distributes power, energizing homes, businesses, and industries.It
                    invests in renewable energy and smart grids.</p>
                <a href="{{ route('company.details.tnb') }}" class="button">Get Insight</a>
            </div>
        </div>
    </div>
</body>

</html>
