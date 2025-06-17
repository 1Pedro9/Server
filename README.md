
# Server
## **Server Information**

#### Device
> Old Desktop Computer
> - 2TB of HDD Storage
> - 8GB RAM DDR3
> - Intel i7 Gen 3
> - 
> Ports
> - 2x HDMI
> - 2x VGA
> - 10x USB
> - 1x Ethernet
> - 1x RGB Display
> - CD Scanner
> - SATA Ports Open
> - 

#### System
> Operating System
> - Fedora Workstation
> - Fedora Server
> - Ubuntu Server (Current One In Use)

## **Server Needs**
What does the server need to be able to do for me in order to replace either my online servers or any other servers that I pay or potentially pay money for. For instance like google drive.

1. **Drive**: It needs to be able to act as a online drive which I can use to store my data. I want to be able to backup my whole phone to it and I also want to be able to store photos or games or software. It needs to mimic: Google drive, One drive, iCloud storage, Dropbox. 
2. **Email**: Of course if it can handle the drive then it should also be able to handle emails that are being sent. It needs to be able to create and manage email accounts and should also be able to receive and send emails. It needs to also have a spam folder and needs to be able to see certain emails and identify it as spam. 
3. **Messaging**: I want it to be able to act as a messaging server in order to be able to have no restrictions as to what is being sent. Also it will then be end-to-end encrypted and no one would be able to see your information. It is a replacement for WhatsApp.
4. **Web Hosting**: It needs to take over my web server which I need to pay for each year. It needs to be able to host websites and use git and be able to run applications and all of the normal cpanel functionality. 
5. **Database**: The server needs to be able to run SQL databases without any restrictions. I need to be able to access it from another device easily and also write queries to it as the user that I am logged into. Thus the server also needs to be able to handle users. Different users all getting the server's resources
6. **Software**: You need to be able to install software and it needs to thus be able to also run it so the user needs to have terminal access as well
7. **Media Server**: The computer needs to be able to stream movies, videos, music, etc. without needing to check copyright. 
8. **Security System**: Because the server will be able to be accessed from outside the network. It needs to be able to have a security camera system where it is able to identify faces, fit them with known faces and show what they are prone to do. 
9. **Running AI**: This does not necessarily mean only AI, but for instance users can get a service which allows them to add pictures or videos and then server will use its computing power to run facial recognition and then give you feedback. So you can run models and programs through this. 
10. **Cyber Security**: For this section I want cyber security tools to be pre installed for a user to be able to use those tools from the server to run cyber security functions

The server will be open source making it able for users from the outside to push updates and software to the server to use. 


## **Server Backend Outline**
### Description
#### Messages
For this the server will receive everyone's messages and store it somewhere, which would either be on sql (nosql as well) or text file based.
It should work with either IP address, SSH key or email so that the server could identify which user is sending the messages and where to save everything. 
The app itself will work how git works where you clone all messages temporarily with queries and then delete all messages again after.
Photo's and videos need to be stored in the drive server and then be referenced from the messaging app just how markdown language link them. This will be true for pdf, email, images, videos.
The messaging app will also be stored as markdown and display it as such as well. Thus it will be able to work with apps like obsidian.

### Website
#### Messages
For the website we will use `php`, `mysql` as the back-end languages where `php` could communicate with the server through it's terminal and then the `mysql` which automatically connects to the server's databases.

### Application
All the servers will be included in one application instead of different application for each server. 

#### Messages
For the application we will use `java` at first coupled with `mysql` until the point where I learn `c++` and at that point the application will be written in `c` and `c++` for the main back-end.
The main back-end languages will be able to call "plugins" such as other `python`, `script` and `java` files. For this we will use commands to send to the server which will run the query on the server's side and not use `sql` on the app's side. The server will then send a string/text of the output divided with commas.
