import { Injectable } from '@angular/core';
import { Server, ServerStatus } from './server.model';
import { v4 as uuidv4 } from 'uuid';

@Injectable({
  providedIn: 'root'
})
export class DataCenterService {
  serverList: Server[] = [
    new Server(uuidv4(), 'webserver1'),
    new Server(uuidv4(), 'webserver2'),
    new Server(uuidv4(), 'db1'),
    new Server(uuidv4(), 'db2'),
  ]
  constructor() { }


  getServerList(): Server[] {
    return this.serverList.slice();
  }

  setServerList(list: Server[]): void {
    this.serverList = list.slice();
  }

  getServerById(id: string): Server | null {
    let server = this.serverList.filter(
      (serverName) => serverName.id === id
    );
    if (server) {
      return server[0];
    }
    return null;
    // return server;
  }

  getServerByName(name: string): Server | null {
    let server = this.serverList.filter(
      (serverName) => serverName.name === name
    );
    if (server) {
      return server[0];
    }
    return null;
    // return server;
  }

  addServer(server: Server): Server[] {
    if (server.id == null || server.id == '') {
      server.id = uuidv4();
    }
    this.serverList.push(server);
    return this.getServerList();
  }

  addServerByAttributes(id: string, name: string, status: ServerStatus = ServerStatus.OFFLINE): Server[] {
    const server = new Server(id, name, status);
    return this.addServer(server);
  }

  removeServer(server: Server): Server[] {
    this.serverList = this.serverList.filter(
      (serverName) => serverName.id !== server.id
    );
    return this.getServerList();
  }

  removeServerById(id: string): Server[] {
    this.serverList = this.serverList.filter(
      (serverName) => serverName.id !== id
    );
    return this.getServerList();
  }

  removeServerByName(name: string): Server[] {
    this.serverList = this.serverList.filter(
      (serverName) => serverName.name !== name
    );
    return this.getServerList();
  }

}
