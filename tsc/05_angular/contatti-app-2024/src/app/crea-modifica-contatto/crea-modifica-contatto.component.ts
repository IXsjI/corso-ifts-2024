import { Component, OnInit } from '@angular/core';
import { ContattoService } from '../contatto.service';
import { ActivatedRoute, Router } from '@angular/router';
import { Contatto } from '../contatto.model';
import { ConfirmationService, MessageService } from 'primeng/api';

@Component({
  selector: 'app-crea-modifica-contatto',
  templateUrl: './crea-modifica-contatto.component.html',
  styleUrl: './crea-modifica-contatto.component.css',
})
export class CreaModificaContattoComponent implements OnInit {
  id: string = '';
  nome: string = '';
  telefono: string = '';
  email: string = '';
  immagine: string = '';

  constructor(
    private contattoService: ContattoService,
    private router: Router,
    private activatedRoute: ActivatedRoute,
    private confirmationService: ConfirmationService,
    private messageService: MessageService
  ) {}

  ngOnInit(): void {
    const id = this.activatedRoute.snapshot.paramMap.get('id');
    if (id != null) {
      this.contattoService
        .getContatto(id)
        .then((c) => {
          this.id = c.id;
          this.nome = c.nome;
          this.telefono = c.telefono || '';
          this.email = c.email || '';
          this.immagine = c.immagine;
        })
        .catch((err) => {
          this.messageService.add({
            severity: 'error',
            summary: 'Rejected',
            detail: 'Errore nel recupero del contatto: ' + err,
          });
        });
    }
  }

  onSalva() {
    // console.log(
    //   `onSalva: id=${this.id}, nome=${this.nome}, telefono=${this.telefono}, email=${this.email}, immagine=${this.immagine}`
    // );

    if (this.id == null || this.id == '') {
      this.contattoService
        .creaContatto(this.nome, this.telefono, this.email, this.immagine)
        .then((c) => {
          console.log('inserito contatto con id = ' + c.id);
          this.messageService.add({
            severity: 'info',
            summary: 'Confirmed',
            detail: 'Contatto creato',
          });
          this.router.navigate(['/']);
        })
        .catch((err) => {
          this.messageService.add({
            severity: 'error',
            summary: 'Rejected',
            detail: 'Errore nella creazione del contatto: ' + err,
          });
        });
    } else {
      const contatto = new Contatto(
        this.id,
        this.nome,
        this.telefono,
        this.email,
        this.immagine
      );
      this.contattoService
        .aggiornaContatto(contatto)
        .then((c) => {
          console.log('aggiornato contatto con id = ' + c.id);
          this.messageService.add({
            severity: 'info',
            summary: 'Confirmed',
            detail: 'Contatto aggiornato',
          });
          this.router.navigate(['/']);
        })
        .catch((err) => {
          this.messageService.add({
            severity: 'error',
            summary: 'Rejected',
            detail: "Errore nell'aggiornamento del contatto: " + err,
          });
        });
    }
  }

  onAnnulla() {
    console.log('onAnnulla: ');

    this.confirmationService.confirm({
      // target: event.target as EventTarget,
      message: 'Sei sicuro di volerlo annullare la modifica?',
      header: 'Confirmation',
      icon: 'pi pi-exclamation-triangle',
      acceptIcon: 'none',
      rejectIcon: 'none',
      rejectButtonStyleClass: 'p-button-text',
      accept: () => {
        this.messageService.add({
          severity: 'info',
          summary: 'Confirmed',
          detail: 'Modifica/creazione annullata',
        });

        this.router.navigate(['/']);
      },
      reject: () => {
        this.messageService.add({
          severity: 'error',
          summary: 'Rejected',
          detail: 'Operazione annullata',
          life: 3000,
        });
      },
    });
  }
}

