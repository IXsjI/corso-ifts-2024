import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { CreaModificaContattoComponent } from './crea-modifica-contatto/crea-modifica-contatto.component';
import { ListaContattiComponent } from './lista-contatti/lista-contatti.component';

const routes: Routes = [
  { path: '', redirectTo: 'contatto', pathMatch: 'full'},
  
  { path: 'contatto', component: ListaContattiComponent },
  // { path: 'contatto/:id', component: CreaModificaContattoComponent },
  { path: 'contatto/:id/edit', component: CreaModificaContattoComponent },
  { path: 'contatto/new', component: CreaModificaContattoComponent },

  { path: '**', redirectTo: 'contatto'}
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
