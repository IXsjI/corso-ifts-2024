import { Component } from '@angular/core';
import { RouterOutlet } from '@angular/router';
import { interval } from 'rxjs';

@Component({
  selector: 'app-root',
  standalone: true,
  imports: [RouterOutlet],
  template: `
    <h1>Welcome to {{title}}!</h1>

    <router-outlet />
  `,
  styles: [],
})
export class AppComponent {
  title = 'Ciao Mondo';
  constructor () {
    let sub$ = interval(1000);

    sub$.subscribe(
      (x) => {
        this.title = "Ciao Mondo " + x;
      }
    )
  }
} 
