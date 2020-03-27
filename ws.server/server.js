
var io = require('socket.io')(6001);



io.on('connection', function (socket) {
	 console.log('New connection');

	 // socket.send('Message from  server');

	 // socket.emit('server-info', {version: .01});

	 // socket.broadcast.send("New User");

	 socket.on('message',function(data){
	 	socket.broadcast.send(data);
	 });

});