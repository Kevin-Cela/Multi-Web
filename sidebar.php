<html>

<head>
    <style>
        .sidenav {
            height:calc(100% - 40px);
            width: 20%;
            background-color: #BFAAAA;
            display: grid;
            grid-template-columns: 80%;
            row-gap: 5px;
            grid-auto-rows: min-content;
            justify-content: center;
            padding: 15px 15px;
            float: right;
            position: relative;
            z-index: 1;
            box-sizing: border-box;
            overflow: auto;

        }

        .card {
            color: white;
            border: 2px white solid;
            border-radius: 8px;
            width: 100%;
            aspect-ratio: 1/1;
            background-color: black;
            text-align: center;
            box-sizing: border-box;
            padding: 10px 0px;

            display: grid;
            grid-template-columns: 90%;
            row-gap: 5px;
            grid-template-rows: 1fr 9fr;
            justify-content: center;
            align-items: center;
        }

        .card-text {
            color: beige;
            border: double 2px azure;
            height: 100%;
            border-radius: 8px;
            box-sizing: border-box;

        }

        .card-caption {
            height: 100%;
        }

        .sidenav::-webkit-scrollbar {
            width: 0px;
        }

        /* Track */
        .sidenav::-webkit-scrollbar-track {
            box-shadow: inset 0 0 5px grey;
            border-radius: 10px;
        }

        /* Handle */
        .sidenav::-webkit-scrollbar-thumb {
            background: red;
            border-radius: 10px;
        }

        /* Handle on hover */
        .sidenav::-webkit-scrollbar-thumb:hover {
            background: #b30000;
        }
    </style>
</head>

<body>

    <div class="sidenav">
        <div class="card">
            <div class="card-caption">News 1</div>
            <div class="card-text">
                <p>A multipurpose web app that will include small projects </p>
            </div>
        </div>
        <div class="card">
            <div class="card-caption">News 1</div>
            <div class="card-text">
                <p>A multipurpose web app that will include small projects</p>
            </div>
        </div>
        <div class="card">
            <div class="card-caption">News 1</div>
            <div class="card-text">
                <p>A multipurpose web app that will include small projects</p>
            </div>
        </div>
        <div class="card">
            <div class="card-caption">News 1</div>
            <div class="card-text">
                <p>A multipurpose web app that will include small projects</p>
            </div>
        </div>
        <div class="card">
            <div class="card-caption">News 1</div>
            <div class="card-text">
                <p>A multipurpose web app that will include small projects</p>
            </div>
        </div>
        <div class="card">
            <div class="card-caption">News 1</div>
            <div class="card-text">
                <p>A multipurpose web app that will include small projects</p>
            </div>
        </div>
        <div class="card">
            <div class="card-caption">News 1</div>
            <div class="card-text">
                <p>A multipurpose web app that will include small projects</p>
            </div>
        </div>
    </div>
</body>

</html>