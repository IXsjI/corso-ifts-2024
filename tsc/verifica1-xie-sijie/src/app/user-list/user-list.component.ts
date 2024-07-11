import { Component } from '@angular/core';
import { RubricaService } from '../rubrica.service';
import { User } from '../user.model';

@Component({
  selector: 'app-user-list',
  templateUrl: './user-list.component.html',
  styleUrl: './user-list.component.css'
})
export class UserListComponent {
  userList: User[] | null = null;

  errMessage: string | null = null;

  constructor(public rubricaService: RubricaService) {}

  ngOnInit(): void {
    // console.log('oninit user list');
    this.rubricaService.getUserList()
    .then((list) => {
      this.userList = list;
    })
    .catch((err) => {
      this.errMessage = err;
      console.log(err);
    });
  }
}
