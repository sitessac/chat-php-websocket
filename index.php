<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>WebSocket em PHP | Eduardo Palandrani</title>
        <link rel="stylesheet" href="/css/normalize.css">
        <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans'>
        <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.3/jquery.mCustomScrollbar.min.css'>
        <link rel="stylesheet" href="/css/style.css">
        <link rel="icon" type="image/png" href="https://cdn2.iconfinder.com/data/icons/servers-clouds-colored/80/websocket-web-socket-protocol-512.png">
    </head>
    <body>
    <div class="chat">
        <div class="chat-title">
            <h1>Servidor WebSocket</h1>
            <h2 class="nick">@localhost</h2>
            <figure class="avatar">
            <img src="https://w7.pngwing.com/pngs/419/473/png-transparent-computer-icons-user-profile-login-user-heroes-sphere-black-thumbnail.png" /></figure>
        </div>
        <div class="messages">
            <div class="messages-content"></div>
        </div>
        <div class="message-box">
            <textarea type="text" class="message-input" placeholder="Digite sua mensagem..."></textarea>
            <button type="submit" class="message-submit">Enviar</button>
        </div>
    </div>
    <div class="bg"></div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.3/jquery.mCustomScrollbar.concat.min.js'></script>
    <script src="/js/index.js"></script>
    </body>
</html>
