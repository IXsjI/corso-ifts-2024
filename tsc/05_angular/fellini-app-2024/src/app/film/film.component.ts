import { Component, Input, OnInit } from '@angular/core';
import { FilmService } from '../film.service';
import { Film } from '../film.model';
import { ActivatedRoute } from '@angular/router';
@Component({
  selector: 'app-film',
  templateUrl: './film.component.html',
  styleUrls: ['./film.component.css'],
})
export class FilmComponent implements OnInit {
  @Input() film: Film | null = null;

  errorMessage: string | null = null;

  constructor(
    public filmService: FilmService,
    private activatedRoute: ActivatedRoute
  ) {}
  ngOnInit(): void {
    const id = this.activatedRoute.snapshot.paramMap.get('id');
    // console.log('FilmComponent.ngOnInit(): film id=', id);
    if (id != null) {
      this.filmService.getFilm(id)
        .then((film) =>{this.film = film})
        .catch((err) => {
          this.errorMessage = err;
          console.error(err);
        });
      // console.log('FilmComponent.ngOnInit(): film ', this.film);
    }
  }
}
