import { Component } from '@angular/core';
import { Film } from '../film.model';
import { FilmService } from '../film.service';

@Component({
  selector: 'app-film-list',
  templateUrl: './film-list.component.html',
  styleUrl: './film-list.component.css',
})
export class FilmListComponent {
  filmList: Film[] = [];

  searchTerm: string = '';

  constructor(public filmService: FilmService) {}

  ngOnInit(): void {
    this.filmService.getFilmList().then((list) => {
      this.filmList = list;
    });
  }

  onSearch(event: Event) {
    this.searchTerm = (event.target as HTMLInputElement).value;

    this.filmService.getFilmList().then((list) => {
      if (this.searchTerm == null || this.searchTerm.length === 0) {
        this.filmList = list;
      } else {
        this.filmList = list.filter(film => {
          if (film.name != null && film.name?.toLocaleLowerCase().indexOf(this.searchTerm.toLocaleLowerCase()) >= 0) {
            return true;
          } else {
            return false;
          }
        }
        );
      }
    });
  }
}
