<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <title>Tic Tac Toe</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h2>Tic Tac Toe</h2>
    <table>
        <tr>
            <td class="cell" id="0"></td>
            <td class="cell" id="1"></td>
            <td class="cell" id="2"></td>
        </tr>
        <tr>
            <td class="cell" id="3"></td>
            <td class="cell" id="4"></td>
            <td class="cell" id="5"></td>
        </tr>
        <tr>
            <td class="cell" id="6"></td>
            <td class="cell" id="7"></td>
            <td class="cell" id="8"></td>
        </tr>
    </table>
    <div class="endgame">
        <div class="text"></div>
    </div>
    <button onClick="startGame()">Restart</button>
    <script src="script.js"></script>
    
</body>

</html>
