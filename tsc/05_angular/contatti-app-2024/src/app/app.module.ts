import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { BrowserAnimationsModule } from '@angular/platform-browser/animations';
import { FormsModule } from '@angular/forms';


import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { ListaContattiComponent } from './lista-contatti/lista-contatti.component';
import { ContattoComponent } from './contatto/contatto.component';
import { CreaModificaContattoComponent } from './crea-modifica-contatto/crea-modifica-contatto.component';

import { MenubarModule } from 'primeng/menubar';
import { DataViewModule } from 'primeng/dataview';
import { ButtonModule } from 'primeng/button';
import { ButtonGroupModule } from 'primeng/buttongroup';
import { PanelModule } from 'primeng/panel';
import { InputTextModule } from 'primeng/inputtext';
import { ConfirmDialogModule } from 'primeng/confirmdialog';
import { ToastModule } from 'primeng/toast';
import { FloatLabelModule } from 'primeng/floatlabel';

import { ConfirmationService, MessageService } from 'primeng/api';


@NgModule({
  declarations: [
    AppComponent,
    ListaContattiComponent,
    ContattoComponent,
    CreaModificaContattoComponent,
  ],
  imports: [
    BrowserModule,
    BrowserAnimationsModule,
    AppRoutingModule,
    MenubarModule,
    DataViewModule,
    ButtonModule,
    PanelModule,
    ButtonGroupModule,
    InputTextModule,
    FormsModule,
    ConfirmDialogModule,
    ToastModule,
    FloatLabelModule
  ],
  providers: [ConfirmationService, MessageService],
  bootstrap: [AppComponent]
})
export class AppModule { }
