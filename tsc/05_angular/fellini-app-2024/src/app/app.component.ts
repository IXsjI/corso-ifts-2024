import { Component, OnInit } from '@angular/core';
import { Film } from './film.model';
import { FilmService } from './film.service';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrl: './app.component.css'
})
export class AppComponent {
  title = 'fellini-app-2024';
}
