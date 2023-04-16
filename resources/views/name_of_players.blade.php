<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Name of Players</title>
    <style>
        /* Add the CSS styles here */
        body {
          display: flex;
          flex-direction: column;
          align-items: center;
          justify-content: center;
          height: 100vh;
        }
        .error-alert {
          background-color: rgba(243, 92, 92, 0.76);
          color: white;
          padding: 5px;
          margin-bottom: 10px;
          border-radius: 10px;
        }
        form {
          display: flex;
          flex-direction: column;
          align-items: center;
        }
  
        input[type="text"] {
          padding: 10px;
          font-size: 16px;
          border-radius: 5px;
          border: 2px solid #ccc;
          margin-bottom: 10px;
        }
  
        button[type="submit"] {
          padding: 10px 20px;
          font-size: 18px;
          border-radius: 5px;
          border: none;
          background-color: #4CAF50;
          color: #fff;
          cursor: pointer;
        }
  
        button[type="submit"]:hover {
          background-color: #3e8e41;
        }

        @media only screen and (max-width: 600px) {
            h1 {
                font-size: 1.2rem;
            }

            p {
                font-size: 0.8rem;
            }

            input[type="text"] {
                font-size: 0.9rem;
                max-width: 300px;
            }

            button[type="submit"] {
                font-size: 0.9rem;
            }
        }
      </style>
</head>
<body>
    <h1> Total number of player is {!! $total_player !!}</h1>
    @if ($message = Session::get('error'))
      <div class="error-alert">
        <p>{!! $message !!}</p>
      </div>
    @endif
    <p><span><b>Note:-</b></span>Once you submit the name it can't be modified</p>
    <form action="{!! route('name_of_player') !!}" method="post">
        @csrf
        @for ($i = 1; $i <= $total_player; $i++ )
            <input type="text" class="player_name" id="player_{!! $i !!}" name="player_{!! $i !!}" placeholder="enter player {!! $i !!} name">
        @endfor
        <button type="submit">Submit</button>
    </form>
</body>
{{-- <script src="{!! asset('assets/js/sc.js') !!}"></script> --}}
</html>