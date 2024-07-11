import { Injectable } from '@angular/core';
import { Result, User } from './user.model';
import { HttpClient } from '@angular/common/http';

const N_USER_DISPLAYER = 20;

@Injectable({
  providedIn: 'root',
})
export class RubricaService {
  userList: User[] | null = null;

  constructor(private http: HttpClient) {}

  getUserList(): Promise<User[]> {
    // console.log('get userlist');
    if (this.userList != null) {
      return Promise.resolve(this.userList);
    } else {
      return this.http
        .get<Result>('https://randomuser.me/api/?results=20')
        .toPromise()
        .then((o) => {
          if (o != null && o.results != null) {
            this.userList =  o.results;
            return o.results;
          } else {
            return [];
          }
        });
    }
  }

  getUser(id: string): Promise<User> {
    // console.log('getuser');
    if (this.userList != null) {
      let user = this.userList.filter((u) => u.login?.uuid === id);
      if (user.length >= 1) {
        return Promise.resolve(user[0]);
      } else {
        console.log(this.userList);
        return Promise.reject('User con id = ' + id + ' non trovato');
      }
    } else {
      this.getUserList();
      return Promise.reject('Lista non esistente');
    }
  }
}
