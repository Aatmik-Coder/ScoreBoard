<!DOCTYPE html>
<html>
  <head>
    <title>Example Page</title>
    <style>
      /* CSS styles */
      body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: 100vh;
      }
      
      h1 {
        font-size: 32px;
        color: #333;
        margin-top: 20px;
        margin-bottom: 10px;
      }
      
      h2 {
        font-size: 24px;
        color: #666;
        margin-top: 15px;
        margin-bottom: 8px;
      }
      
      h3 {
        font-size: 20px;
        color: #999;
        margin-top: 10px;
        margin-bottom: 5px;
      }
      
      input[type="text"] {
        padding: 10px;
        font-size: 16px;
        border-radius: 5px;
        border: 2px solid #ccc;
        margin-bottom: 10px;
      }
      
      button {
        padding: 10px 20px;
        font-size: 18px;
        border-radius: 5px;
        border: none;
        background-color: #4CAF50;
        color: #fff;
        cursor: pointer;
      }
      
      button:hover {
        background-color: #3e8e41;
      }
    </style>
  </head>
  <body>
    <h1>WELCOME TO KACHUFUL SCORE BOARD</h1>
    <h2>ENTER TOTAL NUMBER OF PLAYER</h2>
    <form action="{!! route('player') !!}">
        <input type="text" name="number_of_player" placeholder="e.g 5 or 6">
        <button type="submit">Submit</button>
    </form>
  </body>
</html>
