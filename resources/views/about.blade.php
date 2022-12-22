@extends('index')

@section('Input')

 <body>
        <style>
            body {
                background-color: lightgray;
            }

            .container{
                padding: 50px 80px
            }

            .col img{
                margin-top: 100px;
                width: 500px;
                align-content: center;

            }


        </style>

        <div class="container">
        <div class="container text-center">
            <div class="row">
                <div class="col">
                   <img src="https://www.oversteer48.com/wp-content/uploads/2022/07/Nurburgring-or-Nordschleife-or-Sudschleife-or-GP-Track-2.jpg" alt="">
                </div>
                <div class="col">
                    <h2> <b> Nurburgring Track </b> </h2>
                    <p class="text-start">The Nürburgring is a 150,000 person capacity motorsports complex located in the town of Nürburg, Rhineland-Palatinate, Germany. It features a Grand Prix race track built in 1984, and a much longer Nordschleife "North loop" track which was built in the 1920s around the village and medieval castle of Nürburg in the Eifel mountains. The north loop is 20.830 km (12.943 mi) long and has more than 300 metres (1,000 feet) of elevation change from its lowest to highest points. Jackie Stewart nicknamed the old track "The Green Hell".
                        Originally, the track featured four configurations: the 28.265 km (17.563 mi)-long Gesamtstrecke ("Whole Course"), which in turn consisted of the 22.835 km (14.189 mi) Nordschleife ("North Loop") and the 7.747 km (4.814 mi) Südschleife ("South Loop"). There was also a 2.281 km (1.417 mi) warm-up loop called Zielschleife ("Finish Loop") or Betonschleife ("Concrete Loop"), around the pit area.
                        Between 1982 and 1983, the start/finish area was demolished to create a new GP-Strecke, which is now used for all major and international racing events. However, the shortened Nordschleife is still in use for racing, testing and public access.
                    </p>
                </div>
            </div>
        </div>
    </div>

    </body>


@endsection
