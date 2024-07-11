import { Component } from '@angular/core';
import { RouterOutlet } from '@angular/router';
import { ServerComponent } from './server/server.component';
import { ServerListComponent } from './server-list/server-list.component';

@Component({
  selector: 'app-root',
  standalone: true,
  imports: [RouterOutlet, ServerComponent, ServerListComponent],
  templateUrl: './app.component.html',
  styleUrl: './app.component.css'

})
export class AppComponent {
  title = 'my-first-app';
}
