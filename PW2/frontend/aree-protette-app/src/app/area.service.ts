import { Injectable } from '@angular/core';
import { Area, AreaList, Specie } from './app.models';
import { HttpClient } from '@angular/common/http';

@Injectable({
  providedIn: 'root'
})
export class AreaService {
  areaList: Area[] = [];
  specieList: Specie[] = [];

  constructor(private http: HttpClient) {

   }

  getAree(): Promise<Area[]> {
    return this.http
      .get<AreaList>(
        'http://127.0.0.1:8000/api/aree'
      )
      .toPromise()
      .then((o) => {
        if (o?.response === 'True' && o.areas != null) {
          const respList = o.areas;
          const areaList: Area[] = respList?.map((r) => {
            const a: Area = new Area();
            a.area_id = r?.area_id;
            a.a_nome = r?.a_nome;
            a.a_immagine = r?.a_immagine;
            a.a_descrizione = r?.a_descrizione;
            a.a_tipo_ambiente = r?.a_tipo_ambiente;
            return a;
          });
          return areaList != null ? areaList : [];
        } else {
          return [];
        }
      });
  }

  getAreeList() {
    return this.areaList
  }


}
