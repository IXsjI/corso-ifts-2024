import { Injectable } from '@angular/core';
import { Contatto } from './contatto.model';
import { v4 as uuidv4 } from 'uuid';

@Injectable({
  providedIn: 'root'
})
export class ContattoService {

  // dati temporanei per prova - per i dati veri collegamneto al backend
  contattoList: Contatto[] = [];

  constructor() {
    this.contattoList.push(new Contatto(
      '001', 'Pinco Pallino', '05419823542', 'pinco.pallino@gmail.com',
      'https://i.pravatar.cc/150?u=001'
    ));

    this.contattoList.push(new Contatto(
      '002', 'Roberto Rossi', '05419823542', 'pinco.pallino@gmail.com',
      'https://i.pravatar.cc/150?u=002'
    ));

    this.contattoList.push(new Contatto(
      '003', 'Fabio Verdi', '05419823542', 'pinco.pallino@gmail.com',
      'https://i.pravatar.cc/150?u=003'
    ));

    this.contattoList.push(new Contatto(
      '004', 'Gianni Bianchi', '05419823542', 'pinco.pallino@gmail.com',
      'https://i.pravatar.cc/150?u=004'
    ));

  }

  getContattoList(): Promise<Contatto[]> {
    // TODO: implementare collegamento al backend
    return Promise.resolve(this.contattoList.slice())
  }

  getContatto(id: string): Promise<Contatto> {
    if (id == null) {
      return Promise.reject('id non può essere null');
    } else {
      const index = this.contattoList.findIndex((c) => c.id === id);
      if (index >= 0) {
        const c = this.contattoList[index];
        return Promise.resolve(c);
      } else {
        return Promise.reject('Contatto non trovato');
      }
    }
  }

  getContatto2(id: string): Promise<Contatto> {
    if (id == null) {
      return Promise.reject('id non può essere null');
    } else {
      const c = this.contattoList.find((c) => c.id === id);
      if (c != null) {
        return Promise.resolve(c);
      } else {
        return Promise.reject('Contatto non trovato');
      }
    }
  }

  aggiornaContatto(contatto: Contatto): Promise<Contatto> {
    if (contatto == null) {
      return Promise.reject('il contatto non può essere null');
    }
    if (contatto.id == null) {
      return Promise.reject("l'id del contatto non può essere null");
    }

    const index = this.contattoList.findIndex((c) => c.id === contatto.id);
    if (index >= 0) {
      this.contattoList[index] = contatto;
      return Promise.resolve(contatto);
    } else {
      return Promise.reject('Contatto non trovato');
    }
  }

  creaContatto(
    nome: string,
    telefono: string,
    email: string,
    immagine: string
  ): Promise<Contatto> {
    const c = new Contatto(uuidv4(), nome, telefono, email, immagine);
    this.contattoList.push(c);
    return Promise.resolve(c);
  }

  eliminaContatto(id: string): Promise<void> {
    if (id == null) {
      return Promise.reject('id non può essere null');
    } else {
      const index = this.contattoList.findIndex((c) => c.id === id);
      if (index >= 0) {
        this.contattoList.splice(index, 1);
        return Promise.resolve();
      } else {
        return Promise.reject('Contatto non trovato');
      }
    }
  }

  searchContattoList(ricerca: string): Promise<Contatto[]> {
    const list = this.contattoList.filter((c) => {
      /*
      console.log(
        'searchContattoList: ricerca=' +
          ricerca +
          ', nome=' +
          c.nome +
          ', indexOf=' +
          (c.nome.indexOf(ricerca) >= 0)
      );
      */
      return c.nome.toUpperCase().indexOf(ricerca.toUpperCase()) >= 0;
    });

    return Promise.resolve(list.slice());
  }
}
