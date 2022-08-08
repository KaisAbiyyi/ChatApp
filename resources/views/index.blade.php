<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/app.css">
    <title>Chat</title>
</head>

<body>
    <div class="app">
        <header>
            <h3>ChatApps</h3>
            <input type="text" name="username" id="username" placeholder="Your Name">
        </header>
        <div id="messages"></div>
        <form id="message_form">
            <input type="text" name="message" id="message_input" placeholder="Message">
            <button type="submit" id="message_send">></button>
        </form>
    </div>

    <script src="./js/app.js"></script>
</body>

</html>
