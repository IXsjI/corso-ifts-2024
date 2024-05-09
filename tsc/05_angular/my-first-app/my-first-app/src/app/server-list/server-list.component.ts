import { Component } from '@angular/core';
import { ServerComponent } from '../server/server.component';

@Component({
  selector: 'app-server-list',
  standalone: true,
  imports: [ServerComponent],
  templateUrl: './server-list.component.html',
  styleUrl: './server-list.component.css'
})
export class ServerListComponent {

  allowNewServer = false;
  serverCreationStatus = 'No server created';

  constructor() {
    setTimeout(() => {
      this.allowNewServer = true;
    }, 5000);
  }
  
  ngOnInit() {
  }

  onCreateServer() {
    this.serverCreationStatus = 'Server created!';
    }
}
