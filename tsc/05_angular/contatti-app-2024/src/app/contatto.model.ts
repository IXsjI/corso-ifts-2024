export class Contatto {

  constructor(
    public id: string,
    public nome: string,
    public telefono?: string,
    public email?: string,
    public immagine: string = 'https://vectorified.com/images/avatar-icon-png-1.png'
    // dato = '1' - 1 valore di default
  ) {

  }
}

/*
let contatto1: Contatto = new Contatto(
  '001',
  'Daniele Arduini',
  '0541 3456346',
  'daniele.arduini@01s.it',
  'http://nonso'
);

let contatto2: Contatto = new Contatto('002', 'Daniele Arduini');
*/
