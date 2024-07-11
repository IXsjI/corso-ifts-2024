import { Injectable } from '@angular/core';
import { Film, OmdbFilm, OmdbSearchResponse } from './film.model';
import { HttpClient } from '@angular/common/http';

const OMDB_API_KEY = 'f3a6e779';

@Injectable({
  providedIn: 'root',
})
export class FilmService {
  filmList: Film[] = [];

  idList: string[] = [
    'tt0098606', // The Voice of the Moon
    'tt0093267', // Intervista
    'tt0091113', // Ginger & Fred
    'tt0087188', // The Ship Sails On
    'tt0080539', // City of Women
    'tt0079759', // Orchestra Rehearsal
    'tt0074291', // Casanova
    'tt0071129', // Amarcord
    'tt0069191', // Roma
    'tt0066922', // The Clowns
    'tt0064940', // Fellini Satyricon
    'tt1415092', // NBC Experiment in Television
    'tt0063715', // Spirits of the Dead
    'tt0059229', // Juliet of the Spirits
    'tt0056801', // 8½
    'tt0055805', // Boccaccio '70
    'tt0053779', // La Dolce Vita
    'tt0050783', // Nights of Cabiria
    'tt0047876', // The Swindle
    'tt0047528', // The Road
    'tt0045504', // Love in the City
    'tt0046521', // The Bullocks
    'tt0044000', // The White Sheik
    'tt0042692', // Variety Lights
  ];

  constructor(private http: HttpClient) {
    // Amarcord
    for (const id of this.idList) {
      this.getFilm(id)
      .then(f => this.filmList.push(f))
      .catch(err => console.warn("FilmService.init(): fallito caricamento del film id "));
    }
  }

  searchFilm(term: string): Promise<Film[]> {
    if (term == null || term.length == 0) {
      return Promise.resolve([]);
    }
    return this.http
      .get<OmdbSearchResponse>(
        'http://www.omdbapi.com/?apikey=' + OMDB_API_KEY + '&s=' + term
      )
      .toPromise()
      .then((o) => {
        const f: Film = new Film();
        f.id = o?.imdbID;
        f.name = o?.Title;
        f.description = o?.Plot;
        f.imageUrl = o?.Poster;
        f.director = o?.Director;
        f.cast = o?.Actors?.split(',');
        f.year = o?.Year;
        f.rating = o?.imdbRating;
        return f;
      });
  }



  getFilmList(): Promise<Film[]> {
    return Promise.resolve(this.filmList);
  }

  // getFilm(id: number): Promise<Film> {
  //   let film = this.filmList.filter((film) => film.id === id);
  //   if (film.length >= 1) {
  //     return Promise.resolve(film[0]);
  //   } else {
  //     return Promise.reject('Film con id = ' + id + ' non trovato');
  //   }
  // }

  getFilm(id: string): Promise<Film> {
    if (! id.startsWith('tt')) {
      id = 'tt' + id;
    }

    return this.http.get<OmdbFilm>(
      'http://www.omdbapi.com/?apikey=' + OMDB_API_KEY + '&i=' + id
    ).toPromise()
    .then(o => {
      const f: Film = new Film();
      f.id = o?.imdbID;
      f.name = o?.Title;
      f.year = o?.Year;
      f.description = o?.Plot;
      f.imageUrl = o?.Poster;
      f.director = o?.Director;
      f.rating = o?.imdbRating;
      f.cast = o?.Actors?.split(',');
      return f;
    });

    /*
    let film = this.filmList.filter((film) => film.id === id);
    return new Promise<Film>((resolve, reject) => {
      // qui nella realtà ci sarebbe la chiamata http verso il server
      setTimeout(() => {
        if (film.length >= 1) {
          resolve(film[0]);
        } else {
          reject("Film con id = " + id + " non trovato");
        }
      }, 1000);
    });
    */
  }


}
