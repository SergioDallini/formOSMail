<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">
    <title>Обратная связь</title>
</head>
<body>
    <div class="container">
        <h1>OS</h1>
        <form id="mailForm">
            <input type="email" name="email" placeholder="Enter your E-Mail here" id="email" class="form-control mb-4">
            <input type="text" name="name" placeholder="Enter your name here" id="name" class="form-control mb-4">
            <input type="phone" name="phone" placeholder="Enter number of your phone here" id="phone" class="form-control mb-4">
            <textarea name="message" placeholder="Enter your message here" id="message" class="form-control mb-4"></textarea>
            <button type="button" id="sendMail" class="btn btn-success">Send</button>
        </form>
        <div id="errorMess"></div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/formMail.js"></script>
</body>
</html>

