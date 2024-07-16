import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { AreaListComponent } from './area-list/area-list.component';
import { AreaComponent } from './area/area.component';

const routes: Routes = [
  { path: '', redirectTo: 'aree', pathMatch: 'full'},

  { path: 'aree', component: AreaListComponent },
  { path: 'area/:id', component: AreaComponent },

  { path: '**', redirectTo: 'aree'}
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
