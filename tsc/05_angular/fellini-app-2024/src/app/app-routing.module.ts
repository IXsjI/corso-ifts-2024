import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { FilmListComponent } from './film-list/film-list.component';
import { FilmComponent } from './film/film.component';

const routes: Routes = [
  { path: '', component: FilmListComponent },
  { path: 'film', component: FilmListComponent },
  { path: 'film/:id', component: FilmComponent },
  { path: '**', redirectTo: ''}
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
