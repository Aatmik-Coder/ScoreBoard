<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ScoreCard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
</head>
<body>
    <div class="container">
        <h1>WELCOME TO KACHUFUL SCOREBOARD</h1>
        <input name="csrfToken" value="{{ csrf_token() }}" type="hidden">
        <table class="table">
            <tr class="table-primary">
                <td class="table-primary">TRUMP</td>
                @foreach ($all_players as $player)
                    <td class="table-primary">{!! $player->name !!}</td>
                @endforeach
                <td>Action</td>
            </tr>
            @for($i = 1; $i <= 8; $i++)
                <tr class="table-primary">
                    <td>{!! $i !!}</td>
                    @foreach($all_players as $player)
                        {{-- <form action="" class="form-control"> --}}
                            {{-- <td>{{ $player }}</td> --}}
                            <td class="table-success">
                                <input type="text" class="form-control players" name="player_{!! $player->id !!}_round_{!! $i !!}" id="player_{!! $player->id !!}_round_{!! $i !!}" 
                                     value="{{ $player->scores[0]->score ?? '' }}">
                            </td>
                        {{-- </form> --}}
                    @endforeach
                        <td><button class="btn btn-success rounds" id="round_{!! $i !!}" type="submit">Save</button></td>
                </tr>
            @endfor
        </table>
        <button class="btn btn-warning end_game" type="submit">End Game</button>
    </div>
</body>
<script src="{!! asset('assets/js/scoreboard.js') !!}"></script>
</html>