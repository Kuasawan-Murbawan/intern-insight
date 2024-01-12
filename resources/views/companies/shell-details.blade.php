<!DOCTYPE html>
<html lang="en">

<head>
    <title>Shell</title>

    <style>
        * {
            box-sizing: border-box;
            border-width: 0;
            border-style: solid;
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        button {
            background-color: transparent;
        }

        button,
        input,
        optgroup,
        select,
        textarea {
            font-size: 100%;
            line-height: 1.15;
            margin: 0;
        }


        input {
            padding: 2px 4px;
        }

        img {
            display: block;
        }

        html {
            font-size: 16px;
        }

        body {
            font-weight: 400;
            font-style: normal;
            text-decoration: none;
            text-transform: none;
            letter-spacing: normal;
            line-height: 1.15;
            color: var(--dl-color-gray-black);
            background-color: var(--dl-color-gray-white);
            max-width: 100%;
            background-color: #6DA4AA;
        }

        .shell-container {
            width: auto;
            display: flex;
            overflow: auto;
            min-height: 100vh;
            align-items: center;
            flex-direction: column;
            justify-content: flex-start;
            background-color: #6DA4AA;
        }

        .shell-company1 {
            top: 150px;
            left: 0px;
            right: 0px;
            width: 1069px;
            height: 600px;
            margin: auto;
            display: flex;
            position: absolute;
            align-self: center;
            box-shadow: 5px 5px 20px 1px #3e3e3e;
            align-items: flex-start;
            padding-top: 55px;
            border-radius: var(--dl-radius-radius-radius8);
            flex-direction: column;
            justify-content: center;
            background-color: #fffdfd;
            border-radius: 10px;
        }

        .shell-logo {
            top: 120px;
            left: 42px;
            width: 200px;
            height: 250px;
            display: flex;
            position: absolute;
            align-items: center;
            border-color: var(--dl-color-gray-black);
            border-width: 1px;
            border-radius: Radius64;
            justify-content: center;
            background-color: rgba(0, 0, 0, 0.8);
            border-radius: 5px;
        }

        .shell-text {
            left: 0px;
            color: #fff100;
            right: 0px;
            width: 153px;
            bottom: 22px;
            margin: auto;
            position: absolute;
            font-size: 2em;
            align-self: flex-end;
            text-align: center;
        }

        .shell-pasted-image {
            top: 24px;
            left: 0px;
            right: 0px;
            width: 180px;
            margin: auto;
            position: absolute;
        }

        .shell-text03,
        .shell-text06 {
            position: absolute;
            left: 260px;
        }

        .shell-text03 {
            top: 120px;
            font-size: 2.5em;
            color: #000000;
        }

        .shell-text06 {
            top: 160px;
            font-size: 2rem;
            color: #3c3b3b;
        }

        .shell-text09 {
            top: 230px;
            left: 260px;
            right: 25px;
            position: absolute;
            font-size: 23px;
            text-align: left;
            color: #3c3b3b;
        }

        .shell-text10,
        .shell-text11,
        .shell-text14 {
            position: absolute;
            font-size: 18px;
            color: #3c3b3b;
            display: block;
            width: auto;
            margin: 0 auto;
            padding: 10px;
            text-align: center;
            border-radius: 5px;
            background-color: #AAD9BB;
            color: #2e329b;
            text-decoration: none;
        }

        .shell-text10 {
            top: 450px;
            left: 260px;
        }

        .shell-text11 {
            top: 450px;
            left: 360px;
        }

        .shell-text14 {
            top: 450px;
            left: 470px;
        }

        .shell-button {
            left: 476px;
            bottom: 49px;
            position: absolute;
            transition: 0.3s;
            color: #3c3b3b;
            border-radius: var(--dl-radius-radius-radius8);
            background-color: transparent;
        }

        .shell-button:hover {
            color: #ffffff;
            border-radius: var(--dl-radius-radius-radius8);
            background-color: #000000;
        }

        @media(max-width: 1200px) {
            .shell-company1 {
                top: 213px;
                left: 0px;
                right: 0px;
                width: 1031px;
                height: 633px;
                margin: auto;
                box-shadow: 5px 5px 10px 0px #000000;
                border-width: 0px;
                background-color: var(--dl-color-gray-white);
            }

            .shell-logo {
                top: 134px;
                left: 40px;
            }

            .shell-text03 {
                top: 130px;
                font-size: 1.8em;
            }

            .shell-text06 {
                top: 165px;
                font-size: 1.3rem;
            }
        }
    </style>
</head>

<body>

    @include ('components.navbar')

    <div class="shell-container">
        <div class="shell-company1">
            <div class="shell-logo">
                <h1 class="shell-text">
                    <span>Shell</span>
                </h1>
                <img alt="pastedImage" src="{{ URL('images/shell-logo.jpg') }}" class="shell-pasted-image" />
            </div>
            <h1 class="shell-text03">
                <span>Shell</span>
                <br />
            </h1>
            <h2 class="shell-text06">
                <span class="shell-text07">Oil &amp; Gas Sector</span>
                <br />
            </h2>
            <p class="shell-text09">

                Shell, a global energy leader for over a century, fuels progress from land to sea. A pioneer in oil &
                gas, it refines and delivers fuel, powering vehicles, industries, and everyday life. Embracing a future
                beyond fossil fuels, Shell invests in cleaner alternatives like solar and wind energy, shaping a
                sustainable future for all
            </p>
            <a class="shell-text10" href="/review/shl1">Reviews</a>
            <span class="shell-text11">
                <span>Positions</span>
                <br />
            </span>
            <span class="shell-text14">
                <span>Allowance Submitted</span>
                <br />
            </span>
        </div>

    </div>

    <a class="showReview" href="/review/shl1">Show Reviews</a>

</body>

</html>
