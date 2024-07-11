import { Component, Input } from '@angular/core';
import { User } from '../user.model';
import { ActivatedRoute } from '@angular/router';
import { RubricaService } from '../rubrica.service';

@Component({
  selector: 'app-user-detail',
  templateUrl: './user-detail.component.html',
  styleUrl: './user-detail.component.css'
})
export class UserDetailComponent {
  @Input() user: User | null = null;

  errorMessage: string | null = null;

  constructor(
    public rubricaService: RubricaService,
    private activatedRoute: ActivatedRoute
  ) {}

  ngOnInit(): void {
    const id = this.activatedRoute.snapshot.paramMap.get('uuid');
    // console.log(id);
    if (id != null) {
      this.rubricaService.getUser(id)
        .then((u) =>{
          this.user = u
          // console.log(u)
        })
        .catch((err) => {
          this.errorMessage = err;
          console.error(err);
        });
    }
  }
}
