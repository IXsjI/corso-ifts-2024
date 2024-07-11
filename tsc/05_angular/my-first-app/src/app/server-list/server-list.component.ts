import { Component, CUSTOM_ELEMENTS_SCHEMA } from '@angular/core';
import { ServerComponent } from '../server/server.component';
import { CommonModule } from '@angular/common';
import { DataCenterService } from '../data-center.service';
import { Server } from '../server.model';

@Component({
  selector: 'app-server-list',
  standalone: true,
  imports: [ServerComponent, CommonModule],
  templateUrl: './server-list.component.html',
  styleUrl: './server-list.component.css',
  schemas: [CUSTOM_ELEMENTS_SCHEMA],
})
export class ServerListComponent {
  allowNewServer = false;
  serverCreationStatus = 'No server created';
  serverName = '';
  stileParagrafo = 'background-color: white;';
  stileInput = 'color: black;';
  serverWasCreated = false;


  constructor(public dataCenterService: DataCenterService) {
    setTimeout(() => {
      this.allowNewServer = true;
    }, 5000);
  }

  ngOnInit() {}

  onCreateServer() {
    this.serverCreationStatus = 'Server created!';
    this.serverWasCreated = true;
    if (this.serverName.length > 0) {
      this.dataCenterService.addServerByAttributes('', this.serverName);
    }
  }

  onUpdateServerName(event: Event) {
    console.log('onUpdateServerName: ', event);

    if (event != null && event.target) {
      let campoDelForm: HTMLInputElement = event.target as HTMLInputElement;
      this.serverName = campoDelForm.value;
      let regex = /^[A-Za-z0-9( )]+$/i;
      if (!regex.test(this.serverName)) {
        this.stileInput = 'color: red;';
      } else {
        this.stileInput = 'color: black;';
      }
    }
    // let ok: boolean = true;
    // for (let i = 0; i < this.serverName.length && ok; i++) {
    //   let ch = this.serverName.charAt(i);
    //   if (
    //     (ch >= 'a' && ch <= 'z') ||
    //     (ch >= '0' && ch <= '9') ||
    //     (ch >= 'A' && ch <= 'Z')
    //   ) {
    //     ok = true;
    //   } else {
    //     ok = false;
    //     break;
    //   }
    // }

    // if (ok) {
    //   this.stileInput = 'color: black';
    // } else {
    //   this.stileInput = 'color: red';
    // }

    // this.serverName = (<HTMLInputElement>event.target).value;
    // this.serverName = (event.target as HTMLInputElement).value;
  }

  onMouseOver(event: MouseEvent) {
    console.log('onMouseOver', event);
    this.stileParagrafo = 'background-color: yellow';
  }

  onMouseOut(event: MouseEvent) {
    this.stileParagrafo = 'background-color: white';
  }

  onServerRemoved(server: Server) {
    // console.log('serverlist: removed ', name);

    /* 1
    const newList = [];
    for (let i = 0; i < this.serverList.length; i++) {
      const element = this.serverList[i];
      if (element !== name) {
        newList.push(element)
      }
    }
    this.serverList = newList*/

    /* 2
    const index = this.serverList.indexOf(name);

    if (index > -1) {
      this.serverList.splice(index, 1);
    }

    this.serverList = [...this.serverList];*/

    /*const risultato = this.serverList.filter(
      (serverName) => serverName !== name
    );
    this.serverList = risultato;*/
    this.dataCenterService.removeServer(server);
  }
}
