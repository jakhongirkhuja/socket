<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

    
    </head>
    <body>
        <ul class="chat">
            <li></li>
        </ul>
        <form action="">
            
            <textarea></textarea>
            <input type="submit" value="send">
        </form>
<script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.3.0/socket.io.js" ></script>


       <script type="text/javascript">
           
           var socket =  io(':6001');

           function appendMessage(data) {
               $('.chat').append(
                    $('<li/>').text(data.message)
                );
           }

           $('form').on('submit',function(){
            var text =  $('textarea').val();
                msg = {message : text};
                socket.send(msg);
                appendMessage(msg);
                $('textarea').val('');
            return false;
           })
          
            socket.on('message',function(data){
                appendMessage(data);
             });



       </script>
    </body>
</html>
