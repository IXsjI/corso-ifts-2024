export class AreaList {
  response?:  string;
  areas?: Area[];
}


export class Area {
  area_id?: number;
  a_nome?: string;
  a_immagine?: string;
  a_descrizione?: string;
  a_tipo_ambiente?: string;

  constructor () {

  }
}

export class Specie {
  specie_id?: number;
  s_name?: string;
  s_immagine?: string;
  s_descrizione?: string;
  s_stato_conservazione?: string;
  s_area_id?: number;

  constructor () {

  }
}
