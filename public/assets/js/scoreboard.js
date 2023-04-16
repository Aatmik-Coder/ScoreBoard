$(document).ready(function() {
    var token =  $('input[name="csrfToken"]').attr('value');
    var player_wise_score = [];
    $('.end_game').attr('disabled','disabled');     
    $('.players').on('change', function() {
        let player = this.id.split('_')['1'];
        player_wise_score.push({
            player:player,
            value:this.value
        });
    });

    $('.rounds').on('click', function() {
        let round_players = this.id;
        let split_value = round_players.split('_');
        let round = split_value['1'];

        $.ajax({
            url:"/score",
            method:'POST',
            data:{
                player:player_wise_score,
                round:round,
                _token:token
            },
            success:function (){
                player_wise_score = [];
                $('#'+round_players).attr('disabled','disabled');
                if(round == '8'){
                    $('.end_game').removeAttr('disabled');
                }
            }
        });
    });

    $('.end_game').on('click', function() {
        $.ajax({
            url:"/end_game",
            method:"GET"
        });
    })
});