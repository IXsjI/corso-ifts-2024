import { Component } from '@angular/core';
import { AreaService } from '../area.service';
import { Area } from '../app.models';

@Component({
  selector: 'app-area-list',
  templateUrl: './area-list.component.html',
  styleUrl: './area-list.component.css'
})
export class AreaListComponent {
  areaList: Area[] = [];

  constructor(private areaService: AreaService) {}

  ngOnInit(): void {
    this.areaService
      .getAree()
      .then((list) => (this.areaList = list));

  }

}
