export class Server {

  constructor(
    public id: string,
    public name: string,
    public status: ServerStatus  = ServerStatus.OFFLINE
  ) {}

  reboot() {
    this.status = ServerStatus.OFFLINE;
    setTimeout(() => {
      this.status = ServerStatus.ONLINE;
    }, 2000);
  }
}


export enum ServerStatus {

  ONLINE = "Online",
  OFFLINE = "Offline",
}


// let s = new Server();
// s.id = 12;
// s.name = 'server1';
// s.status = ServerStatus.OFFLINE;


// let s = new Server(12, 'webserver1', ServerStatus.OFFLINE);
