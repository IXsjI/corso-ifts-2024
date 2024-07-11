//Creato io
export class Film {
  id?: string;
  name?: string;
  year?: string;
  description?: string;
  imageUrl?: string;
  director?: string;
  cast?: string[];
  rating?: string;

  constructor () {

  }
}

export class OmdbFilm {
  imdbID?: string;
  Title?: string;
  Year?: string;
  Plot?: string;
  Poster?: string;
  Director?: string;
  Actors?: string;
  imdbRating?: string;
}

// {"Title":"Love",
// "Year":"2015",
// "Rated":"TV-MA",
// "Released":"30 Oct 2015",
// "Runtime":"135 min",
// "Genre":"Drama, Romance",
// "Director":"Gaspar Noé",
// "Writer":"Gaspar Noé",
// "Actors":"Aomi Muyock, Karl Glusman, Klara Kristin",
// "Plot":"Murphy is an American living in Paris who enters a highly sexually and emotionally charged relationship with Electra. Unaware of the effect it will have on their relationship, they invite their pretty neighbor into their bed.",
// "Language":"English, French",
// "Country":"France, Belgium",
// "Awards":"2 wins & 1 nomination",
// "Poster":"https://m.media-amazon.com/images/M/MV5BZGQxZTFlZDctZjcyMy00NzA1LWFkMDYtNzRmZTkwYTFhYTc3XkEyXkFqcGdeQXVyODE5NzE3OTE@._V1_SX300.jpg",
// "Ratings":[{"Source":"Internet Movie Database","Value":"6.1/10"},{"Source":"Rotten Tomatoes","Value":"42%"},{"Source":"Metacritic","Value":"51/100"}],
// "Metascore":"51",
// "imdbRating":"6.1",
// "imdbVotes":"66,298",
// "imdbID":"tt3774694",
// "Type":"movie",
// "DVD":"N/A",
// "BoxOffice":"$249,083",
// "Production":"N/A",
// "Website":"N/A",
// "Response":"True"}

/*
{
  "Search": [
    {
      "Title": "Mateoren Ama",
      "Year": "2019",
      "imdbID": "tt10511136",
      "Type": "movie",
      "Poster": "https://m.media-amazon.com/images/M/MV5BOWFjY2IzNWMtYmQ2Zi00NjQ4LWEzMTctMWYyYjgxM2Y5MWNiXkEyXkFqcGdeQXVyNzg1OTA3ODk@._V1_SX300.jpg"
    },
    {
      "Title": "No me ama",
      "Year": "2010",
      "imdbID": "tt1795630",
      "Type": "movie",
      "Poster": "https://m.media-amazon.com/images/M/MV5BNWNhNjYxNzItMDZhMC00NzZhLTgyMmQtNDg2N2U2NzkzNzkyXkEyXkFqcGdeQXVyNjU0ODQ0ODI@._V1_SX300.jpg"
    },
  ],
  "totalResults": "157",
  "Response": "True"
}
*/


export class OmdbSearchResponse {
  Response?: string;
  Search?: OmdbFilm[];
  totalResults?: string;
  Error?: string;

}
