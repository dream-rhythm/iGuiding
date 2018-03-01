    var wsUri ="ws://127.0.0.1:10909"; 
    
    function init() {  
        testWebSocket(); 
    }  
 
    function testWebSocket() { 
        websocket = new WebSocket(wsUri); 

        websocket.onopen = function(evt) { 
            onOpen(evt) 
        }; 
        websocket.onclose = function(evt) { 
            onClose(evt) 
        }; 
        websocket.onmessage = function(evt) { 
            onMessage(evt) 
        }; 
        websocket.onerror = function(evt) { 
            onError(evt) 
        }; 
    }  
 
    function onOpen(evt) { 
        writeToScreen("CONNECTED"); 
        doSend(want); 
    }  
 
    function onClose(evt) { 
        writeToScreen("DISCONNECTED"); 
    }  
 
    function onMessage(evt) { 
		eval(evt.data)
		tree.clearAll()
		tree.parse(smalltree)
        websocket.close(); 
    }  
 
    function onError(evt) { 
        writeToScreen('<span style="color: red;">ERROR:</span> '+ evt.data); 
    }  
 
    function doSend(message) { 
        writeToScreen("SENT: " + message);  
        websocket.send(message); 
    }  
 
    function writeToScreen(message) { 
		//alert(message)
    }    