import os
from websocket_server import WebsocketServer

# Called for every client connecting (after handshake)
def new_client(client, server):
	print("New client connected and was given id %d" % client['id'])
	
	data_Bradley = os.popen('dir /B Nicky*.mp4').readlines()
	#data_Jennifer = os.popen('dir /B Jennifer*.avi').readlines()
	#data_Lin = os.popen('dir /B Lin*.avi').readlines()
	
	str = "var smalltree=["
	str+="{id:'D0441320',value:'Nicky',data:["+fileNameToStr("D0441320",data_Bradley,1)+']},'
	#str+="{id:'2',value:'Jennifer',data:["+fileNameToStr(data_Jennifer,2)+']},'
	#str+="{id:'3',value:'Lin',data:["+fileNameToStr("D0486437",data_Lin,3)+']}'
	str+="];"
	print(str)
	server.send_message_to_all(str)
	
def fileNameToStr(name,data,parent_id):
	print("data=",data)
	string = ""
	for i in range(0,len(data),1):
		#string+="{id:'"+str(parent_id)+'.'+str(i+1)+"',value:'"
		
		data[i]=data[i].split('\n')[0]
		string+="{id:'"+name+"."+str(i)+"',value:'"
		string+=data[i]

		string+="'}"
		if(i!=(len(data)-1)):
			string+=","
	return string
	
	
# Called for every client disconnecting
def client_left(client, server):
	print("Client(%d) disconnected" % client['id'])


# Called when a client sends a message
def message_received(client, server, message):
	if len(message) > 200:
		message = message[:200]+'..'
	print("Client(%d) said: %s" % (client['id'], message))


server = WebsocketServer(10909, host='127.0.0.1' )
server.set_fn_new_client(new_client)
server.set_fn_client_left(client_left)
server.set_fn_message_received(message_received)
server.run_forever()
