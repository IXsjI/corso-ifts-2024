import { Component } from '@angular/core';
import { ContattoService } from '../contatto.service';
import { Contatto } from '../contatto.model';
import { ConfirmationService, MessageService } from 'primeng/api';

@Component({
  selector: 'app-lista-contatti',
  templateUrl: './lista-contatti.component.html',
  styleUrl: './lista-contatti.component.css',
})
export class ListaContattiComponent {
  contattoList!: Contatto[];

  ricerca: string = '';

  constructor(
    private contattoService: ContattoService,
    private confirmationService: ConfirmationService,
    private messageService: MessageService
  ) {}

  ngOnInit() {
    this.contattoService
      .getContattoList()
      .then((list: Contatto[]) => (this.contattoList = list));
  }

  onElimina(event: MouseEvent, itemId: string) {
    console.log('onElimina: ', event, itemId);

    this.confirmationService.confirm({
      target: event.target as EventTarget,
      message: 'Sei sicuro di volerlo eliminare?',
      header: 'Confirmation',
      icon: 'pi pi-exclamation-triangle',
      acceptIcon: 'none',
      rejectIcon: 'none',
      rejectButtonStyleClass: 'p-button-text',
      accept: () => {
        this.messageService.add({
          severity: 'info',
          summary: 'Confirmed',
          detail: 'Contatto eliminato',
        });

        this.contattoService.eliminaContatto(itemId).then(() => {
          this.contattoService
            .getContattoList()
            .then((list: Contatto[]) => (this.contattoList = list));
        });
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


  onRicerca() {
    this.contattoService
      .searchContattoList(this.ricerca)
      .then((list: Contatto[]) => (this.contattoList = list));
  }
}
