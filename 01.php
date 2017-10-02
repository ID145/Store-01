#!/usr/bin/python27
import socket
c = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
saddr = ('192.168.0.155', 8026)
c.connect(saddr)  
c.send('hello server')
data = c.recv(1024)
print "Reply from server %s" % data
