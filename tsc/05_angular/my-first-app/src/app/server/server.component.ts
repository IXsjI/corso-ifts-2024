import { CommonModule } from '@angular/common';
import {
  Component,
  Input,
  CUSTOM_ELEMENTS_SCHEMA,
  Output,
  EventEmitter,
} from '@angular/core';
import { DataCenterService } from '../data-center.service';
import { Server, ServerStatus } from '../server.model';

@Component({
  selector: 'app-server',
  standalone: true,
  imports: [CommonModule],
  templateUrl: './server.component.html',
  styles: [
    `
      .online {
        color: white;
      }

    `,
  ],
  schemas: [CUSTOM_ELEMENTS_SCHEMA],
})
export class ServerComponent {
  @Input() server: Server | null = null;

  @Output() removed = new EventEmitter<Server>();

  constructor(private dataCenterService: DataCenterService) {}

  public getServerStatus(): string | null {
    if (this.server !== null) {
      return this.server.status;
    } else {
      return null;
    }
  }

  getColor() {
    let color = 'red';
    if (this.server != null) {
      color = this.server.status === ServerStatus.ONLINE ? 'green' : 'red';
    }
    return color;
  }

  getForegroundColor() {
    let color = 'lightgray';
    if (this.server != null) {
      color =
        this.server.status === ServerStatus.ONLINE ? 'white' : 'lightgray';
    }
    return color;
  }

  onReboot() {
    if (this.server != null) {
      this.server.reboot();
    }
  }

  onRemove() {
    if (this.server != null) {
      this.removed.emit(this.server);
    }
  }
}
